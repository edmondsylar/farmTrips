@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>Groups</h4>
            <p class="text-gray">{{--<span style="text-transform: capitalize">{{ $role }}</span>--}} Personal Groups Management</p>
        </div>
    </div>

    {{-- @if ($create ?? '') --}}
<div class="row">
    <div class="col-lg-6 equel-grid">
        <div class="grid">
            <p class="grid-header">
                <span>
                  <b> Create Group</b>
                </span>
                <small>  
                    Please Note that the Group Name should be the Final Destination of the 
                    Trip
                </small>

            </p>
        <div class="grid-body">
        <div class="item-wrapper">
            
            <form action="{{ url('/groups') }}" method="POST">
                @csrf
            <div class="form-group">
                <label for="group_name"> Group Name </label>
                <input type="text" placeholder="Group Name" name="group_name" class="form-control">
                
                <label for="group_name"> Destination </label>
                <input type="text" placeholder="Destination" name="destination" class="form-control">

            </div>
                <button type="submit" class="btn btn-sm btn-primary">Create</button>
            </form>
            
        </div>
        </div>
    </div>
</div>

<div class="col-md-6 equel-grid">
    <div class="grid">
      <div class="grid-body">
        <div class="split-header">
          <p class="card-title">Created Groups</p>
          <div class="btn-group">
            <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-dots-vertical"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ url('/groups') }}">More Groups</a>
              <a class="dropdown-item" href="{{ url('/m_groups') }}">Edit</a>
            </div>
          </div>
        </div>
        <div class="vertical-timeline-wrapper">
          <div class="timeline-vertical dashboard-timeline">
            @if (count($_groups) > 0)
                @foreach ($_groups as $item)
                   <div class="activity-log">
                        <p class="log-name">
                        <a href="{{ url('/join_group/'.$item->id) }}">
                          {{ $item->group_name }}</p>
                        </a>
                        <div class="log-details">Created: {{ $item->created_at }}</div>
                        <small class="log-time">

                        </small>
                        
                    </div>
                @endforeach
                {{ $_groups->links() }}

                @else 
                    You haven't created any groups yet.
            @endif
            
          
        </div>
        </div>
      </div>
      <a class="border-top px-3 py-2 d-block text-gray" href="#">
        <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i> View All </small>
      </a>
    </div>
  </div>
    </div>
<div class="col-lg-12">
  @php
      use App\Group;
      $g = new Group;
      $groups = $g->groups();
  @endphp
    <div class="grid">
        <p class="grid-header">Groups and Destinations.</p>
        <div class="item-wrapper">
        <div class="table-responsive">
            <table class="table info-table">
            <thead>
                <tr>
                <th>Group</th>
                <th>Car</th>
                <th>Destination</th>
                <th>Date</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
              @if (count($groups) > 0)
                @foreach ($groups as $group)
                    <tr class="bg-success">
                      <td>{{ $group->group_name }}</td>
                      <td>{{ $group->car }}</td>
                      <td>{{ $group->destination }}</td>
                      <td>{{ $group->created_at }}</td>
                  </tr>
                @endforeach
                
                @else
                  You Have no groups
              @endif
                
            </tbody>
            </table>
        </div>
        </div>
    </div>
  </div>
    
@endsection