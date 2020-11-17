<div class="row">
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>{{ count($myGroups) }}</p>
          <p>...</p>
        </div>
        <p class="text-black">Created Group(s)</p>
        <div class="wrapper w-50 mt-4">
          <a href="{{ url('/m_groups') }}" class="btn btn-xs btn-primary">
            Review </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>{{ count($userGroups) }}</p>
          <p>...</p>
        </div>
        <p class="text-black">Group(s) Attended</p>
        <div class="wrapper w-50 mt-4">
        <a href="{{ url('/m_groups') }}" class="btn btn-xs btn-primary">
            Review </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-6 equel-grid">
    <div class="grid">
      <div class="grid-body text-gray">
        <div class="d-flex justify-content-between">
          <p>Trips Completed</p>
          <p>...</p>
        </div>
        <p class="text-black"> Account </p>
        <div class="wrapper w-50 mt-4">
          <canvas height="45" id="stat-line_3"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-8 equel-grid">
    <div class="grid">
      <div class="grid-body py-3">
              <a style="margin-bottom: 10px;" href="{{ url('/m_groups') }}" class="btn btn-xs btn-primary float-right">
            <i class="mdi mdi-plus"></i>Create Group</a>
        <p class="card-title ml-n1">Farmer Groups</p>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-sm">
          <thead>
            <tr class="solid-header">
              <th colspan="2" class="pl-4">Group Name</th>
              <th>Created By</th>
              <th>FInal Destination</th>
            </tr>
          </thead>
          <tbody>
            {{-- Start of group listing --}}
            @if (count($groups) > 0)
                @foreach ($groups as $item)
                    <tr>
                        <td class="pr-0 pl-4">
                            <img class="profile-img img-sm" src="images/profile/male/image_4.png" alt="profile image">
                        </td>
                        <td class="pl-md-0">
                            <a href="{{ url('/join_group/'.$item->id) }}">
                                <small class="text-black font-weight-medium d-block">{{ $item->group_name }}</small>
                                <span class="text-gray">
                                <span class="status-indicator rounded-indicator small bg-primary"></span>{{ $item->created_at }}</span>
                            </a>
                        </td>
                        <td>
                            {{ $item->Manager }}
                        </td>
                        <td>
                            {{-- @if (!$item->status)
                                Open Discusion
                            @else
                                {{ $item->status }}
                            @endif --}}
                        </td>
                        </tr>
                @endforeach
            @endif

        </tbody>
        </table>
      </div>
      <a class="border-top px-3 py-2 d-block text-gray" href="{{ url('/groups') }}">
        <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>
            View All
        </small>
      </a>
    </div>
  </div>

</div>
