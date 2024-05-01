@extends('layouts.temp')

@section('title', 'Home Page')

@section('content')
    @include('pages.main.courses')
    <x-schedule></x-schedule>
    @include('pages.main.price')
    @include('pages.main.teachers')
@endsection
