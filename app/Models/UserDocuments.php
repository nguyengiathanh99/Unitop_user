<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class UserDocuments extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function scopeCountLessonComplete($query, $lessonId)
    {
        return $query->where('user_id', Auth::id())
            ->join('documents', 'documents.id', '=', 'user_documents.document_id')
            ->where('documents.lesson_id', $lessonId)->get();
    }
}
