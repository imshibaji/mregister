@section('main-menu')
<li class="nav-item px-3">
    <a class="nav-link" href="{{ url('admin') }}">Dashboard</a>
</li>
@isset($top_menus)
  @foreach ($top_menus as $name => $link)
    <li class="nav-item px-3">
        <a class="nav-link" href="{{$link}}">{{$name}}</a>
    </li>
  @endforeach
@endisset


@endsection

@section('util-menu')
  <li class="nav-item d-md-down-none">
      <a class="nav-link new-update" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
  </li>
  <li class="nav-item d-md-down-none">
      <a class="nav-link map-point" href="#" data-toggle="popover" data-placement="bottom" ><i class="icon-location-pin"></i></a>
  </li>
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="{{ gravimg() }}" class="img-avatar" alt="{{ Auth::user()->email }}">
        <span class="d-md-down-none">{{ Auth::user()->name }}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        @isset($update_menus)
          <div class="dropdown-header text-center">
              <strong>Updates</strong>
          </div>

          {{-- Update Menus From main.blade.php --}}
          @foreach ($update_menus as $val)
            <li class="dropdown-item">
              <a href="{{$val['link']}}"><i class="
                @isset($val['icon'])
                  {{$val['icon']}}
                @else
                  fa fa-bell-o
                @endisset
              "></i>
              {{$val['name']}}

                @isset($val['badge'])
                  <span class="badge badge-success">{{$val['badge']}}</span>
                @endisset
              </a>
            </li>
          @endforeach

          {{-- <li class="dropdown-item">
            <a href="{{ url('admin/dashboard/comments') }}"><i class="fa fa-envelope-o"></i> Comment<span class="badge badge-info">42</span></a>
          </li> --}}
        @endisset

          <div class="dropdown-header text-center">
              <strong>Settings</strong>
          </div>

          <li class="dropdown-item">
            <a href="#"><i class="fa fa-user"></i> Profile</a>
          </li>
          <li class="dropdown-item">
            <a href="#"><i class="fa fa-wrench"></i> Settings</a>
          </li>

          <div class="divider"></div>

          <li class="dropdown-item">
            <a href="#"><i class="fa fa-shield"></i> Lock Account</a>
          </li>
          <li class="dropdown-item">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
              <i class="fa fa-lock"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
      </ul>
  </li>
@endsection
