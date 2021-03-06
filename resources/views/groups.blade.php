@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>Groups &nbsp; <a href="{{ url('/m_groups') }}" class="btn btn-primary btn-xs">Create new</a> </h4>
            <p class="text-gray">{{--<span style="text-transform: capitalize">{{ $role }}</span>--}} All Groups</p>
        </div>
    </div>

<div class="row">

    @if (count($groups) > 0)
        @foreach ($groups as $item)
            <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                    <div class="grid-body text-gray">
                        <div class="d-flex justify-content-between">
                            <p> Destination </p>
                            @switch($item->status)
                                @case('Open')
                                    <span class="badge badge-success">{{ $item->status }}</span>
                                    @break
                                @case('closed')
                                    <span class="badge badge-secondary">{{ $item->status }}</span>
                                    @break

                                  @case('started')
                                        <span class="badge badge-primary">{{ $item->status }}</span>
                                    @break
                                @default

                            @endswitch

                        </div>
                        <p class="text-black">{{ $item->group_name }}</p>
                        <div class="wrapper w-50 mt-4">
                            <form action="{{ url('/join_group') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}">
                            </form>
                            <a href="{{ url('/join_group/'.$item->id) }}" class="btn btn-xs btn-primary">
                                More </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

@endsection
