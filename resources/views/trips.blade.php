@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>Group</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
            <div class="grid">
                <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                        <p> Destination {{ $request->Destination }} </p>
                        <span class="badge badge-success"></span>
                    </div>
                <p class="text-black">Group Name : {{ $request->group }} </p>
                    <div class="wrapper w-50 mt-4">
                        

                        <button class="btn btn-xs btn-inverse-primary">
                            Start
                        </button>

                        <button class="btn btn-xs btn-inverse-stop">
                            Stop
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection