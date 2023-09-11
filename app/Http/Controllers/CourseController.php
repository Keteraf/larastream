<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
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
        $videos = $course->videos()->get();
        $current_video = Video::findOrFail(1);
        return inertia('Course/Show', compact('course','videos', 'current_video'));
    }
}
