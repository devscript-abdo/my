@extends('layout.app')

@section('title', 'BLOG - '.$post->title)

@section('content')

    @include('site.blog.single.top')
    @include('site.blog.single.single')


@endsection
