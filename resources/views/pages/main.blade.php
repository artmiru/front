@extends('layouts.temp')

@section('title', 'Home Page')

@section('content')
    <div class="shadow">
        <div class="bg-stone-50 py-8 text-center">
            <div class="sm:container sm:mx-auto sm:w-10/12">
                <h1 class="sm:mt-5 mb-0 text-2xl sm:mb-0 sm:text-6xl">ХУДОЖЕСТВЕННЫЕ КУРСЫ</h1>
                <h2 class="sm:mb-12 sm:mt-2 sm:text-2xl sm:text-gray-400 mb-2">ВЫ МОЖЕТЕ ЗАПИСАТЬСЯ НА ЛЮБОЙ ИЗ ЭТИХ КУРСОВ</h2>
                <div class="grid gap-6 pb-3 sm:grid-cols-3 sm:gap-3">
                    @foreach ($artCourses as $course)
                        <div class="flex flex-col justify-between sm:rounded border bg-white shadow-lg sm:pb-3">
                            <div>
                                <h3 class="my-3 text-2xl">{{ $course['title'] }}</h3>
                                <img class="mx-auto h-auto w-full rounded-b border-y" src="{{ $course['imageUrl'] }}"
                                    alt="{{ $course['title'] }}">
                                <p class="mx-4 my-2 px-0 text-left">{{ $course['description'] }}</p>
                            </div>
                            <div class="self-end w-full sm:py-1">
                                <button
                                    class="text-base py-3 text-white sm:text-red-500 bg-red-500 sm:bg-white sm:w-auto w-full sm:mx-auto sm:rounded sm:border sm:border-red-500 sm:px-8 sm:py-1 hover:bg-red-500 hover:text-white">Подробнее</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
