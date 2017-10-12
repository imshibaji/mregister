@extends('layouts.main', ['some' => 'Test Data'])

@section('title','User Details')
@section('ptitle','User Details')

@section('content')


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        User Details
      </div>
      <div class="card-block">
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="{{ gravimg($user) }}" class="img-thumbnail" width="400" />
            <table class="table table-striped table-bordered">
              <tr>
                <td>Visitor IP</td>
                <td>{{ $user->visitor }}</td>
              </tr>
              <tr>
                <td>Last Logout</td>
                <td>{{ $user->last_logout }}</td>
              </tr>
              <tr>
                <td><a href="{{url('admin/users')}}" class="btn btn-info btn-block">Back</a></td>
                <td><a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-success btn-block">Edit</a></td>
              </tr>
            </table>
          </div>
          <div class="col-md-8">
            <table class="table table-striped table-bordered">
              <tr>
                <td>Name</td>
                <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>{{ $user->email }}</td>
              </tr>
              <tr>
                <td>Mobile</td>
                <td>{{ $user->mobile }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>{{ $user->address }}</td>
              </tr>
              <tr>
                <td>Location</td>
                <td>{{ $user->location }}</td>
              </tr>
              <tr>
                <td>Pincode</td>
                <td>{{ $user->pincode }}</td>
              </tr>
              <tr>
                <td>About</td>
                <td>{{ $user->about }}</td>
              </tr>
              <tr>
                <td>User Type</td>
                <td>{{ $user->role }}</td>
              </tr>
              <tr>
                <td>Status</td>
                <td>{{ $user->status }}</td>
              </tr>
              <tr>
                <td>Created At</td>
                <td>{{ $user->created_at }}</td>
              </tr>
              <tr>
                <td>Updated At</td>
                <td>{{ $user->updated_at }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/.row-->
@endsection


@section('footer-scripts')
  @parent

@endsection
