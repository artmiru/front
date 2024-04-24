@extends('layouts.temp')

@section('title', 'Home Page')

@section('content')

    <div class="bg-stone-100 py-8 text-center">
        <div class="sm:container sm:mx-auto">
            <h1 class="text-2xl font-normal mb-4 sm:text-6xl sm:mb-0">ХУДОЖЕСТВЕННЫЕ КУРСЫ</h1>
            <h2 class="sm:mb-8 sm:mt-2 sm:text-2xl sm:text-gray-400">ВЫ МОЖЕТЕ ЗАПИСАТЬСЯ НА ЛЮБОЙ ИЗ ЭТИХ КУРСОВ</h2>
            <div class="grid sm:grid-cols-3 gap-4 sm:gap-2">
                @foreach ($artCourses as $course)
                    <div class="bg-white shadow-md">
                        <h3 class="text-xl my-1 ">{{ $course['title'] }}</h3>
                        <img class="h-auto sm:max-w-full sm:w-auto w-max max-w-full mx-auto border mb-2"
                            src="{{ $course['imageUrl'] }}" alt="{{ $course['title'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
