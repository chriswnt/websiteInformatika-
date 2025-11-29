<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // index view
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('admin.pegawai.index', ['pegawai' => $pegawai]);
    }

    // form tambah
    public function tambah()
    {
        return view('admin.pegawai.tambah');
    }

    // simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'jabatan'=> 'required|string|max:255',
            'umur'   => 'required|integer|min:18',
            'alamat' => 'required|string|max:255',
            'photo'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('foto_pegawai', 'public');
        }

        DB::table('pegawai')->insert([
            'pegawai_nama'   => $request->nama,
            'pegawai_jabatan'=> $request->jabatan,
            'pegawai_umur'   => $request->umur,
            'pegawai_alamat' => $request->alamat,
            'photo'          => $photoPath,
        ]);

        return redirect('/pegawai')->with('success', 'Data pegawai berhasil ditambahkan');
    }

    // form edit
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
        return view('admin.pegawai.edit', ['pegawai' => $pegawai]);
    }

    // update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'jabatan'=> 'required|string|max:255',
            'umur'   => 'required|integer|min:18',
            'alamat' => 'required|string|max:255',
            'photo'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'pegawai_nama'   => $request->nama,
            'pegawai_jabatan'=> $request->jabatan,
            'pegawai_umur'   => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('foto_pegawai', 'public');
        }

        DB::table('pegawai')->where('pegawai_id', $id)->update($data);

        return redirect('/pegawai')->with('success', 'Data pegawai berhasil diupdate');
    }

    // hapus & pencarian tetap seperti punyamu tadi...
}
