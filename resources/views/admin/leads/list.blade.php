@extends('layouts.main', ['some' => 'data'])

@section('title','Lists Page')
@section('ptitle','Lists Area')

@section('content')
  <div class="card">
    <div class="card-header">
      Leads Page
    </div>
    <div class="card-block">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>Name</th>
              <th class="d-md-down-none">Requirement</th>
              <th class="d-md-down-none">Status</th>
              <th class="d-md-down-none">Confirm</th>
              <th class="text-center">Activity</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($leads as $lead)
            <tr>
              <td>{{ $lead->name }}</td>
              <td class="d-md-down-none">{{ $lead->requirement }}</td>
              <td class="d-md-down-none">{{ $lead->status }}</td>
              <td class="d-md-down-none">{{ $lead->confirm }}</td>
              <td class="text-center">
                <div class="btn-group">
                  <a class="btn btn-info" href="{{url('admin/leads/'.$lead->id)}}" title="View Details">
                    <i class="fa fa-eye"></i>
                  </a>
                  @manager
                    <a class="btn btn-primary" href="{{url('admin/leads/'.$lead->id.'/edit')}}" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                  @endmanager
                  @admin
                    <form action="{{url('admin/leads/'.$lead->id)}}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger" title="Delete">
                        <i class="fa fa-trash-o"></i>
                      </button>
                    </form>
                  @endadmin
                </div>
              </td>
            </tr>
          @endforeach

          {{-- <tr>
            <td>Shibaji Debnath</td>
            <td class="d-md-down-none">imshibaji@gmail.com</td>
            <td class="d-md-down-none">Active</td>
            <td class="text-center">
              <div class="btn-group">
                <a class="btn btn-primary" href="#">Edit</a> <a href="#" class="btn btn-danger">Delete</a>
              </div>
            </td>
          </tr> --}}
        </tbody>
      </table>
    </div>
  </div>
@endsection
