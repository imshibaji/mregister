@extends('layouts.base')
@include('layouts.top-menus')
@include('layouts.left-panel')
@include('layouts.right-panel')
@include('layouts.breadcrumb')

@section('metas')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Demo Page">
  <meta name="author" content="Shibaji Debnath">
  <meta name="keyword" content="admin, page">
  <link rel="shortcut icon" href="http://www.medust.com/wp-content/themes/bs-medust/images/favicons/favicon.png">
@endsection


@section('head-script')
<style>
.navbar-brand{
  background-image: url({{ asset('img/logo-new.png') }}) !important;
  background-size: 110px auto !important;
}
.dropdown-item a{
  text-decoration: none;
  color: black;
}
</style>
@endsection

@section('footer-scripts')
<script>
  $(function(){
    $('.map-point').popover({
      container: 'Body',
      title: 'Map Pointing',
      content: '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14725.43098891255!2d88.425848!3d22.6777226!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89ee9dc86436f%3A0x9ffd5dea875b42de!2zMjLCsDQwJzU5LjIiTiA4OMKwMjUnMzguNCJF!5e0!3m2!1sen!2sin!4v1496768383135" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>',
      html: true,
    });

    $('.new-update').popover({
      placement: 'bottom',
      container: 'Body',
      title: 'New Updates',
      content: '<ul class="list-group"><li class="list-group-item">Some Data helo to pick 1 Some Data helo to pick 1</li><li class="list-group-item list-group-item-info">Some Data 2</li><li class="list-group-item list-group-item-info">Some Data 3</li></ul>',
      html: true,
    });
  });
</script>
@endsection
