<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class Group extends Model
{
    //

    public function getPersonal(){
        $user  = Auth::user()->email;
        $all = DB::table('groups')->where('admin', $user)->get();
        return $all;
    }

    public function groups(){
        $groups = DB::table('groups')->orderBy('created_at', 'desc')->get();
        return $groups;
    }
}
