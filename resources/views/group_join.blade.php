@php
    use App\userGroups;
    use App\driverReequests;
    // ini_set('memory_limit', '-1');
    $users = userGroups::where('group', $group->id)->get(['user', 'id']);
    $trip = driverReequests::where(['group'=> $group->id, 'status'=>'accepted'])->get();

    $joined = userGroups::where(['group'=> $group->id, 'user'=>Auth::user()->name])->count();
@endphp

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>{{ $group->group_name }}</h4>
            <p class="text-gray">Destination: {{ $group->destination }}

                @if ($joined == 0)
                    <a href="{{ url('/joining/'.$group->id) }}" class="btn btn-primary btn-xs">Join Group</a>
                @endif
            </p>
        </div>
    </div>
<div class="row">
    <div class="col-lg-4 col-md-6 equel-grid">
        <div class="grid">
          <div class="grid-body d-flex flex-column h-100">
            <div class="wrapper">
              <div class="d-flex justify-content-between">
                <div class="split-header">
                </div>
                <div class="wrapper">
                  <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-access-point text-muted mdi-2x"></i></button>
                  <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-cloud-download-outline text-muted mdi-2x"></i></button>
                </div>
              </div>
              <div class="d-flex align-items-end pt-2 mb-4">
                <h4>{{ count($users) }}</h4>
                <p class="ml-2 text-muted">Members</p>
              </div>
            </div>
            <div class="grid">
                <div class="grid-body">
                  <div class="split-header">
                    <p class="card-title">Group Members</p>
                  </div>
                  <div class="vertical-timeline-wrapper">
                    <div class="timeline-vertical dashboard-timeline">

                        @foreach ($users as $user)
                        <div class="activity-log">
                            <p class="log-name">{{ $user->user }}</p>
                            {{-- <div class="log-details">Joined:  {{ $user->created_at }}</div> --}}
                          </div>
                        @endforeach

                    </div>
                  </div>
                </div>
                <a class="border-top px-3 py-2 d-block text-gray" href="#">
                  <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i> View All </small>
                </a>
              </div>
          </div>
        </div>
      </div>

    <div class="col-lg-6 equel-grid">
        <div class="grid">
            <div class="grid-body">
                <div class="split-header">
                <h3>Strip Status</h3>
                <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="Available balance since the last week">
                    <i class="mdi mdi-information-outline text-muted mdi-2x"></i>
                </span>
                </div>
                <div>
                    <br>
                    Status: <b> &nbsp; {{ $group->status }}</b> <br>
                    Destination: <b> &nbsp; {{ $group->destination }}</b> <br>
                    {{-- PickUp: <b> &nbsp; {{ $group->pickup }}</b> <br> --}}
                    {{-- Price Proposed: <b> &nbsp; {{ $trip->price }}</b> <br> --}}
                </div>
            </div>
        </div>
    </div>




@endsection
