<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Notes;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function show($courseId, $lessonId)
    {
        $lessons = Lessons::find($lessonId);
        $course = Courses::find($courseId);
        $otherCourses = Courses::others($courseId)->get();
        $notes = Notes::query()->where('course_id', $courseId)
            ->where('lesson_id', $lessonId)
            ->where('user_id', Auth::id())
            ->get();
        // Share button 1
        $shareButtons1 = \Share::page(
            'https://www.youtube.com/watch?v=zwsPND378OQ&list=PL_-VfJajZj0U9nEXa4qyfB4U5ZIYCMPlz&index=2&ab_channel=F8Official',
            'https://www.youtube.com/watch?v=7BJiPyN4zZ0&list=PL_-VfJajZj0U9nEXa4qyfB4U5ZIYCMPlz&index=3&ab_channel=F8Official'
        )
            ->facebook()
            ->twitter()
            ->linkedin();
        return view('lessons.show', compact('lessons', 'course', 'otherCourses', 'shareButtons1', 'notes'));
    }
}
