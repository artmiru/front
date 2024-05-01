@extends('layouts.temp')

@section('title', 'Weekly Schedule')

@section('content')
    <div class="container w-10/12 mx-auto bg-stone-100 flex flex-row justify-center">
     @foreach ($groupedSchedules as $date => $schedulesByDate)

     {{-- @dd($groupedSchedules) --}}
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2">{{ \Carbon\Carbon::parse($date)->isoFormat('dddd DD.MM') }}</h2>

                @foreach ($groupedSchedules as $date => $teachers)
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">{{ $date }}</h2>

            @foreach ($teachers as $teacherName => $schedules)
                <div class="mb-4">
                    <h3 class="text-lg font-medium mb-2">{{ $teacherName }}</h3>

                    <ul>
                        @foreach ($schedules as $schedule)
                            <li class="mb-2">
                                <span class="font-semibold">{{ $schedule['time'] }}</span> - {{ $schedule['available_seats'] }} места
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    @endforeach
            </div>
        @endforeach
    </div>
@endsection
