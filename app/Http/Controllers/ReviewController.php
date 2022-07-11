<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'course_id' => $request['course_id'],
            'comment' => $request['review_content'],
            'vote' => $request['rating'],
        ];
        if ($data) {
            Reviews::create($data);
            return redirect()->back();
        }
    }
}
