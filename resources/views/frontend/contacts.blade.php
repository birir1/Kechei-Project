@extends('layouts.kechei')

@section('title', 'Home Page')

@section('content')
@include('frontend.partials.navbar')

{{-- @include('frontend.partials.Landing') --}}

@include('frontend.partials.contacts')

@include('frontend.partials.footer')
@endsection