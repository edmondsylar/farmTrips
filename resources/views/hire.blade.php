@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12 py-5">
        <h4>Hire Driver {{ $driver->status }} </h4>
        <p class="text-gray"><b>Driver Name:</b> {{ $driver->name }}</p>
        <p class="text-gray"><b>Email:</b> {{ $driver->email }}</p>
    </div>
</div>


@if ($error ?? '')
    <div class="alert alert-danger" role="alert">
        This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </div>
@else
    @if ($success ?? '')
        <div class="alert alert-success" role="alert">
            This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
    @endif
@endif

<div class="row">
    <div class="col-lg-6 equel-grid">
        <div class="grid">
            <p class="grid-header">
                <span>
                  <b> Add Details</b>
                </span>
            </p>
        <div class="grid-body">
        <div class="item-wrapper">

            <form action="{{ url('/hire') }}" method="POST">
                @csrf
            <div class="form-group">
                <label for="group_name">suggested Group </label>
                <select name="group" id="" class="form-control" name="group">
                    <option value="" selected disabled>Select Group</option>
                    @if (count($groups)!=0)
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                        @endforeach
                    @endif

                </select>

                <label for="group_name">suggested Price </label>
                <input required type="text" placeholder="Suggest Price" name="price" class="form-control">
                <input type="hidden" name="driver" value="{{ $driver->id }}">

                <label for="group_name">Destination</label>
                <input required type="text" placeholder="Destination" name="Destination" class="form-control">

                <label for="group_name"> Message </label>
                <textarea required name="note" id="note" cols="30" rows="10" class="form-control" placeholder="Deliver Instructions"></textarea>
            </div>
                <button type="submit" class="btn btn-sm btn-success">submit</button>
            </form>

        </div>
        </div>
    </div>
</div>
@endsection
