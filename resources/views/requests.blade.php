@extends('layouts.app')
@section('content')
<div class="col-md-12 equel-grid">
    <div class="grid">
      <div class="grid-body">
        <div class="split-header">
          <p class="card-title">Requests</p>
          <div class="btn-group">
            <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-dots-vertical"></i>
            </button>
          </div>
        </div>
        <div class="vertical-timeline-wrapper">
          <div class="timeline-vertical dashboard-timeline">

            @foreach ($requests as $request)
                <div class="activity-log">
                    <p class="log-name">{{ $request->Destination }} | price {{ $request->price }} shs</p><br>{{ $driver->pickup }}
                    <div class="log-details"> {{ $request->note }}
                        <br><br>
                        Group: {{ $request->group }}
                        <div class="wrapper mt-2">
                            <a href="{{ url('/accept/'.$request->id) }}">
                                <button type="button" class="btn btn-xs btn-success">Approve</button>
                            </a>
                            <button type="button" class="btn btn-xs btn-inverse-danger">Reject</button>
                        </div>
                    </div>
                    <small class="log-time">{{ $request->created_at }}</small>
                </div>

            @endforeach


          </div>
        </div>
      </div>
      <a class="border-top px-3 py-2 d-block text-gray" href="#">
        <small class="font-weight-medium">{{ $requests->links() }} </small>
      </a>
    </div>
  </div>

@endsection
