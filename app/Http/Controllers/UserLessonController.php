<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use App\Models\UserDocuments;
use App\Models\UserLessons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLessonController extends Controller
{
    public function update(Request $request, $lessonId)
    {
        $lesson = Lessons::find($lessonId);
        $numLessonComplete = UserDocuments::countlessoncomplete($lessonId);
        $data = [
            'sum_document_completed' => $numLessonComplete->count(),
            'sum_document' => $lesson->documents()->count(),
        ];
        $progress = UserLessons::sumProgress($data);
        $userLesson = UserLessons::where('user_id', Auth::id())->where('lesson_id', $lessonId)->first();
        if ($userLesson) {
            $userLesson->update(
                [
                    'progress' => $progress
                ],
            );
        } else {
            UserLessons::create([
                    'user_id' => Auth::id(),
                    'lesson_id' => $lessonId,
                    'progress' => $progress,
                ]);
        }
        Auth::user()->documents()->attach($request['document_id']);
        return redirect()->back();
    }
}
