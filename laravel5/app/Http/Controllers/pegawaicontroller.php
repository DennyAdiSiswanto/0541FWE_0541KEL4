<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pegawai;
use App\manager;
use App\gaji;
use App\ruang;
use Input;
use redirect;

class pegawaicontroller extends Controller
{
  protected $informasi = 'Berhasil';
  public function awal()
  {
    $semuapegawai = pegawai::all();
    return view('pegawai.awal', compact('semuapegawai'));
  }

  public function tambah()
  {
    $manager=new manager;
    $gaji=new gaji;
    $ruang= new ruang;
    return view('pegawai.tambah',compact('manager','gaji','ruang'));
  }
  public function simpan(Request $input)
  {
    $this->validate($input,[
            'nama'=>'required',
            'ktp'=>'required',
            'alamat'=>'required',
            'manager_id'=>'required',
            'gaji_id'=>'required',
            'ruang_id'=>'required']);

    $pegawai = new pegawai;
    $pegawai->nama = $input->nama;
    $pegawai->ktp = $input->ktp;
    $pegawai->alamat = $input->alamat;
    $pegawai->manager_id = $input->manager_id;
    $pegawai->gaji_id = $input->gaji_id;
    $pegawai->ruang_id = $input->ruang_id;
    $pegawai->save();
          return redirect('pegawai')->with(['informasi' => $this->informasi]);
    }
    public function edit($id)
    {
      /*$this->validate($input,[
            'nama'=>'required',
            'ktp'=>'required',
            'alamat'=>'required',
            'manager_id'=>'required',
            'gaji_id'=>'required',
            'ruang_id'=>'required']);*/
      
      $pegawai = pegawai::find($id);
      
      $manager = new manager;
      $gaji = new gaji;
      $ruang = new ruang;
      return view('pegawai.edit', compact('manager','gaji','ruang','pegawai'));
    }
    public function lihat($id)
    {
      $pegawai = pegawai::find($id);
      return view('pegawai.lihat')->with(array('pegawai' => $pegawai));
    }
    public function update($id, Request $input)
    {
      $pegawai = pegawai::find($id);
      $pegawai->nama = $input->nama;
      $pegawai->ktp = $input->ktp;
      $pegawai->alamat = $input->alamat;
    $pegawai->manager_id = $input->manager_id;
    $pegawai->gaji_id = $input->gaji_id;
    $pegawai->ruang_id = $input->ruang_id;
      $pegawai->save();        
      $informasi = $pegawai->save() ? 'Berhasil' : 'Gagal';

        
        return redirect('pegawai')->with(['informasi' => $informasi]);
      }
      public function hapus($id)
      {
        $pegawai = pegawai::find($id);
        if ($pegawai->delete())
        {
          if ($pegawai->delete()) $this->informasi = 'Berhasil hapus data';
        }
        return redirect('pegawai')->with(['informasi' => $this->informasi]);
        }
  
}
