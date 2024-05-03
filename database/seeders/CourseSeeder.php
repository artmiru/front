<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Основы рисунка',
                'img' => 'https://artmir.ru/img/pages/main/drawing_course.jpg',
                'description' => 'Это первая ступень полного курса. Художественный курс «Основы рисунка» — это «дверь» в мир рисунка и живописи.',
            ],
            [
                'title' => 'Основы акварели',
                'img' => 'https://artmir.ru/img/pages/main/watercolor_course.jpg',
                'description' => 'Вы можете выбрать программу студии или просто писать свои картины акварелью под руководством преподавателя.',
            ],
            [
                'title' => 'Основы "Масло"',
                'img' => 'https://artmir.ru/img/pages/main/oilcolors_course.jpg',
                'description' => 'Вы можете выбирать учебный курс студии или писать свои картины под руководством учителя.',
            ],
            [
                'title' => 'Рисование портрета',
                'img' => 'https://artmir.ru/img/pages/main/portrait_course.jpg',
                'description' => 'Вы хотите научиться рисовать портрет? Курс включает в себя все этапы изучения рисования портрета!',
            ],
            [
                'title' => 'Курс пастели',
                'img' => 'https://artmir.ru/img/pages/main/pastel_course.jpg',
                'description' => 'Как научиться рисовать пастелью? На курсе рисования пастелью, вы нарисуете свою первую картину пастелью.',
            ],
            [
                'title' => 'Мастер-класс живописи',
                'img' => 'https://artmir.ru/img/pages/main/mk.jpg',
                'description' => 'Вы самостоятельно напишете картину за 3 часа от начала и до конца, под руководством опытного преподавателя.',
            ],
            [
                'title' => 'Собственный курс',
                'img' => 'https://artmir.ru/img/pages/main/variable_course.jpg',
                'description' => 'Выбирайте сами, что хотите научиться рисовать! Преподаватель будет учить вас в соответствии с вашими пожеланиями!',
            ],
            [
                'title' => 'Продажа картин',
                'img' => 'https://artmir.ru/img/pages/main/paintings_sale.jpg',
                'description' => 'Продаются картины написаные преподавателями на мастер-классах живописи.',
            ],
            [
                'title' => 'Подарочный сертификат',
                'img' => 'https://artmir.ru/img/pages/main/gift_sertificate.jpg',
                'description' => 'Вы можете приобрести подарочный сертификат на любой курс!',
            ]
        ];

        foreach ($courses as $course) {
            Course::firstOrCreate($course);
        }
    }
}
