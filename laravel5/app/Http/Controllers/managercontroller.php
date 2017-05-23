<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\manager;
use App\pengguna;
use App\devisi;

class managercontroller extends Controller
{ protected $informasi = 'Gagal Melakukan Aksi';
  public function awal()
  {
    $semuamanager = manager::all();
    return view('manager.awal', compact('semuamanager'));
  }
    public function tambah()
    {
      $pengguna=new pengguna;
      $devisi=new devisi;
        return view('manager.tambah',compact('pengguna','devisi'));
         }
  public function simpan(Request $input)
  {
     $this->validate($input,[
            'nama'=>'required',
            'ktp'=>'required',
            'alamat'=>'required',
            'username'=>'required',
            'password'=>'required',
            'devisi_id'=>'required']);

      $pengguna = new pengguna($input->only('username','password'));
      if ($pengguna->save())
      {
        $manager = new manager;
        $manager->nama = $input->nama;
        $manager->ktp = $input->ktp;
        $manager->alamat = $input->alamat;
        $manager->devisi_id = $input->devisi_id;
          if ($pengguna->manager()->save($manager)){
            $this->informasi = 'Berhasil simpan data';
          } 
      return redirect('manager')->with(['informasi' => $this->informasi]);
    }
  }
    public function edit($id){
  

      $manager = manager::find($id);
      $devisi = new devisi;
      return view('manager.edit', compact('manager','devisi'));
    }
    public function lihat($id){
      $manager = manager::find($id);
      
      $devisi = new devisi;
      return view('manager.lihat')->with(array('manager'=>$manager)); 
    }
    public function update($id, Request $input){
      $manager = manager::find($id);
      $manager->nama = $input->nama;
      $manager->ktp = $input->ktp;
      $manager->alamat = $input->alamat;
      $manager->save();
      
        if (!is_null($input->username))
        {
          $pengguna = $manager->pengguna->fill($input->only('username'));
          if (!empty($input->password)) $pengguna->password = $input->password;
          if ($pengguna->save()) $this->informasi = 'Berhasil simpan data';
        }
        else
        {
          $this->informasi = 'Berhasil simpan data';
        }
        
        return redirect('manager')->with(['informasi' => $this->informasi]);
      }
      public function hapus($id) {
        $manager = manager::find($id);
        if ($manager->pengguna()->delete())
        {
          if ($manager->delete()) $this->informasi = 'Berhasil hapus data';
        }
        return redirect('manager')->with(['informasi' => $this->informasi]);
        }
  
}
