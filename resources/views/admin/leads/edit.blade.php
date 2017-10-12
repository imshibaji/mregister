@extends('layouts.main', ['some' => 'data'])

@section('title','Lead Update')
@section('ptitle','Lead Update')

@section('content')
<form class="form-horizontal" action="{{ url('admin/leads/'.$lead->id) }}" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="card">
    <div class="card-header">
      Lead Update
    </div>
    <div class="card-block">
      <div class="row">
        <div class="col-md-6">
          <label for="name">Name**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Full Name</span>
            <input type="text" class="form-control" name="name" id="name" value="{{ $lead->name }}" required>
          </div>
          <label for="mobile">Mobile Numbers**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Mobile No</span>
            <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $lead->mobile }}" required>
          </div>
          <label for="email">Email Address</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Email ID</span>
            <input type="text" class="form-control" id="email" name="email" value="{{ $lead->email }}">
          </div>

          <label for="requirement">Requirement**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Requirement</span>
            <input type="text" class="form-control" id="requirement" name="requirement" value="{{ $lead->requirement }}" required>
          </div>
        </div>

        <div class="col-md-6">
          <label for="address">Address</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Address / Location</span>
            <input type="text" class="form-control" name="address" id="address" value="{{ $lead->address }}">
          </div>
          <label for="lead_source">Lead Source</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Lead Source</span>
            <input type="text" class="form-control" id="lead_source" name="lead_source" value="{{ $lead->lead_source }}">
          </div>

          <label for="status">Status**</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Status</span>
            <select class="form-control" id="status" name="status">
                <option value="{{ $lead->status }}">{{ ucfirst($lead->status) }}</option>
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
              <option value="{{ $lead->confirm }}">{{ ucfirst($lead->confirm) }}</option>
              <option value="false">No</option>
              <option value="true">Yes</option>
            </select>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="note">Requirement Notes</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">Requirement Notes</span>
              <input type="text" class="form-control" id="require_details" name="require_details" value="{{ $lead->require_details }}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="note">Notes</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">Notes</span>
              <input type="text" class="form-control" id="note" name="note" value="{{ $lead->note }}">
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
                  @if($user->id == $lead->job_assign)
                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                  @else
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
            <div class="col-md-6">
              <label for="note">Created By</label>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Full Name</span>
                @foreach ($users as $user)
                  @if($user->id == $lead->user_id)
                    <input type="hidden" class="form-control" id="cid" name="uid" value="{{ $user->id }}">
                    <input type="text" class="form-control" id="submited_by" name="submited_by" value="{{ $user->name }}" readonly>
                  @endif
                @endforeach
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
