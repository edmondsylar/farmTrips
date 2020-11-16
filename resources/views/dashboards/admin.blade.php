@php
    use App\User;
    use App\Car;

    $farmers = User::where('role', 'farmer')->get();
    $cars = Car::orderBy('id', 'desc')->get();

@endphp
<div class="row">
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>{{ count($farmers) }}</p>
        </div>
        <p class="text-black">Farmers</p>
        <div class="wrapper w-50 mt-4">
          <canvas height="45" id="stat-line_1"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>{{ count($cars) }}</p>
        </div>
        <p class="text-black">cars</p>
        <div class="wrapper w-50 mt-4">
          <canvas height="45" id="stat-line_2"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>0</p>
        </div>
        <p class="text-black">Trips</p>
        <div class="wrapper w-50 mt-4">
          <canvas height="45" id="stat-line_3"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>0</p>
        </div>
        <p class="text-black">Spares</p>
        <div class="wrapper w-50 mt-4">
          <canvas height="45" id="stat-line_4"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 equel-grid">
    {{-- <div class="grid">
      <div class="grid-body d-flex flex-column h-100">
        <div class="wrapper">
          <div class="d-flex justify-content-between">
            <div class="split-header">
              <img class="img-ss mt-1 mb-1 mr-2" src="../assets/images/social-icons/instagram.svg" alt="instagram">
              <p class="card-title">Followers Growth</p>
            </div>
            <div class="wrapper">
              <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-access-point text-muted mdi-2x"></i></button>
              <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-cloud-download-outline text-muted mdi-2x"></i></button>
            </div>
          </div>
          <div class="d-flex align-items-end pt-2 mb-4">
            <h4>16.2K</h4>
            <p class="ml-2 text-muted">New Followers</p>
          </div>
        </div>
        <div class="mt-auto">
          <canvas class="curved-mode" id="followers-bar-chart" height="220"></canvas>
        </div>
      </div>
    </div> --}}
  </div>
  {{-- <div class="col-lg-4 col-md-6 equel-grid">
    <div class="grid">
      <div class="grid-body">
        <p class="card-title">Campaign</p>
        <div id="radial-chart"></div>
        <h4 class="text-center">$23,350.00</h4>
        <p class="text-center text-muted">Used balance this billing cycle</p>
      </div>
    </div>
  </div> --}}
  <div class="col-lg-8 col-md-8 equel-grid">
    <div class="grid table-responsive">
      <table class="table table-stretched">
        <thead>
          <tr>
            <th>Car</th>
            <th>Plate</th>
            <th>Owner</th>
          </tr>
        </thead>
        <tbody>
          @if (count($cars) > 0)
            @foreach($cars as $car)
              <tr>
                <td>
                  <p class="mb-n1 font-weight-medium">{{ $car->type }}</p>
                  {{-- <small class="text-gray">Apple Inc.</small> --}}
                </td>
                <td class="font-weight-medium">{{ $car->number_plate }}</td>
                <td class="text-danger font-weight-medium">
                  <div class="badge badge-success">{{ $car->owner }}</div>
                </td>
              </tr>
            @endforeach

          @else
            You Currently Have no cars in the system
          @endif



        </tbody>
      </table>
    </div>
  </div>
</div>
