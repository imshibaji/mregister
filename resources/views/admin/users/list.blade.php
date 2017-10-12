@extends('layouts.main', ['some' => 'data'])

@section('title','Users List')
@section('ptitle','Users Area')

@section('searchbar')
<form action="{{url('admin/users')}}" method="post" name="search">
  {{ csrf_field() }}
  <div class="input-group">
    <span class="input-group-addon">Search</span>
    <input type="text" class="form-control" name="query" id="search" placeholder="Search Users">
    <button type="submit" class="btn btn-success">
      <i class="fa fa-search"></i> Search
    </button>
  </div>
</form>
@endsection


@section('btns')
  <a href="{{ url('admin/users/create') }}" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add User</a>
@endsection

@section('content')
  @if (Session::has('msg'))
    <div class="alert alert-success">{{ Session::get('msg') }}</div>
  @endif

  <div class="card">
    <div class="card-header">
      Users List
    </div>
    <div class="card-block">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>Name</th>
              <th class="d-md-down-none">Username / Email</th>
              <td class="text-center">Type</td>
              <th class="d-md-down-none text-center">Active?</th>
              <th class="d-md-down-none text-center">Deleted?</th>
              <th class="text-center">Activity</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td class="d-md-down-none">{{$user->email}}</td>
              <td class="text-center">{{ ucfirst($user['role']) }}</td>
              <td class="d-md-down-none text-center">{{ ($user->status=='active')? 'Yes': 'No' }}</td>
              <td class="d-md-down-none text-center">{{ ($user->deleted_at)? 'Yes' : 'No' }}</td>
              <td class="text-center">
                <div class="btn-group">
                  <a class="btn btn-info" href="{{url('admin/users/'.$user->id)}}" title="View Details">
                    <i class="fa fa-eye"></i>
                  </a>
                  @isset($user->deleted_at)
                    <a class="btn btn-danger" href="{{url('admin/users/remove/'.$user->id)}}" title="Delete">
                      <i class="fa fa-trash-o"></i>
                    </a>
                    <a class="btn btn-success" href="{{url('admin/users/restore/'.$user->id)}}" title="Restore"><i class="fa fa-recycle"></i></a>

                  @else
                    <a class="btn btn-primary" href="{{url('admin/users/'.$user->id.'/edit')}}" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{url('admin/users/'.$user->id)}}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger" title="User Delete">
                        <i class="fa fa-ban"></i>
                      </button>
                    </form>
                  @endisset
                </div>
              </td>
            </tr>
          @endforeach
          {{-- <tr>
            <td>Shibaji Debnath</td>
            <td class="d-md-down-none">imshibaji@gmail.com</td>
            <td>Admin</td>
            <td class="d-md-down-none">Active</td>
            <td class="text-center">
              <div class="btn-group">
                <a class="btn btn-info" href="#" title="View Details">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-primary" href="#" title="Edit">
                  <i class="fa fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger" title="Delete">
                  <i class="fa fa-trash-o"></i>
                </a>
              </div>
            </td>
          </tr> --}}
        </tbody>
      </table>
    </div>
  </div>
@endsection
