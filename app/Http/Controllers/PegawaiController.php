<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PegawaiController extends Controller
{
    // index view
    public function index()
    {
        // ambil db table pegawai
        // select * from pegawai

        $pegawai = DB::table('pegawai')-> get();
        return view('admin.pegawai.index',['pegawai'=> $pegawai]);
    }

    // add // tambah
    public function tambah(){
        // memanggil tambah
        return view('admin.pegawai.tambah');
    }

    // simpan
    public function store(Request $request){
        // insert data 
        DB::table('pegawai')->insert(
            [
            'pegawai_nama'=> $request->Nama,
            'pegawai_jabatan'=>$request->Jabatan,
            'pegawai_umur'=>$request->Umur,
            'pegawai_alamat'=>$request->Alamat
            ]
            );
    
    //alihkan
    return redirect('/pegawai');}


    // form edit 
public function edit ($id){
    //ambil data dari sql tabel pegawai
    //select * from pegawai where id
    $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->first();
    //view--> form
    return view ('admin.pegawai.edit',['pegawai'=> $pegawai]);
}
    // update
    public function update(Request $request, $id){

//validasi data
$request->validate([
    'Nama'=>'required|string|max:255',
    'Jabatan'=>'required|string|max:255',
    'Umur'=>'required|integer|min:18',
    'Alamat'=>'required|string|max:255'

    ]);
    // update data
    //sql "update from where id
    DB::table('pegawai')->where('pegawai_id',$id)->update(
        [
            'pegawai_nama'=> $request->Nama,
             'pegawai_jabatan'=> $request->Jabatan,
              'pegawai_umur'=> $request->Umur,
               'pegawai_alamat'=> $request->Alamat,
            
        ]
        );

     // redicted halaman utama
        return redirect('/pegawai')->with('success', 'Data pegawai berhasil dihapus');
        }


    //hapus
    public function hapus($id){
        //sql hapus
        DB::table('pegawai')->where('pegawai_id',$id)->delete();

        //redicted halaman utama
        return redirect('/pegawai')->with('success', 'Data pegawai berhasil dihapus');
    }
}