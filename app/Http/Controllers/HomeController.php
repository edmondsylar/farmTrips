<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Group;
use App\userGroups;
use App\Car;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!Auth::user()->role) {
            return redirect('/roles');
        }
        $role = Auth::user()->role;
        $_ = new userGroups;
        $userGroups = $_->userGroups();

        $gps = new Group;
        $myGroups = $gps->getPersonal();
        $groups = $gps->groups();

        // return $userGroups;
        return view('home')
            ->with('groups', $groups)
            ->with('myGroups', $myGroups)
            ->with('role', $role)
            ->with('userGroups', $userGroups);
    }

    public function roles(){
        if(Auth::user()->role){
            return redirect('/');
        }
        $roles = [
            'driver',
            'farmer',
        ];

        $check = DB::table('users')->where('role', 'admin')->get();
        if(count($check) == 0){
            return view('roles')
            ->with('roles', ['admin'])
            ->with('admin', ['true']);
        }

        return view('roles')
            ->with('roles', $roles);
    }


    public function complete_reg(Request $request){

        $user = Auth::user()->email;
        if ($request->input('role') == 'driver'){

            User::where('email', $user)->update([
                'role'=> $request->input('role'),
                'trips'=> 0,
                'status'=>'available',
            ]);

            return redirect('/');
        }

        User::where('email', $user)->update(['role'=> $request->input('role')]);
        // Auth::user()->role = $request->input('role');

        return redirect('/');

    }

    public function m_groups(){


        //user to help us get all groups that this farmer belongs to.
        $user = Auth::user()->email;
        //we are going to store the groups and there details in this array
        $groups = array();
        $_ug = userGroups::orderBy('id', 'desc')->where('user', $user)->get();
        foreach ($_ug as $key => $value) {
            $_gp = Group::where('id', $value['group'])->get();
            array_push($groups, $_gp);

        }
        /**
         * Lets also get cars you have created
         */
        $cars = Car::orderBy('id', 'desc')->where('owner', $user)->get();

        //Groups you have created
        $_ = new Group;
        $_groups = $_->getPersonal();
        return view('m_groups')
            ->with('cars', $cars)
            ->with('_groups', $_groups);
    }

    public function join(Request $request){

        $create = new userGroups;
        $create->user = Auth::user()->email;
        $create->group = $request->input('group');
        $create->save();

        return back();
    }
}
