@extends('fontend.layout.app')
@section('content')

@include('fontend.component.leadnews')

@include('fontend.pages.categoryInfo')

@include('fontend.pages.sports')

@include('fontend.component.AdsInBody')
@include('fontend.component.ApnarJonno')

@include('fontend.component.stickyAds')

@endsection

