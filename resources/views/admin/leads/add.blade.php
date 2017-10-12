@extends('layouts.main', ['some' => 'data'])

@section('title','Lead Creaton')
@section('ptitle','Lead Creaton')

@section('content')
<form class="form-horizontal" action="{{ url('admin/leads') }}" method="post">
  {{ csrf_field() }}
  <div class="card">
    <div class="card-header">
      Lead Creation
    </div>
    <div class="card-block">
      <div class="row">
        <div class="col-md-6">
          <label for="name">Name**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Full Name</span>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>
          <label for="mobile">Mobile Numbers**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Mobile No</span>
            <input type="text" class="form-control" name="mobile" id="mobile" required>
          </div>
          <label for="email">Email Address</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Email ID</span>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <label for="requirement">Requirement**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Requirement</span>
            <input type="text" class="form-control" id="requirement" name="requirement" required>
          </div>

        </div>

        <div class="col-md-6">
          <label for="address">Address</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Address / Location</span>
            <input type="text" class="form-control" name="address" id="address">
          </div>

          <label for="lead_source">Lead Source</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Lead Source</span>
            <input type="text" class="form-control" id="lead_source" name="lead_source">
          </div>
          <label for="status">Status**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Status</span>
            <select class="form-control" id="status" name="status">
                <option value="new">New</option>
                <option value="process">Processing</option>
                <option value="success">Success</option>
                <option value="pending">Pending</option>
                <option value="rejected">Rejected</option>
            </select>
          </div>
          <label for="confirm">Lead Confirmed</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Confirmed</span>
            <select type="text" class="form-control" id="confirm" name="confirm">
              <option value="no">No</option>
              <option value="yes">Yes</option>
            </select>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="note">Requirement Notes</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">Requirement Notes</span>
              <input type="text" class="form-control" id="require_details" name="require_details">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="note">Notes</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">Notes</span>
              <input type="text" class="form-control" id="note" name="note">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="job_assign">Job Assign**</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">Job Assign</span>
              <select class="form-control" id="job_assign" name="job_assign">
              @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
              @endforeach
              </select>
            </div>
          </div>
            <div class="col-md-6">
              <label for="note">Created By</label>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Full Name</span>
                <input type="hidden" class="form-control" id="cid" name="uid" value="{{ auth()->user()->id }}">
                <input type="text" class="form-control" id="name" name="submited_by" value="{{ auth()->user()->name }}" readonly>
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
