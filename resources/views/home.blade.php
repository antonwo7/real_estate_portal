@extends('layouts.front')

@section('content')
    @include('home.main-banner')
    @include('home.featured-properties')
    @include('common.sections.services')
    @include('common.sections.recent-properties-list')
@endsection
