<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Documents extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'lesson_id',
        'file_path',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_documents', 'document_id', 'user_id');
    }

    public function lessons()
    {
        return $this->belongsTo(Lessons::class);
    }

    public function getUserDocumentAttribute()
    {
        return $this->users()->where('user_id', Auth::id())->count();
    }
}
