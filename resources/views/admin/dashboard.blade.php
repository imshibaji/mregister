@extends('layouts.main', ['some' => 'Test Data'])

@section('title','Dashboard')
@section('ptitle','Admin Area')

@section('content')


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Dashboard
      </div>
      <div class="card-block">
        <pre>
          <code>{{ auth()->user() }}</code>
        </pre>
        <p>{{ auth()->user()->isAdmin() }}</p>
        <p>IP: {{ $ip }}</p>
        @user('user')
          <h1>It only for admin view</h1>
        @enduser
        <p>Time: {{ $time }}</p>
        <p>AferTime: {{ $aftertime }}</p>
        <p>Deffer: {{ $deffer }}</p>
      </div>
    </div>
  </div>
</div>
<!--/.row-->
@endsection


@section('footer-scripts')
  @parent

@endsection
