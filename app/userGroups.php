<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userGroups extends Model
{
    //
    protected $fillable =['user', 'group'];

    public function userGroups(){
        /**
         * This function is going to get all user groups a person belongs to.
         *
         */
        $user = Auth::user()->email;
        //this is going to store our user groups
        $user_groups = array();
        //lets select all the user groups attached to this person here.
        $groups = DB::table('user_groups')
            ->where('user', $user)
            ->get();

        //now we are going to get the different groups and populate then into
        //user Groups table.
        foreach ($groups as $key => $value) {
            $group = DB::table('groups')->where('id', $value->id)->get();
            array_push($user_groups, $group);
        }


        return $user_groups;

    }
}
