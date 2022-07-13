<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ROLE_USER = 0;
    const ROLE_TEACHER = 1;
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
        'role',
        'date_of_birth',
        'about',
        'description',
        'status',
        'address',
        'facebook_id',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'user_courses', 'user_id', 'course_id');
    }

    public function teacherCourses()
    {
        return $this->belongsToMany(Courses::class, 'teacher_courses', 'user_id', 'course_id');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'user_id');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lessons::class, 'user_lessons', 'user_id', 'lesson_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Documents::class, 'user_documents', 'user_id', 'document_id');
    }

    public function favorite_courses()
    {
        return $this->hasMany(Courses::class, 'course_id');
    }

    public function scopeTeacher($query)
    {
        $query->where('role', User::ROLE_TEACHER);
    }
}
