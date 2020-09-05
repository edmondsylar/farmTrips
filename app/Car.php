<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function getCar($id){

        return 'Cars';
    }

    public function getCars(){

        return 'Cars';
    }

    public function getUserCar($user){

        return 'Cars';
    }
}
