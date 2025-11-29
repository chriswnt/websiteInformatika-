<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // LIST
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')
            ->select('id', 'nim', 'nama', 'prodi', 'jenis_kelamin', 'angkatan', 'photo')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    // FORM TAMBAH
    public function tambah()
    {
        return view('admin.mahasiswa.tambah');
    }

    // SIMPAN (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'nim'           => 'required|string|max:15|unique:mahasiswa,nim',
            'nama'          => 'required|string|max:100',
            'prodi'         => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|in:Laki-Laki,Perempuan',
            'angkatan'      => 'required|integer',  // ⭐ angkatan
            'photo'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('foto_mahasiswa', 'public');
        }

        DB::table('mahasiswa')->insert([
            'nim'           => $request->nim,
            'nama'          => $request->nama,
            'prodi'         => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'angkatan'      => $request->angkatan,   // ⭐ simpan angkatan
            'photo'         => $photoPath,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')
            ->select('id', 'nim', 'nama', 'prodi', 'jenis_kelamin', 'angkatan', 'photo')
            ->where('id', $id)
            ->first();

        abort_if(!$mahasiswa, 404);

        return view('admin.mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    // UPDATE (EDIT)
    public function update(Request $request, $id)
    {
        $mahasiswa = DB::table('mahasiswa')
            ->select('id', 'nim', 'nama', 'prodi', 'jenis_kelamin', 'angkatan', 'photo')
            ->where('id', $id)
            ->first();

        abort_if(!$mahasiswa, 404);

        // aturan NIM
        $nimRule = 'required|string|max:15';
        if ($request->nim !== $mahasiswa->nim) {
            $nimRule .= '|unique:mahasiswa,nim';
        }

        $request->validate([
            'nim'           => $nimRule,
            'nama'          => 'required|string|max:100',
            'prodi'         => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|in:Laki-Laki,Perempuan',
            'angkatan'      => 'required|integer',  // ⭐ validasi angkatan
            'photo'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'nim'           => $request->nim,
            'nama'          => $request->nama,
            'prodi'         => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'angkatan'      => $request->angkatan,   // ⭐ update angkatan
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('foto_mahasiswa', 'public');
        }

        DB::table('mahasiswa')->where('id', $id)->update($data);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diupdate');
    }

    // HAPUS
    public function hapus($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
