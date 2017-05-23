<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\golongan;

class golongancontroller extends Controller
{
  public function awal()
    {
      return view('golongan.awal', ['data'=>golongan::all()]);
    }
    public function tambah()
    {
      return view('golongan.tambah');
    }
  public function simpan(Request $input)
  {
     $this->validate($input,[
            'title'=>'required']);

     $golongan = new golongan;
     $golongan->title = $input->title;
     $informasi = $golongan->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
       return redirect('golongan')->with(['informasi'=>$informasi]);
    }
     public function edit($id)
    {
      

        $golongan = golongan::find($id);
        return view('golongan.edit')->with(array('golongan'=>$golongan));
    }
    public function lihat($id)
    {
        $golongan = golongan::find($id);
        return view('golongan.lihat')->with(array('golongan'=>$golongan));
    }
    public function update($id, Request $input)
    {
        $golongan = golongan::find($id);
        $golongan->title = $input->title;
        $informasi = $golongan->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('golongan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $golongan = golongan::find($id);
        $informasi = $golongan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('golongan')->with(['informasi'=>$informasi]);
    }

}
