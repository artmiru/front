@extends('layouts.temp')

@section('title', 'Home Page')

@section('content')
    <div id="courses" class="shadow">
        <div class="bg-stone-50 py-8 text-center">
            <div class="sm:container sm:mx-auto sm:w-10/12">
                <h1 class="mb-0 text-2xl sm:mb-0 sm:mt-5 sm:text-6xl">ХУДОЖЕСТВЕННЫЕ КУРСЫ</h1>
                <h2 class="mb-2 sm:mb-12 sm:mt-2 sm:text-2xl sm:text-gray-400">ВЫ МОЖЕТЕ ЗАПИСАТЬСЯ НА ЛЮБОЙ ИЗ ЭТИХ КУРСОВ
                </h2>
                <div class="grid gap-6 pb-3 sm:grid-cols-3 sm:gap-3">
                    @foreach ($artCourses as $course)
                        <div class="flex flex-col justify-between border bg-white shadow-lg sm:rounded sm:pb-3">
                            <div>
                                <h3 class="my-3 text-2xl">{{ $course['title'] }}</h3>
                                <img class="mx-auto h-auto w-full rounded-b border-y" src="{{ $course['imageUrl'] }}"
                                    alt="{{ $course['title'] }}">
                                <p class="mx-4 my-2 px-0 text-left">{{ $course['description'] }}</p>
                            </div>
                            <div class="w-full self-end sm:py-1">
                                <button
                                    class="w-full bg-red-500 py-3 text-base text-white hover:bg-red-500 hover:text-white sm:mx-auto sm:w-auto sm:rounded sm:border sm:border-red-500 sm:bg-white sm:px-8 sm:py-1 sm:text-red-500">Подробнее</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-schedule></x-schedule>
    @include('pages.main.price')
    @include('pages.main.teachers')
@endsection
