<?php

namespace App;
use App\Car;

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

    public function myCars($user){
        
        //get all cars the person owns 
        $cars = Cars::where('owner', $user)
            ->paginate(10);
        
            return $cars;
    }

}
