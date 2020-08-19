@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>Dashboard</h4>
            <p class="text-gray">{{--<span style="text-transform: capitalize">{{ $role }}</span>--}} Personal Groups Management</p>
        </div>
    </div>

    {{-- @if ($create ?? '') --}}
    <div class="row">
        <div class="col-lg-6 equel-grid">
        <div class="grid">
            <p class="grid-header">Create Group</p>
            <div class="grid-body">
            <div class="item-wrapper">
                
                <form action="{{ url('/groups') }}" method="POST">
                    @csrf
                <div class="form-group">
                    <input type="text" placeholder="Group Name" name="group_name" class="form-control">
                </div>
                    <button type="submit" class="btn btn-sm btn-primary">Create</button>
                </form>
                
            </div>
            </div>
        </div>
        </div>
    </div>
    {{-- @endif --}}
    
@endsection