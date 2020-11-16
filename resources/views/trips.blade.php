@extends('layouts.app')
@section('content')
<div class="col-md-12 equel-grid">
    <div class="grid">
      <div class="grid-body">
        <div class="split-header">
          <p class="card-title"><b>{{ $group->group_name }}</b>  </p>
          <div class="btn-group">
            <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-dots-vertical"></i>
            </button>
          </div>
        </div>
        <div class="vertical-timeline-wrapper">
          <div class="timeline-vertical dashboard-timeline">
            <ul>
                <li>Pick UP: <b>{{ $request->pickup }}</b></li>
                <li>Destination:<b> {{ $group->destination }}</b></li>
                <li>Price: <b> {{ $request->price }} </b></li>
            </ul>
            @if ($request->status == 'accepted')

                <form action="{{ url('/start') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="group_name">Select Car</label>
                        <input type="hidden" name="trip" value="{{ $request->id }}">
                        <select required name="car" id="" class="form-control">
                            <option value="" disabled selected>Select car</option>
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}"> {{ $car->type." | ".$car->number_plate }} </option>
                            @endforeach
                        </select>
                    </div>
                    <input class="btn btn-primary btn-xs" type="submit" value="Start Trip">
                </form>
            @else
                @if ($request->status == 'started')
                    <form action="{{ url('/stop') }}" method="POSt">
                        @csrf
                        <input name="trip" type="hidden" value="{{ $request->id }}">
                        <input class="btn btn-danger btn-xs" type="submit" value="End Trip">
                    </form>

                    @else
                        <input class="btn btn-secondary btn-xs" disabled type="submit" value="{{ $request->status }}">
                @endif


            @endif



          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
