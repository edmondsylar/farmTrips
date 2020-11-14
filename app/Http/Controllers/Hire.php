<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Group;
use App\driverReequests;

class Hire extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $d = new driverReequests;
        $d->driver = $request->input('driver');
        $d->farmer = Auth::user()->email;
        $d->note = $request->input('note');
        $d->group = $request->input('group');
        $d->destination = $request->input('destination');
        $d->price = $request->input('price');
        if ($d->save()){
            
            return redirect('/divers/available')
                ->with('success', 'Request Sent');
        }

        return back()
                ->with('error', 'Something went wrong');
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
        $driver = User::find($id);
        $groups = Group::orderBy('created_at', 'desc')
            ->where('admin', Auth::user()->email)
            ->paginate(5);

        // return $groups;
        return view('hire')
            ->with('driver', $driver)
            ->with('groups', $groups);
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
