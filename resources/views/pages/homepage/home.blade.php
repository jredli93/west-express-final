@extends('layouts.app')

@section('header')
    @include('pages.homepage.header')
@endsection

@section('cta')
    @include('pages.homepage.cta')
@endsection

@section('services')
    @include('pages.homepage.services')
@endsection

@section('work')
    @include('pages.homepage.work')
@endsection

@section('testimonials')
    @include('pages.homepage.testimonials')
@endsection

@section('cta-careers')
    @include('pages.homepage.cta-careers')
@endsection

@section('footer')
    @include('pages.homepage.footer')
@endsection
