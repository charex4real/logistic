<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CurriersProductInfo extends Model {

    protected $table = "currier_productinfos";
    // table fields
    protected $guarded = [];

    public function currier() {
        return $this->belongsTo(Currier::class);
    }

    public function courier_type() {
        return $this->belongsTo(CourierType::class, 'currier_type');
    }

}
