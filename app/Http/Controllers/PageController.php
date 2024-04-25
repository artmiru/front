<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $artCourses = [
            [
                'title' => 'ОСНОВЫ РИСУНКА',
                'imageUrl' => 'https://artmir.ru/img/pages/main/drawing_course.jpg',
                'description' => 'Это первая ступень полного курса. Художественный курс "Основы рисунка", это "дверь" в мир рисунка и живописи.',
            ],
            [
                'title' => 'ОСНОВЫ АКВАРЕЛИ',
                'imageUrl' => 'https://artmir.ru/img/pages/main/watercolor_course.jpg',
                'description' => 'Это курс для начинающих, в котором вы научитесь работать с акварельной краской.',
            ],
            [
                'title' => 'ОСНОВЫ "МАСЛО"',
                'imageUrl' => 'https://artmir.ru/img/pages/main/oilcolors_course.jpg',
                'description' => 'Художественный курс предназначен для тех, кто уже умеет немного рисовать и желает освоить технику живописи масляными красками.',
            ],
            [
                'title' => 'РИСОВАНИЕ ПОРТРЕТА',
                'imageUrl' => 'https://artmir.ru/img/pages/main/portrait_course.jpg',
                'description' => 'Вы хотите научиться рисовать портрет? Тогда этот художественный курс именно для Вас. Курс включает в себя все этапы изучения рисования портрета!',
            ],
            [
                'title' => 'КУРС ПАСТЕЛИ',
                'imageUrl' => 'https://artmir.ru/img/pages/main/pastel_course.jpg',
                'description' => 'Как научиться рисовать пастелью? Очень просто, запишитесь на пробный урок! Вам все покажут и расскажут, вы научитесь рисовать пастелью!',
            ],
            [
                'title' => 'МАСТЕР-КЛАСС ЖИВОПИСИ',
                'imageUrl' => 'https://artmir.ru/img/pages/main/mk.jpg',
                'description' => 'Вы самостоятельно напишете картину за 3 часа от начала и до конца, под руководством опытного преподавателя. И сразу заберете ее домой',
            ],
            [
                'title' => 'СОБСТВЕННЫЙ КУРС',
                'imageUrl' => 'https://artmir.ru/img/pages/main/variable_course.jpg',
                'description' => 'Выбирайте сами, что хотите научиться рисовать! Преподаватель будет учить вас в соответствии с вашими пожеланиями!',
            ],
            [
                'title' => 'ПРОДАЖА КАРТИН',
                'imageUrl' => 'https://artmir.ru/img/pages/main/paintings_sale.jpg',
                'description' => 'Продаются картины написаные преподавателями на мастер-классах живописи.',
            ],
            [
                'title' => 'ПОДАРОЧНЫЙ СЕРТИФИКАТ',
                'imageUrl' => 'https://artmir.ru/img/pages/main/gift_sertificate.jpg',
                'description' => 'Вы можете приобрести подарочный сертификат на любой курс!',
            ],
        ];
        return view('pages.main', compact('artCourses'));
    }

    public function drawing()
    {
        return view('drawing');
    }

    public function oilColor()
    {
        return view('oilcolor');
    }

    public function waterColor()
    {
        return view('watercolor');
    }
}
