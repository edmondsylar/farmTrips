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
                        <p> Destination {{ $group->group_name }} </p>
                        <span class="badge badge-success"></span>
                    </div>
                        <p class="text-black">Pick up : {{ $group->group_name }} </p>
                        <p class="text-black">Destination : {{ $group->destination }} </p>
                    <div class="wrapper w-50 mt-4">
                        
                        <p>
                            {{ $request->Description }}
                        </p>
                        <a href="{{ url('/proc/'.$request->id) }}" class="btn btn-xs btn-inverse-success"> Start</a>
                        {{-- <a href="{{ url('/trip_stop/'.$request->id) }}" class="btn btn-xs btn-inverse-success"> Stop</a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection