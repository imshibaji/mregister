@section('breadcrumb')
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
      @php
        $url = explode('/', url()->current());
      @endphp
      <li class="breadcrumb-item">Home</li>
      @for ($i=3;$i<count($url); $i++)
        <li class="breadcrumb-item">{{ ucfirst($url[$i]) }}</li>
      @endfor
      <!-- Breadcrumb Menu-->
      <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
              <a class="btn btn-secondary" href="{{ url('admin/dashboard') }}"><i class="icon-graph"></i> &nbsp;Dashboard</a>
              <a class="btn btn-secondary" href="{{ url('admin/dashboard/chat') }}"><i class="fa fa-comments-o"></i> &nbsp;Chat<span class="badge badge-pill badge-success">5</span></a>
              <a class="btn btn-secondary" href="{{ url('admin/dashboard/comments') }}"><i class="fa fa-commenting-o"></i> &nbsp;Comments<span class="badge badge-pill badge-info">2</span></a>
              <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
      </li>
  </ol>
@endsection
