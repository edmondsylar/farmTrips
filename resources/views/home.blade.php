@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>Dashboard</h4>
            {{-- <p class="text-gray"><span style="text-transform: capitalize">{{ $role }}</span> Review.</p> --}}
        </div>
    </div>
        @switch($role)
            @case('farmer')
                    @include('dashboards.farmer') 
                @break
            @case('driver')
                    @include('dashboards.driver')
                @break
            
            @case('user')
                    @include('dashboards.user')
                @break
            @default
                    @include('dashboards.admin')
                @break
                
        @endswitch

@endsection
