<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class UserLessons extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'lesson_id',
        'progress',
    ];

    public static function sumProgress($data)
    {
        $numProgress = ((($data['sum_document_completed'] + 1) / $data['sum_document']) * config('course.one_hundreds'));
        return number_format((float) $numProgress, 2, '.', '');
    }
}
