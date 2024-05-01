<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseSchedule;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function index()
    {
        // Определяем начало и конец текущей недели
        $startDate = Carbon::now();
        $endDate = Carbon::now()->addDays(7);

        // Получаем расписание на текущую неделю
        $schedules = CourseSchedule::whereBetween('date', [$startDate, $endDate])
            ->orderBy('date')
            ->orderBy('time')
            ->get();

        // Группируем расписание по дате и учителю для удобного отображения в представлении
        $groupedSchedules = [];
        foreach ($schedules as $schedule) {
            $date = $schedule->date;
            $formattedDate = Carbon::parse($date)->format('Y-m-d');

            if (!isset($groupedSchedules[$formattedDate])) {
                $groupedSchedules[$formattedDate] = [];
            }

            if ($schedule->teacher) {
                $teacherName = $schedule->teacher->user->name ?? null; // Get teacher's name
                $teacherLastName = $schedule->teacher->user->last_name ?? null; // Get teacher's last name
                $teacherFullName = $teacherLastName . ' ' . $teacherName;

                // Determine the number of available seats (replace this logic with your own)
                $availableSeats = $this->getAvailableSeats($schedule); // Example method to calculate available seats

                // Add schedule data to the groupedSchedules array
                if (!isset($groupedSchedules[$formattedDate][$teacherFullName])) {
                    $groupedSchedules[$formattedDate][$teacherFullName] = [];
                }

                $groupedSchedules[$formattedDate][$teacherFullName][] = [
                    'time' => $schedule->time,
                    'available_seats' => $availableSeats
                ];
            }
        }

        // Возвращаем представление с данными расписания
        return view('pages.schedule.weekly', [
            'groupedSchedules' => $groupedSchedules,
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);
    }

    // Example method to calculate available seats (replace this with your own logic)
    private function getAvailableSeats($schedule)
    {
        // Assuming you have a way to determine available seats based on max capacity or enrollment
        // Replace this with your own logic to calculate available seats for each schedule
        return 10; // Example: Return a static number of available seats
    }
    
    
    public function generate(Request $request)
    {

        // if (!$request->has('secret_key') || $request->input('secret_key') !== 'your-secret-key') {
        //     abort(403, 'Нет доступа');
        // }

        // Определите диапазон дат для генерации расписания
        $startDate = Carbon::now()->startOfDay();
        $endDate = Carbon::now()->addMonth()->startOfDay();

        // Определите все временные слоты
        $timeSlots = ['9:10', '11:20', '13:30', '15:40', '17:50', '20:00'];

        // Определите расписание для каждого учителя
        $teachersSchedule = [
            3 => [
                'Saturday' => ['11:20', '13:30', '15:40']
            ],
            4 => [
                'Wednesday' => ['11:20', '13:30', '15:40'],
                'Thursday' => ['11:20', '13:30', '15:40'],
                'Friday' => ['15:40', '17:50', '20:00']
            ],
            7 => [
                'Tuesday' => ['17:50', '20:00'],
                'Sunday' => ['9:10', '11:20', '13:30']
            ],
            5 => [
                'Thursday' => ['17:50', '20:00']
            ],
            8 => [
                'Wednesday' => ['17:50']
            ]
        ];

        // Переберите каждый день в диапазоне дат
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            $dayOfWeek = $date->format('l');

            // Переберите все временные слоты
            foreach ($timeSlots as $time) {
                $userId = null; // По умолчанию учитель не назначен

                // Переберите расписание каждого учителя
                foreach ($teachersSchedule as $teacherId => $days) {
                    if (isset($days[$dayOfWeek]) && in_array($time, $days[$dayOfWeek])) {
                        $userId = $teacherId; // Учитель назначен на этот слот
                        break;
                    }
                }

                // Создайте или обновите запись в расписании
                CourseSchedule::firstOrCreate([
                    'date' => $date->format('Y-m-d'),
                    'time' => $time
                ], [
                    'teacher_id' => $userId // Может быть null, если учитель не назначен
                ]);
            }
        }

        return response()->json(['message' => 'Расписание сгенерировано']);
    }
}