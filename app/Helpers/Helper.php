<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Helper
{
    public static function uploadFile(UploadedFile $file, $path = null)
    {
        $fileName = $file->getClientOriginalName();
        $path = !empty($path) ? $path : 'public/storage/images';
        $file->move($path, $file->getClientOriginalName());
        $thumb = $path . '/' . $fileName;
        return $thumb;
    }
}
