<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class TinyMCEUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/tinymce', 'public');
            // Always return absolute URL for SEO and frontend correctness
            $url = url('storage/' . $path);
            return response()->json(['location' => $url]);
        }
        return response()->json(['error' => 'No file uploaded.'], 400);
    }
}
