@extends('layouts.main', ['some' => 'data'])

@section('title','Edit User')
@section('ptitle','Edit User')

@section('content')

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

<form class="form-horizontal" action="{{ url('admin/users/'.$user->id) }}" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="card">
    <div class="card-header">
      User Update
    </div>
    <div class="card-block">
      <div class="row">
        <div class="col-md-6">
          <label for="name">Full Name**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Full Name</span>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" required>
          </div>
          <label for="email">Email Address**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Email ID</span>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
          </div>
          <label for="mobile">Mobile Numbers**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Mobile No</span>
            <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $user->mobile }}" readonly>
          </div>

          <label for="role">User Role**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Role</span>
            <select class="form-control" id="role" name="role">
                @if ($user->role)
                  <option value="{{ $user->role }}">{{ ucfirst($user->role) }}</option>
                @endif
                <option value="user">User</option>
                <option value="admin">Admin</option>
                <option value="manager">Manager</option>
                <option value="sale">Sale</option>
                <option value="designer">Designer</option>
                <option value="developer">Developer</option>
                <option value="teacher">Teacher</option>
            </select>
          </div>

        </div>

        <div class="col-md-6">
          <label for="address">Address</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Address</span>
            <input type="text" class="form-control" name="address" id="address" value="{{ $user->address }}">
          </div>
          <label for="location">Location</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Location</span>
            <input type="text" class="form-control" name="location" id="location" value="{{ $user->location }}">
          </div>
          <label for="pincode">Pincode</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Pincode</span>
            <input type="text" class="form-control" name="pincode" id="pincode" value="{{ $user->pincode }}">
          </div>

          <label for="status">Status**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Status</span>
            <select class="form-control" id="status" name="status">
              @if ($user->status)
                <option value="{{ $user->status }}">{{ ucfirst($user->status) }}</option>
              @endif
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
          </div>

        </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <label for="about">About you</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">BIO</span>
              <input type="text" class="form-control" id="about" name="about" value="{{ $user->about }}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="job_assign">Job Assign**</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">Job Assign</span>
              <select class="form-control" id="job_assign" name="job_assign">
                <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
              </select>
            </div>
          </div>
            <div class="col-md-6">
              <label for="ip">Current IP</label>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">IP Addr</span>
                <input type="text" class="form-control" id="ip" name='ip' value="{{ ip() }}" readonly>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="sybmit" class="btn btn-primary btn-lg btn-block">Save</button>
          </div>
        </div>
        {{-- End Form --}}
    </div>
  </div>

</form>
@endsection
