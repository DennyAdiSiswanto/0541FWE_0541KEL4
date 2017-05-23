<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\gaji;
use App\golongan;


class gajicontroller extends Controller
{
 public function awal()
    {
      $semuagaji = gaji::all();
      return view('gaji.awal',compact('semuagaji'));
    }
    public function tambah()
    { 
      $gaji = new gaji;
      $golongan = new golongan;
      return view('gaji.tambah',compact('gaji','golongan'));
    }
  public function simpan(Request $input)
  {
     $this->validate($input,[
            'gaji'=>'required',
            'golongan_id'=>'required']);

     $gaji = new gaji;
     $gaji->gaji = $input->gaji;
     $gaji->golongan_id = $input->golongan_id;
     if($gaji->save()) $this->informasi = "Data Berhasil Disimpan";
        return redirect('gaji')->with(['informasi'=> $this->informasi]);
    }
     public function edit($id)
    {
      

        $gaji = gaji::find($id);
        return view('gaji.edit')->with(array('gaji'=>$gaji));
    }
    public function lihat($id)
    {
        $gaji = gaji::find($id);
        return view('gaji.lihat')->with(array('gaji'=>$gaji));
    }
    public function update($id, Request $input)
    {
        $gaji = gaji::find($id);
        $gaji->gaji = $input->gaji;
        $informasi = $gaji->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('gaji')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $gaji = gaji::find($id);
        $informasi = $gaji->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('gaji')->with(['informasi'=>$informasi]);
    }

}
