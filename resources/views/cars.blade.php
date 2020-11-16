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


<div class="col-lg-12">
    <div class="grid">
        <p class="grid-header">All cars and Destinations.</p>
        <div class="item-wrapper">
        <div class="table-responsive">
            <table class="table info-table">
            <thead>
                <tr>
                <th>Car</th>
                <th>Type</th>
                <th>Number Plate</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr class="bg-success">
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->type }}</td>
                        <td>{{ $car->number_plate }}</td>
                    </tr>
                @endforeach

            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

@endsection
