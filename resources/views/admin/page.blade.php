@extends('layouts.main', ['some' => 'Test Data'])

@section('title','Admin Page')
@section('ptitle','Admin Page')

@section('content')


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Page Title
      </div>
      <div class="card-block">
        <pre>
          <code>{{ auth()->user() }}</code>
        </pre>
        <p>IP: {{ ip() }}</p>
      </div>
    </div>
  </div>
</div>
<!--/.row-->
@endsection


@section('footer-scripts')
  @parent

@endsection
