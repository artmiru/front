<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
    {
        $artCourses = [
            [
                'title' => "ОСНОВЫ РИСУНКА",
                'imageUrl' => "https://artmir.ru/img/pages/main/drawing_course.jpg",
            ],
            [
                'title' => "ОСНОВЫ АКВАРЕЛИ",
                'imageUrl' => "https://artmir.ru/img/pages/main/watercolor_course.jpg",
            ],
            [
                'title' => "ОСНОВЫ 'МАСЛО'",
                'imageUrl' => "https://artmir.ru/img/pages/main/oilcolors_course.jpg",
            ],
            [
                'title' => "РИСОВАНИЕ ПОРТРЕТА",
                'imageUrl' => "https://artmir.ru/img/pages/main/portrait_course.jpg",
            ],
            [
                'title' => "КУРС ПАСТЕЛИ",
                'imageUrl' => "https://artmir.ru/img/pages/main/pastel_course.jpg",
            ],
            [
                'title' => "МАСТЕР-КЛАСС ЖИВОПИСИ",
                'imageUrl' => "https://artmir.ru/img/pages/main/mk.jpg",
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
