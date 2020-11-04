@php
    use App\userGroups;
    // ini_set('memory_limit', '-1');
    $users = userGroups::where('group', $group->id)->get();
    // return print_r($users);
@endphp

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>{{ $group->group_name }}</h4>
            <p class="text-gray">Destination: {{ $group[0] }}</p>
        </div>
    </div>
<div class="row">
    <div class="col-lg-6 equel-grid">
        <div class="grid">
        <div class="grid-body">
            <div class="split-header">
            <p class="card-title">Group Details</p>
            <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="Available balance since the last week">
                <i class="mdi mdi-information-outline text-muted mdi-2x"></i>
            </span>
            </div>
            <div class="d-flex align-items-end mt-2">
            <h3>{{ $group->group_name }}</h3>
            <p class="ml-1 font-weight-bold"></p>
            </div>
            <form style="width: ; position: ;" action="{{ url('/join') }}" method="post">
            <div class="d-flex mt-2">
            <div class="wrapper d-flex pr-4">
                <small class="text-primary font-weight-medium mr-2">Destination</small>
            <small class="text-gray">{{ $group->destination }}</small>
            </div>
            <div class="wrapper d-flex pr-4">
                <small class="text-primary font-weight-medium mr-2">car</small>
                <small class="text-gray">{{ $group->car }}</small>
            </div>
            <div class="wrapper d-flex">
                <small class="text-primary font-weight-medium mr-2">Memebers:</small>
                <small class="text-gray">{{ count($users) }}</small>
            </div>
            
            </div>
            
                @csrf
                <a href="{{ url('/groups') }}" class="btn btn-danger text-white component-flat w-50 mr-2" type="button">Delete</a>

                <button type="submit" class="btn btn-primary w-50 ml-2" type="button">Join</button>
                <input type="hidden" name="group" value="{{ $group->id }}">
            </form>
            </div>
            <div class="d-flex mt-5 mb-3">
            <small class="mb-0 text-primary">Stops</small>
            </div>

        
            <div class="d-flex justify-content-between pt-2">
            <p class="text-black">Sent Bitcoin</p>
            <p class="text-gray">-0.00003573 BTC</p>
            </div>


        </div>
        </div>
    </div>
@if($group->admin == Auth::user()->email)
<div class="col-lg-6 equel-grid">
    <div class="grid">
        <div class="grid-body">
            <div class="split-header">
            <p class="card-title">Admin Actions</p>
            <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="Available balance since the last week">
                <i class="mdi mdi-information-outline text-muted mdi-2x"></i>
            </span>
            </div>
            <div class="d-flex align-items-end mt-2">
            <h3>Start Trip</h3>
            <p class="ml-1 font-weight-bold"></p>
            </div>
            
            <div class="d-flex flex-row mt-4 mb-4">
                {{-- we place a form here --}}
                <form action="/trips" method="post" class="form-group">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="group" id="group" value="{{ $group->id }}">
                        <input type="hidden" name="destination" id="destination" value="{{ $group->destination }}">
                        <input type="hidden" name="car" id="car" value="{{ $group->car }}">
                        <label for="note">Enter Note</label> 
                        <textarea name="" id="" cols="30" placeholder="Optional Trip Notes" rows="10" class="form-control"></textarea>
                    </div>
               
                
            </div>
            <div class="d-flex justify-content-between pt-2">
                <button class="btn btn-success w-50 ml-2" type="button">Start Strip</button>
            </div>
        </form>

        </div>
        </div>
    </div>
</div>

@endif



@endsection