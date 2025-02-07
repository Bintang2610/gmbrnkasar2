<?php

// app/Http/Controllers/UploadController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showForm()
    {
        return view('upload'); // Menampilkan form upload
    }

    public function uploadImage(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan file ke folder public/uploads
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Mengembalikan respon atau redirect
        return back()->with('success', 'Gambar berhasil diupload!');
    }
}

