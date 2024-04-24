@extends('layouts.temp')

@section('title', 'Home Page')

@section('content')
<div class="shadow">
    <div class="bg-stone-50 py-8 text-center">
        <div class="sm:container sm:mx-auto sm:w-10/12">
            <h1 class="text-2xl font-normal mb-4 sm:text-6xl sm:mb-0">ХУДОЖЕСТВЕННЫЕ КУРСЫ</h1>
            <h2 class="sm:mb-8 sm:mt-2 sm:text-2xl sm:text-gray-400">ВЫ МОЖЕТЕ ЗАПИСАТЬСЯ НА ЛЮБОЙ ИЗ ЭТИХ КУРСОВ</h2>
            <div class="grid sm:grid-cols-3 gap-4 sm:gap-2">
                @foreach ($artCourses as $course)
                    <div class="bg-white shadow-lg border rounded">
                        <h3 class="text-2xl my-3 font-semibold">{{ $course['title'] }}</h3>
                        <img class="h-auto w-full mx-auto border"
                            src="{{ $course['imageUrl'] }}" alt="{{ $course['title'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
