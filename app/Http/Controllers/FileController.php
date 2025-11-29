<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;  
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // index
public function index()
{
    $files = File::all();
    return view('admin.file.index', compact('files'));
}

// store / upload
public function store(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048'
    ]);

    $path = $request->file('file')->store('uploads', 'public');

    $file = new File();
    $file->name = $request->file('file')->getClientOriginalName();
    $file->path = $path;
    $file->save();

    return back()->with('success', 'File berhasil diupload!');
}

// 👉 EDIT: tampilkan form edit
public function edit($id)
{
    $file = File::findOrFail($id);
    return view('admin.file.edit', compact('file'));
}

// 👉 UPDATE: simpan perubahan
public function update(Request $request, $id)
{
    $file = File::findOrFail($id);

    $request->validate([
        'file' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
        'name' => 'nullable|string|max:255',
    ]);

    // kalau ganti nama saja
    if ($request->filled('name')) {
        $file->name = $request->name;
    }

    // kalau upload file baru
    if ($request->hasFile('file')) {
        // hapus file lama
        if (\Storage::disk('public')->exists($file->path)) {
            \Storage::disk('public')->delete($file->path);
        }

        // simpan file baru
        $path = $request->file('file')->store('uploads', 'public');
        $file->path = $path;
        $file->name = $request->file('file')->getClientOriginalName();
    }

    $file->save();

    return redirect()->route('file.index')->with('success', 'File berhasil diupdate!');
}

// hapus file
public function destroy($id)
{
    $file = File::findOrFail($id);

    if (\Storage::disk('public')->exists($file->path)) {
        \Storage::disk('public')->delete($file->path);
    }

    $file->delete();

    return back()->with('success', 'File berhasil dihapus!');
}
}
