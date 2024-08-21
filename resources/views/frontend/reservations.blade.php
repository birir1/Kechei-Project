@extends('layouts.kechei')

@section('title', 'Reservations Page')

@section('content')
@include('frontend.partials.navbar')

@include('frontend.partials.Landing')

@include('frontend.partials.reservations')

@include('frontend.partials.footer')
@endsection