@extends('layouts.kechei')

@section('title', 'Home Page')

@section('content')
@include('frontend.partials.navbar')

<script>
    $(document).ready(function(){
        console.log('jQuery is working!');
    });
  </script>
  

@include('frontend.partials.Landing')

@include('frontend.partials.footer')
@endsection