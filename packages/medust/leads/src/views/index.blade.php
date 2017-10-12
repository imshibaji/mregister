@extends('layouts.main')

@section('title','Dashboard')
@section('ptitle','Admin Area')

@section('left-menu')
  <li class="nav-title">
      Business Elements
  </li>
  <li class="nav-item">
      <a class="nav-link" href="#"><i class="icon-star"></i> MY Custom Menu</a>
  </li>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Dashboard
      </div>
      <div class="card-block">
        I am {{$name}}, I am a {{$job}}.
      </div>
    </div>
  </div>
</div>
<!--/.row-->
@endsection


@section('footer-scripts')
  @parent

@endsection
