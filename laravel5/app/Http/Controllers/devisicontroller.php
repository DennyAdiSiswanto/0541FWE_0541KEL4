<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\devisi;

class devisicontroller extends Controller
{
  public function awal()
    {
      return view('devisi.awal', ['data'=>devisi::all()]);
    }
    public function tambah()
    {
      return view('devisi.tambah');
    }
  public function simpan(Request $input)
  {
     $this->validate($input,[
            'title'=>'required']);

     $devisi = new devisi;
     $devisi->title = $input->title;
     $informasi = $devisi->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
       return redirect('devisi')->with(['informasi'=>$informasi]);
    }
     public function edit($id)
    {
      

        $devisi = devisi::find($id);
        return view('devisi.edit')->with(array('devisi'=>$devisi));
    }
    public function lihat($id)
    {
        $devisi = devisi::find($id);
        return view('devisi.lihat')->with(array('devisi'=>$devisi));
    }
    public function update($id, Request $input)
    {
        $devisi = devisi::find($id);
        $devisi->title = $input->title;
        $informasi = $devisi->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('devisi')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $devisi = devisi::find($id);
        $informasi = $devisi->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('devisi')->with(['informasi'=>$informasi]);
    }

}
