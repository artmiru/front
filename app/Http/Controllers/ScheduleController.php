<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseSchedule;
use Carbon\Carbon;

class ScheduleController extends Controller
{
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