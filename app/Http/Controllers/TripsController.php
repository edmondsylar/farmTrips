<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\userGroups;
use App\Trips;
use App\driverReequests;
use App\Group;
use App\Car;
use App\User;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $g = userGroups::where('user', Auth::user()->email)->get();
        $trips = array();

        // foreach()

        return $g;
        return view('trips');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Lets create a trip here.
         */

        $trip = new Trips;
        $trip->group_id = $request->input('group');
        $trip->destination = $request->input('destination');
        $trip->car = $request->input('car');
        $trip->note = $request->innput('note');

        if ($trip->save()){
            return view('trips');
        }

        // return view('trips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        // get the reques
        $req = driverReequests::find($id);
        $group = Group::find($req->group);
        $cars = Car::orderBy('created_at', 'desc')
            ->where('owner', Auth::user()->email)
            ->get();

        return view('trips')
            ->with('group', $group)
            ->with('cars', $cars)
            ->with('request', $req);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         * Lets create a trip here
         */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function start_trip(Request $request){
        driverReequests::where("id", $request->input('trip'))
            ->update(['status'=>'started']);

        return back();
    }


    public function stop_trip(Request $request){

        driverReequests::where("id", $request->input('trip'))
            ->update(['status'=>'ended']);

        User::where(['email'=>Auth::user()->email])
            ->update(['status'=>'available']);

        return back();
    }


    public function join($id){


        return $id;
    }


}
