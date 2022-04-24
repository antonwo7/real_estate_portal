@extends('layouts.front')

@section('content')
    @include('home.main-banner')
    @include('home.featured-properties')
    @include('common.sections.services')
    @include('common.sections.recent-properties-list')
    @include('common.sections.popular-locations')
    @include('common.sections.agents')
    @include('common.sections.testimonials')
    @include('common.sections.latest-blog')
    @include('common.sections.subscription')
@endsection
