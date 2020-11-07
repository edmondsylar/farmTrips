<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\driverReequests;
use App\driverTrips;
use App\User;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        //restrict to only loged in Users.
        $this->middleware('auth');
    }


    public function available(){
        $_ = new driverReequests;
        $available = $_->available();

        return view('drivers_available')
            ->with('available', $available);
    }

    public function hire(Request $request){
        $dr = $request->input('driver');
        $farmer = $request->input('farmer');

        $dr_responser = User::where('email', $dr)->get();
        $driver = $dr_responser[0];
        
        return view('hire')
            ->with('driver', $driver);
    }

    public function request(Request $request){
        $req = new driverReequests;
        $req->price = $request->input('price');
        $req->Destination = $request->input('Destination');
        $req->note = $request->input('note');
        
        return back();
    }

    public function index()
    {
        //
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
        //
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
        //
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
}
