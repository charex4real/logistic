<?php

namespace App\Http\Controllers;
use App\Model\Social;
use App\Model\GeneralSetting;
use App\Model\VisitorMessage;
use Illuminate\Http\Request;
use App\Model\GalleryImage;
use Illuminate\Support\Facades\Session;
use App\Model\Service;
use App\Model\Testimonial;
use App\Model\Faq;
use App\Model\CourierType;
use App\Model\CurrierInfo;
use App\Model\CurrierProductInfo;
use App\Model\Branch;
use DNS1D;
use Illuminate\Support\Str;
use DB; 
use App\Model\Currier;
use App\Model\CurriersProductInfo;


class FrontController extends Controller {

    public function index() {
        $testimonialList = Testimonial::all();
        $socialList = Social::get();
        $gs = GeneralSetting::first();
        $serviceList = Service::all();
        return view('frontend.index', compact('socialList', 'gs', 'serviceList', 'testimonialList'));
    }

    public function aboutus() {
        $socialList = Social::get();
        $gs = GeneralSetting::first();
        $testimonialList = Testimonial::all();
        return view('frontend.about-us', compact('socialList', 'gs', 'testimonialList'));
    }

    public function services() {
        $socialList = Social::get();
        $gs = GeneralSetting::first();
        $serviceList = Service::all();
        $testimonialList = Testimonial::all();
        return view('frontend.services', compact('serviceList', 'socialList', 'gs', 'testimonialList'));
    }

    public function contactus() {
        $socialList = Social::get();
        $gs = GeneralSetting::first();
        return view('frontend.contact', compact('socialList', 'gs'));
    }

    public function faq() {
        $socialList = Social::get();
        $gs = GeneralSetting::first();
        $faqList = Faq::all();
        $serviceList = Service::all();
        return view('frontend.faq', compact('socialList', 'gs', 'faqList', 'serviceList'));
    }

    public function visitorMessage(Request $request, VisitorMessage $visitorMessage) {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'max:100',
            'phone' => 'max:100',
        ]);
        $data = $request->all();
        $visitorMessage->create($data);

        return redirect()->route('front.contactus', ["#contactustest"])->withSuccess("Thanks for your message");
    }

    public function searchCurrier(Request $request) {

        $currier_invoice = $request->get('currier_invoice');
        $currierInfo = CurrierInfo::where('invoice_id', $currier_invoice)->orWhere('code',$currier_invoice)->first();
        return redirect()->route('front.index', ["#currier-search"])->with('currierInfo', $currierInfo);
        
    } 


    public function order(Request $request) {

        $testimonialList = Testimonial::all();
        $socialList = Social::get();
        $gs = GeneralSetting::first();
        $serviceList = Service::all();
         $branchList = Branch::where([['status', 'Active']])->get();
        $courierTypeList = CourierType::where('status','Active')->get();
        return view('frontend.order', compact('socialList', 'gs', 'serviceList', 'testimonialList', 'branchList', 'courierTypeList'));
        
    }


    public function orderform(Request $request) {

       $request->validate([
            'sender_name' => 'required|max:50',
            'area_code' => 'required|max:100',
            'sender_phone' => 'required|max:50',
            'receiver_name' => 'required|max:50',
            'receiver_phone' => 'required|max:50',
            'currier_type' => 'required',
            'currier_quantity.*' => 'required|numeric',
            'currier_fee.*' => 'required|numeric'
        ]);


        $data = $request->except('_token','currier_type','currier_quantity','currier_fee');

        if (Currier::first()) {
                $lastInvoice = Currier::latest()->first()->id;
            } else {
                $lastInvoice = 0;
            }

            $data['invoice_id'] = $lastInvoice + 1;

            $data['status'] = 'Order';

            $data['payment_balance'] = array_sum($request->currier_fee);

            $currier_code = strtoupper(Str::random(10));

            $data['code'] = $currier_code;

            $currier = Currier::create($data);

            $currier_type = $request->currier_type;

            for ($i = 0; $i < count($currier_type); $i++) {
                $currierProductInfo = new CurriersProductInfo();
                $currierProductInfo->currier_code = $currier_code;
                $currierProductInfo->currier_id = $currier->id;
                $currierProductInfo->currier_type = $request->currier_type[$i];
                $currierProductInfo->currier_quantity = $request->currier_quantity[$i];
                $currierProductInfo->currier_fee = $request->currier_fee[$i];
                $currierProductInfo->save();
            }

         return response()->json($currier);
         

    }
    
 public function distance(Request $request){

        $link = $request->query('link');
//Key here is your google key
#link looks like https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=place_id:".originPlaceId."&destinations=place_id:".destinationPlaceId."&region=ng&units=metric&key=hL155Mk5EkI" 
        $origin_state = $request->query('origin_state');
        $destination_state = $request->query('destination_state');

        $origin = $request->query('origin_location');
        $destination = $request->query('destination_location');

        $response = $this->curlget($link); 
        if (!$response) {
            
            $data['status'] = 'failed';
            $data['content']  = 'oops !!!, your enquiry just went faulty due to your internet settings. Please try again later ';
            return response()->json($data);
        
        }
        $value = json_decode($response);
        $rows = $value->rows;
        $status = $value->status; //status of the request. OK for good
        $element_status = $rows[0]->elements[0]->status; //Status of this element query. OK for good
        $distance_text = $rows[0]->elements[0]->distance->text; //distance is written kilometers or meters
        $distance_value = $rows[0]->elements[0]->distance->value; //distance in meters. fully numeric
        $duration_text = $rows[0]->elements[0]->duration->text; //duration of travel written in minutes. alpha Numeric
        $duration_value = $rows[0]->elements[0]->duration->value; //duration of travel in seconds. strictly numeric

        if ($status == 'OK' AND $element_status == 'OK') {

            //The price factors distributed according to time of day
             $PeakFactor =  $this->distributeHours(); //This is located in the HelpfulFunctions Trait class
             $all_carcat = Car_cartegory::all(); //Get all car categories
             $ride_price=[];
            foreach ($all_carcat as $key) {
                
                $car_category_id = $key->id;
                //dd($car_category_id);
             $pricefactor = Price::where([['car_cartegory_id',  $car_category_id],['peak_factor',$PeakFactor]])->firstOrFail();
             //Push the unit prices to the array
             array_push($ride_price, $pricefactor->unit_price);
             }

             $maximum_price = max($ride_price); //Get the Maximum unit price 
             $minimum_price = min($ride_price);  //Get the minimum unit price

            $max_ride_price = $maximum_price * $distance_value;//This is the total price for distance travlled[Maximum]

            $min_ride_price = $minimum_price * $distance_value;//This is the total price for distance travlled[Minimum]

            

            $data['status'] = 'success';
            $data['content'] = 'Your fare enquiry for a ride from '.$origin.' to '.$destination.' has an estimated distance of 
                                 '.$distance_text.' and will be completed in at least '.$duration_text.'.<br>
                                 The least cost of this ride at this time should be '.$this->currencies['naira'].' '.$min_ride_price; 
        }else{  

            $data['status'] = 'failed';
            $data['content']  = 'oops !!!, your enquiry just went faulty. Please try again later ';
        }
        //return dd($rows[0]->elements[0]->duration);

        return response()->json($data);

    }

