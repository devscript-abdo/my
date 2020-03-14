@extends('layout.app')

@section('title', 'Web developer Morocco')

@section('content')

    @include('site.home.slider')
    @include('site.home.service')
    @include('site.home.couse')
    @include('site.home.portfolio')
    @include('site.home.testimonial')
    @include('site.home.counter')

@endsection
