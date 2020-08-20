@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>{{ $group[0]->group_name }}</h4>
            <p class="text-gray">{{--<span style="text-transform: capitalize">{{ $role }}</span>--}} Join This Group</p>
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
            <h3>{{ $group[0]->group_name }}</h3>
            <p class="ml-1 font-weight-bold"></p>
            </div>
            <form style="width: ; position: ;" action="{{ url('/join') }}" method="post">
            <div class="d-flex mt-2">
            <div class="wrapper d-flex pr-4">
                <small class="text-primary font-weight-medium mr-2">Paying</small>
                <small class="text-gray">Tomorrow</small>
            </div>
            <div class="wrapper d-flex pr-4">
                <small class="text-primary font-weight-medium mr-2">Leaving</small>
                <small class="text-gray">Tomorrow</small>
            </div>
            <div class="wrapper d-flex">
                <small class="text-primary font-weight-medium mr-2">Memebers:</small>
                <small class="text-gray">10</small>
            </div>
            
            </div>
            <div class="d-flex flex-row mt-4 mb-4">
                @csrf
                <a href="{{ url('/groups') }}" class="btn btn-danger text-white component-flat w-50 mr-2" type="button">Cancle</a>

                <button type="submit" class="btn btn-primary w-50 ml-2" type="button">Join</button>
                <input type="hidden" name="group" value="{{ $group[0]->id }}">
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
@if($group[0]->admin == Auth::user()->email)
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
            <h3>Complete Trip</h3>
            <p class="ml-1 font-weight-bold"></p>
            </div>
            
            <div class="d-flex flex-row mt-4 mb-4">
                {{-- we place a form here --}}
                <form action="" method="post" class="form-group">
                    <div class="row">
                        <!-- <input type="text" class="form-control col-sm-6" placeholder=""> -->
                        <select class="form-control col-sm-6" name="plate" id="none">
                            <option value="" disabled selected>Select car</option>
                            <option value="UAT 969V">UAT 969V</option>
                        </select>
                        <input type="text" class="form-control col-sm-6" placeholder="Price">
                    </div>
                </form>
                
            </div>
            <div class="d-flex mt-5 mb-3">
                <small class="mb-0 text-primary">Farm Trips</small>
            </div>

        
            <div class="d-flex justify-content-between pt-2">
                <button class="btn btn-danger text-white component-flat w-50 mr-2" type="button">Cancle</button>
                <button class="btn btn-primary w-50 ml-2" type="button">Join</button>
            </div>


        </div>
        </div>
    </div>
</div>

@endif



@endsection