public static function distributeHours(){

        $dates_start      = date('d-m-Y');
        $times_start      = date('H:i:s');

         $curd = date('d');
         $curmo = date('m');
         $curye = date('Y');

         $curhr = date('H');
         $curmin = date('i');
         $cursec = date('s');

         
        $hour = mktime($curhr, $curmin, $cursec, $curmo, $curd, $curye);

        $twelveAM = mktime(23, 59, 59, $curmo, $curd, $curye);
        $sixAM = mktime(6, 0, 0, $curmo, $curd, $curye);
        $eightAM = mktime(8, 0, 0, $curmo, $curd, $curye);
        $nineAM = mktime(9, 0, 0, $curmo, $curd, $curye);
        $twoPM = mktime(14, 0, 0, $curmo, $curd, $curye);
        $fourPM = mktime(16, 0, 0, $curmo, $curd, $curye);
        $ninePM = mktime(21, 0, 0, $curmo, $curd, $curye);

        if ($hour <= $sixAM) { //Times between 12am and  6am
            return Price::PEAKFACTORFOUR;
        }

        elseif($hour > $sixAM && $hour <= $eightAM) { //Times between 6am and  8am
          return Price::PEAKFACTORONE;
        }

         elseif($hour > $eightAM  && $hour <= $nineAM) { //Times between 8am and  9am
          return Price::PEAKFACTORTWO;
        }

         elseif($hour > $nineAM && $hour <= $twoPM) { //Times between 9am and  2pm
          return Price::PEAKFACTORONE;
        }

         elseif($hour > $twoPM && $hour <= $fourPM) { //Times between 2pm and  4pm
          return Price::PEAKFACTORTWO;
        }

        elseif($hour > $fourPM && $hour <= $ninePM ) { //Times between 4pm and  9pm
          return Price::PEAKFACTORONE;
        }


        elseif($hour > $ninePM  && $hour <= $twelveAM) { //Times between 9pm and  12am
          return Price::PEAKFACTORTHREE;
        }



    }

}
