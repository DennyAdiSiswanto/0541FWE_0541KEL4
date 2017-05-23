<?php
Route::get('/login','Sesicontroller@form');
Route::post('/login','Sesicontroller@validasi');
Route::get('/logout','Sesicontroller@logout');
Route::get('/','Sesicontroller@index');

Route::group(['middleware'=>'AutentikasiUser'],function(){
	
Route::get('pengguna', 'penggunacontroller@awal');
Route::get('pengguna/tambah', 'penggunacontroller@tambah');
Route::get('pengguna/{pengguna}','penggunacontroller@lihat');
Route::post('pengguna/simpan', 'penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}', 'penggunacontroller@update');
Route::get('pengguna/hapus/{pengguna}', 'penggunacontroller@hapus');

Route::get('ruang','ruangcontroller@awal');
Route::get('ruang/tambah','ruangcontroller@tambah');
Route::get('ruang/{ruang}','ruangcontroller@lihat');
Route::post('ruang/simpan','ruangcontroller@simpan');
Route::get('ruang/edit/{ruang}','ruangcontroller@edit');
Route::post('ruang/edit/{ruang}','ruangcontroller@update');
Route::get('ruang/hapus/{ruang}','ruangcontroller@hapus');

Route::get('golongan','golongancontroller@awal');
Route::get('golongan/tambah','golongancontroller@tambah');
Route::get('golongan/{golongan}','golongancontroller@lihat');
Route::post('golongan/simpan','golongancontroller@simpan');
Route::get('golongan/edit/{golongan}','golongancontroller@edit');
Route::post('golongan/edit/{golongan}','golongancontroller@update');
Route::get('golongan/hapus/{golongan}','golongancontroller@hapus');


Route::get('manager','managercontroller@awal');
Route::get('manager/tambah', 'managercontroller@tambah');
Route::get('manager/{manager}', 'managercontroller@lihat');
Route::post('manager/simpan','managercontroller@simpan');
Route::get('manager/edit/{manager}', 'managercontroller@edit');
Route::post('manager/edit/{manager}','managercontroller@update');
Route::get('manager/hapus/{manager}','managercontroller@hapus');

 Route::get('pegawai','pegawaicontroller@awal');
 Route::get('pegawai/tambah', 'pegawaicontroller@tambah');
 Route::get('pegawai/{pegawai}', 'pegawaicontroller@lihat');
 Route::post('pegawai/simpan','pegawaicontroller@simpan');
 Route::get('pegawai/edit/{pegawai}','pegawaicontroller@edit');
 Route::post('pegawai/edit/{pegawai}','pegawaicontroller@update');
 Route::get('pegawai/hapus/{pegawai}','pegawaicontroller@hapus');

Route::get('devisi','devisicontroller@awal');
Route::get('devisi/tambah','devisicontroller@tambah');
Route::get('devisi/{devisi}','devisicontroller@lihat');
Route::post('devisi/simpan','devisicontroller@simpan');
Route::get('devisi/edit/{devisi}','devisicontroller@edit');
Route::post('devisi/edit/{devisi}','devisicontroller@update');
Route::get('devisi/hapus/{devisi}','devisicontroller@hapus');

 Route::get('kerja','kerjacontroller@awal');
 Route::get('kerja/tambah','kerjacontroller@tambah');
 Route::get('kerja/{kerja}','kerjacontroller@lihat');
 Route::post('kerja/simpan','kerjacontroller@simpan');
 Route::get('kerja/edit/{kerja}','kerjacontroller@edit');
 Route::post('kerja/edit/{kerja}','kerjacontroller@update');
 Route::get('kerja/hapus/{kerja}','kerjacontroller@hapus');

Route::get('cuti','cuticontroller@awal');
Route::get('cuti/tambah','cuticontroller@tambah');
Route::get('cuti/{cuti}','cuticontroller@lihat');
Route::post('cuti/simpan','cuticontroller@simpan');
Route::get('cuti/edit/{cuti}','cuticontroller@edit');
Route::post('cuti/edit/{cuti}','cuticontroller@update');
Route::get('cuti/hapus/{cuti}','cuticontroller@hapus');

Route::get('gaji','gajicontroller@awal');
Route::get('gaji/tambah','gajicontroller@tambah');
Route::get('gaji/{gaji}','gajicontroller@lihat');
Route::post('gaji/simpan','gajicontroller@simpan');
Route::get('gaji/edit/{gaji}','gajicontroller@edit');
Route::post('gaji/edit/{gaji}','gajicontroller@update');
Route::get('gaji/hapus/{gaji}','gajicontroller@hapus');

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('master');
    // return \App\dosen_matakuliah::whereHas('manager',function($query)
    // {
    // 	$query->where('Nama','like','%s%');
    // })->with('manager')->groupBy('Dosen_id')->get();

});

// Route::get('/',function(Illuminate\Http\Request $request){
// 	echo "ini adalah request dari get". $request->nama;
// });

// use Illuminate\Http\Request;
//  Route::get('/',function ()
//  {
//  	echo Form::open(['url'=>'/']).
//  	 	Form::label('nama').
//  	 	Form::text('nama',null).
//  	 	Form::submit('kirim').
//  	 	Form::close();
//  });

// Route::post('/',function (Request $request){
// 	echo "hasil dari form input tadi nama : " .$request->nama;
// });

// Route::get('/edit', function () {
//     return view('edit');
// });





/*Route::get('hello-world', function(){
	return 'Hello World';
});

Route::get('ujiHas','RelationshipReborncontroller@ujiHas');

Route::get('ujiDoesntHave','RelationshipReborncontroller@ujiDoesntHave');


// Route::get('pengguna/{pengguna}', function($pengguna){ //pake parameter ()karena sdh dideklarasikan
// 	return "Hello World dari pengguna $pengguna";
// });


Route::get('kelasd2/framework/{mhs?}', function($mhs="Anonim"){ //parameter boleh dikasih parameter/engga karena menggunakan tanya?
	return "Selamat datang $mhs";
});
// Route::get('pengguna', 'Penggunacontroller@awal');
// Route::get('pengguna/tambah', 'Penggunacontroller@tambah');
// Route::get('pengguna/{pengguna}','Penggunacontroller@lihat');
// Route::post('pengguna/simpan', 'Penggunacontroller@simpan');
// Route::get('pengguna/edit/{pengguna}', 'Penggunacontroller@edit');
// Route::post('pengguna/edit/{pengguna}', 'Penggunacontroller@update');
// Route::get('pengguna/hapus/{pengguna}', 'Penggunacontroller@hapus');



 

*/