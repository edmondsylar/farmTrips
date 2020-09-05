@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>Cars</h4>
            <p class="text-gray">{{--<span style="text-transform: capitalize">{{ $role }}</span>--}} Create Edit and Manage Cars.</p>
        </div>
    </div>

    {{-- @if ($create ?? '') --}}
<div class="row">
    <div class="col-lg-6 equel-grid">
        <div class="grid">
            <p class="grid-header">
                <span>
                  <b> Create A car.</b> <br>
                </span>
                <small>  
                   Provide car details to be created.
                </small>

            </p>
        <div class="grid-body">
        <div class="item-wrapper">
            
            <form action="{{ url('/cars') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputEmail1">Car Type | Name</label>
                    <input type="text" name="type" class="form-control" id="inputEmail1" placeholder="Ex: Tippa">
                </div>

                <div class="form-group">
                    <label for="inputPassword1">Color</label>
                    <input type="text" name="color" class="form-control" id="inputPassword1" placeholder="Color">
                </div>

                <div class="form-group">
                    <label for="inputPassword1">Number Plate</label>
                    <input type="text" name="plate" class="form-control" id="inputPassword1" placeholder="Number Plate">
                </div>


                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </form>
            
        </div>
        </div>
    </div>
</div>

<div class="col-md-6 equel-grid">
    <div class="grid">
      <div class="grid-body">
        <div class="split-header">
          <p class="card-title">Cars</p>
          <div class="btn-group">
            <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-dots-vertical"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ url('/groups') }}">All Cars</a>
              <a class="dropdown-item" href="{{ url('/#') }}">Edit</a>
            </div>
          </div>
        </div>
        <div class="vertical-timeline-wrapper">
          <div class="timeline-vertical dashboard-timeline">
            @if (count($cars) > 0)
                @foreach ($cars as $item)
                   <div class="activity-log">
                        <p class="log-name">
                        <a href="{{ url('/join_group/'.$item->id) }}">
                         Created: {{ $item->created_at }}  
                        </p>
                        </a>
                        <div class="log-details" style="font-weight: bolder;">
                           {{ $item->color .' '. $item->type }}
                        </div>
                        <small>
                            Plate: {{ $item->number_plate }}
                        </small>
                        
                    </div>
               
                    @endforeach
            </div>
                {{ $cars->links() }}
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
    <div class="grid">
        <p class="grid-header">All cars and Destinations.</p>
        <div class="item-wrapper">
        <div class="table-responsive">
            <table class="table info-table">
            <thead>
                <tr>
                <th>Car</th>
                <th>Number Plate</th>
                <th>Destination</th>
                <th>Date</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-success">
                    <td>Water Bottle</td>
                    <td>874</td>
                    <td>$546</td>
                    <td>43%</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

@endsection