@extends('layouts.app')
@section('content')
    @if (count($available) <= 0)
    
    @else 
        
        <div class="col-md-8 equel-grid">
            <div class="grid">
              <div class="grid-body py-3">
                <p class="card-title ml-n1">Available Drives</p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-sm">
                  <thead>
                    <tr class="solid-header">
                      <th colspan="2" class="pl-4">Driver</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($available as $driver)
                    <tr>
                      <td class="pr-0 pl-4">
                        <img class="profile-img img-sm" src="https://toppng.com/uploads/preview/free-icons-car-icon-11553467149qf6tfem9q8.png" alt="profile image">
                      </td>
                      <td class="pl-md-0">
                        <small class="text-black font-weight-medium d-block">
                            <a href="{{ url('/divers/available?driver=this') }}" class="border-top px-3 py-2 d-block text-gray" href="#">
                               {{ $driver->name }}
                            </a>
                        </small>
                        <span class="text-gray">
                          <span class="status-indicator rounded-indicator small bg-primary"></span>{{ $driver->email }}</span>
                      </td>
                      <td>
                        <small>
                            @if ($driver->available =='')
                                <div class="badge badge-danger">unavailable</div>
                            @else
                                <div class="badge badge-success">{{ $driver->available }}</div>
                            @endif
                        </small>
                      </td>
                      <td>
                        @if ($driver->available == '')
                          <form action="{{ url('/divers/hire') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ Auth::user()->email }}" name="farmer">
                            <input type="hidden" value="{{ $driver->email }}" name="driver">
                            <button type="submit" class="btn btn-success btn-xs">Hire</button>
                          </form>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
    @endif

@endsection