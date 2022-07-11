<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{
    public function store(Request $request)
    {
        $checkCourse = Courses::find($request['course-id']);
        if ($checkCourse) {
            Auth::user()->courses()->attach([$request['course-id'] => ['status' => config('course.status_start')]]);
            return redirect()->back()->with('message_success', 'Đã thêm vào thành công');
        } else {
            return "Course does not exist";
        }
    }

    public function update(Request $request, $id)
    {
        $statusCourse = UserCourses::checkstatuscourse($id);
        $statusCourse->status = config('course.status_end');
        $statusCourse->save();
        if ($statusCourse) {
            return redirect()->back()->with('message_end_course', 'Hoàn thành');
        }
    }
}
