@php
    use App\driverReequests;
    $requests = driverReequests::where('driver', Auth::user()->email)->get();
    try {
      $reqs = $request[0];
    } catch (\Throwable $th) {
      $reqs = [];
    }
    // return print_r($requests);
@endphp

<div class="row">
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>30%</p>
          <p>+06.2%</p>
        </div>
        <p class="text-black">Traffic</p>
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
          <p>43%</p>
          <p>+15.7%</p>
        </div>
        <p class="text-black">Conversion</p>
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
          <p>23%</p>
          <p>+02.7%</p>
        </div>
        <p class="text-black">Bounce Rate</p>
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
          <p>75%</p>
          <p>- 53.34%</p>
        </div>
        <p class="text-black">Marketing</p>
        <div class="wrapper w-50 mt-4">
          <canvas height="45" id="stat-line_4"></canvas>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-4 col-md-6 equel-grid">
    <div class="grid table-responsive">
      <table class="table table-stretched">
        <thead>
          <tr>
            <th>Destination</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reqs as $request)
          <tr>
            <td>
              <p class="mb-n1 font-weight-medium">{{ $request->Destination }}</p>
            </td>
            <td class="font-weight-medium"> {{ $request->price }} </td>
            <td class="text-success font-weight-medium">
              <a href="" class="btn btn-success btn-xs">view</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>