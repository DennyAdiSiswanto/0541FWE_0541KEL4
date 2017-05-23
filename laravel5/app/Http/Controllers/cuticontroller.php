<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\cuti;

class cuticontroller extends Controller
{
  public function awal()
    {
      return view('cuti.awal', ['data'=>cuti::all()]);
    }
    public function tambah()
    {
      return view('cuti.tambah');
    }
  public function simpan(Request $input)
  {
     $this->validate($input,[
            'total_hari'=>'required']);

     $cuti = new cuti;
     $cuti->total_hari = $input->total_hari;
     $informasi = $cuti->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
       return redirect('cuti')->with(['informasi'=>$informasi]);
    }
     public function edit($id)
    {
      

        $cuti = cuti::find($id);
        return view('cuti.edit')->with(array('cuti'=>$cuti));
    }
    public function lihat($id)
    {
        $cuti = cuti::find($id);
        return view('cuti.lihat')->with(array('cuti'=>$cuti));
    }
    public function update($id, Request $input)
    {
        $cuti = cuti::find($id);
        $cuti->total_hari = $input->total_hari;
        $informasi = $cuti->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('cuti')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $cuti = cuti::find($id);
        $informasi = $cuti->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('cuti')->with(['informasi'=>$informasi]);
    }

}
