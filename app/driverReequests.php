<?php

namespace App;
use App\driverReequests;
use App\User;

use Illuminate\Database\Eloquent\Model;

class driverReequests extends Model
{
    //
    public function for_driver($driver){
        $trips = [];

        return $trips;
    }

    public function for_farmer($farmer){
        $trips = [];

        return $trips;
    }

    public function available(){
        $available = user::where([
            'role'=> 'driver',
            'status'=>'available'
            // 'status'=>'available'
        ])
        ->paginate(10);

        return $available;
    }


}
