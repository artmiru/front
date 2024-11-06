<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;
use App\Models\Course;

class MainController extends Controller
{
    public function index()
    {
        $coursePrices = Subscription::where('type', 0)->get();
        $courses = Course::all();
        $teachers = Teacher::with('user') // Eager load the user relationship
            ->where('status', 1) // Filter by status
            ->orderBy('created_at', 'desc') // Order by the created_at timestamp
            ->get(); // Get the results

        return view('pages.main.index', compact('courses', 'coursePrices', 'teachers'));
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
