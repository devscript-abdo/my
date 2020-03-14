@extends('layout.app')

@section('title', 'About me - Elmarzougui Abdelghafour')

@section('content')

    @include('site.about.top')
    @include('site.about.about')
    @include('site.about.skills')
    {{-- @include('site.about.theme')--}}
    @include('site.about.team')


@endsection
