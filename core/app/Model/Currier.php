<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Currier extends Model {

   protected $table = "curriers";
    // table fields
    protected $guarded = [];

    public function currier_product_infos() {
        return $this->hasMany('App\Model\CurrierProductInfo', 'currier_id');
    }

     public function branch() {
        return $this->belongsTo(Branch::class, 'sender_branch_id');
    }

    public function payment_receiver() {
        return $this->belongsTo(User::class, 'payment_receiver_id');
    }

    public function receiver_branch() {
        return $this->belongsTo(Branch::class, 'receiver_branch_id');
    }


   
  
}
