<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruang;

class ruangcontroller extends Controller
{
  public function awal()
    {
      return view('ruang.awal', ['data'=>ruang::all()]);
    }
    public function tambah()
    {
      return view('ruang.tambah');
    }
  public function simpan(Request $input)
  {
    $this->validate($input,[
            'title'=>'required']);

     $ruang = new ruang;
     $ruang->title = $input->title;
     $informasi = $ruang->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
       return redirect('ruang')->with(['informasi'=>$informasi]);
    }
     public function edit($id)
    {
     
        $ruang = ruang::find($id);
        return view('ruang.edit')->with(array('ruang'=>$ruang));
    }
    public function lihat($id)
    {
        $ruang = ruang::find($id);
        return view('ruang.lihat')->with(array('ruang'=>$ruang));
    }
    public function update($id, Request $input)
    {
        $ruang = ruang::find($id);
        $ruang->title = $input->title;
        $informasi = $ruang->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('ruang')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruang = ruang::find($id);
        $informasi = $ruang->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('ruang')->with(['informasi'=>$informasi]);
    }

}
