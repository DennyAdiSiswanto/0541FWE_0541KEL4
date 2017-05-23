<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kerja;
use App\pegawai;
use App\cuti;

class kerjacontroller extends Controller
{
  protected $guarded =['id'];
   
   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuakerja = kerja::all();
      return view('kerja.awal', compact('semuakerja'));
   }
   public function tambah()
   {
    $pegawai = new pegawai;
    $cuti = new cuti;
    return view('kerja.tambah', compact('pegawai','cuti'));
   }
   public function simpan(Request $input)
   {
       $this->validate($input,[
            'jam_kerja'=>'required',
            'pegawai_id'=>'required',
            'cuti_id'=>'required']);

   	  $kerja = new kerja;
      $kerja->jam_kerja = $input->jam_kerja;
      $kerja->pegawai_id = $input->pegawai_id;
      $kerja->cuti_id = $input->cuti_id;
      $pegawai = new pegawai;
      $cuti = new cuti;
      $kerja->save();
    return view('kerja.tambah', compact('kerja','pegawai','cuti'));

    $kerja = new kerja($input->only('jam_kerja','cuti_id','pegawai_id','kerja_id'));
    if($kerja->save()) $this->informasi = "Jadwal kerja berhasil disimpan ";
      return redirect('kerja')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $kerja = kerja::find($id);
      return view('kerja.lihat',compact('kerja'));
   }
   public function edit($id)
   {
   
      $kerja = kerja::find($id);

      
      $pegawai = new pegawai;
      $cuti = new cuti;
      return view('kerja.edit',compact('kerja','pegawai','cuti'));
   }
   public function update($id,Request $input)
   {
      $kerja = kerja::find($id);
      $kerja->jam_kerja = $input->jam_kerja;
      $kerja->pegawai_id = $input->pegawai_id;
      $kerja->cuti_id = $input->cuti_id;
      $kerja->save();
      $informasi = $kerja->save() ? 'berhasil' : 'Gagal';

      return redirect('kerja')->with(['informasi' => $informasi]);
   }
   public function hapus($id,Request $input)
   {
      $kerja = kerja::find($id);
      if($kerja->delete()) $this->informasi = "Jadwal kerja berhasil dihapus ";
      return redirect('kerja')->with(['informasi' => $this->informasi]);
   }
}
