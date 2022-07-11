<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Lessons extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'course_id',
        'name',
        'price',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_lessons', 'lesson_id', 'user_id')->withPivot('progress');
    }

    public function documents()
    {
        return $this->hasMany(Documents::class, 'lesson_id');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function scopeSearch($query, $data)
    {
        if (isset($data['keyword'])) {
            $query->where('name', 'LIKE', '%' . $data['keyword'] . '%');
        }
        return $query;
    }

    public function getLearningProgressAttribute()
    {
        return UserLessons::where('user_id', Auth::id())->where('lesson_id', $this->id)->first();
    }
}
