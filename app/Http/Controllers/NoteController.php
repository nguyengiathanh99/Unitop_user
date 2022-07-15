<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function create(Request $request, $id)
    {
        $userId = Auth::id();
        $lessonId = $id;
        $courseId = $request->course_id;
        $content = $request['text-note'];
        $data = [
            'user_id' => $userId,
            'course_id' => $courseId,
            'lesson_id' => $lessonId,
            'content' => $content,
        ];
        Notes::create($data);
        return redirect()->back();
    }
}
