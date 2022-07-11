<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class UserCourses extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'course_id',
        'status'
    ];

    public function scopeCheckStatusCourse($query, $id)
    {
        return $query->where('course_id', $id)->where('user_id', Auth::id())->first();
    }
}
