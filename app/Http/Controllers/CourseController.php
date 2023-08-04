<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Course/Index', [
            'courses' => Auth::user()->courses()->get(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return inertia('Course/Show', compact('course'));
    }
}
