@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kerja') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data jadwal Mahasiswa</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Mahasiswa</td>
						<td>:</td>
						<td>{{ $kerja->mahasiswa->Nama }}</td>
				</tr>
				<tr>
						<td>NIM Mahasiswa</td>
						<td>:</td>
						<td>{{ $kerja->mahasiswa->NIM }}</td>
				</tr>
				<tr>
						<td>Nama Dosen</td>
						<td>:</td>
						<td>{{ $kerja->dosen_matakuliah->dosenn->Nama }}</td>
				</tr>
				<tr>
						<td>NIP Dosen</td>
						<td>:</td>
						<td>{{ $kerja->dosen_matakuliah->dosenn->NIP }}</td>
				</tr>
				<tr>
						<td>Nama Matakuliah</td>
						<td>:</td>
						<td>{{ $kerja->dosen_matakuliah->matakuliah->Title }}</td>
				</tr>
				<tr>
						<td>Jenis Matakuliah</td>
						<td>:</td>
						<td>{{ $kerja->dosen_matakuliah->matakuliah->Keterangan }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$kerja->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$kerja->updated_at}}</td>
				</tr>
		</table>
</div>
@stop