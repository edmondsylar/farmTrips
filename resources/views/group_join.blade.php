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
            <p class="text-gray">Destination: {{ $group->destination }}</p>
        </div>
    </div>
<div class="row">
    <div class="col-lg-4 col-md-6 equel-grid">
        <div class="grid">
          <div class="grid-body d-flex flex-column h-100">
            <div class="wrapper">
              <div class="d-flex justify-content-between">
                <div class="split-header">
                <p class="card-title">{{ $group->group_name }}</p>
                </div>
                <div class="wrapper">
                  <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-access-point text-muted mdi-2x"></i></button>
                  <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-cloud-download-outline text-muted mdi-2x"></i></button>
                </div>
              </div>
              <div class="d-flex align-items-end pt-2 mb-4">
                <h4>25</h4>
                <p class="ml-2 text-muted">Members</p>
              </div>
            </div>
            <div class="grid">
                <div class="grid-body">
                  <div class="split-header">
                    <p class="card-title">Group Members</p>
                    <div class="btn-group">
                      <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Expand View</a>
                        <a class="dropdown-item" href="#">Edit</a>
                      </div>
                    </div>
                  </div>
                  <div class="vertical-timeline-wrapper">
                    <div class="timeline-vertical dashboard-timeline">
                      
                      
                      <div class="activity-log">
                        <p class="log-name">Ina Mendoza</p>
                        <div class="log-details">Added new images</div>
                        <small class="log-time">8 Hours Ago</small>
                      </div>
                      
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
            <h3>Trip Status</h3>
            <p class="ml-1 font-weight-bold"></p>
            </div>
            
            <div class="d-flex flex-row mt-4 mb-4">
                Trip starts
                
            </div>
        </form>

        </div>
        </div>
    </div>
</div>

@endif



@endsection