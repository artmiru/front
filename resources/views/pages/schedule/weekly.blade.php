@extends('layouts.temp')

@section('title', 'Weekly Schedule')

@section('content')
    <div class="grid grid-cols-6 gap-3 py-10 mx-6">
        @foreach ($groupedSchedules as $date => $teachers)
            @if (!empty($teachers))
            @php
            $isWeekend = Carbon\Carbon::parse($date)->isSaturday() || Carbon\Carbon::parse($date)->isSunday();
        @endphp
                <div class="bg-white shadow-lg rounded-lg mb-6 border overflow-hidden">
                    <div class="px-3 py-2 border-b border-gray-200 {{ $isWeekend ? 'bg-red-50' : 'bg-gray-50' }}">
                        <h2 class="flex flex-col items-center leading-tight font-medium">
                            <span class="capitalize">{{ \Carbon\Carbon::parse($date)->isoFormat('dddd') }}</span>
                            <span>{{ \Carbon\Carbon::parse($date)->isoFormat('D MMMM') }} </span>
                        </h2>
                    </div>
                    <div class="p-3 flex flex-col items-center space-y-4 mb-4">
                        @foreach ($teachers as $teacherFullName => $schedules)
                            <div class="w-min">
                                <h3 class="text-base font-medium leading-tight text-center">{{ $teacherFullName }}</h3>
                                @foreach ($schedules as $schedule)
                                    <div
                                        class="flex justify-center items-center mt-2 whitespace-nowrap text-lg space-x-2 bg-yellow-50 py-1 px-3 border border-yellow-200 rounded-full">
                                        <span>{{ \Carbon\Carbon::createFromTimeString($schedule['time'])->format('H:i') }}</span>
                                        <span>-</span>
                                        <span>{{ $schedule['available_seats'] }} мест</span>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
