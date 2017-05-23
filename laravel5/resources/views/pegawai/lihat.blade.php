@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pegawai') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data pegawai</strong>
			</div>
			<table class="table">
				<tr>
						<td>nama</td>
						<td>:</td>
						<td>{{ $pegawai->nama }}</td>
				</tr>
				<tr>
						<td>ktp</td>
						<td>:</td>
						<td>{{ $pegawai->ktp }}</td>
				</tr>

				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $pegawai->alamat }}</td>
				</tr>
				<tr>
						<td>manager</td>
						<td>:</td>
						<td>{{ $pegawai->manager->nama }}</td>
				</tr>
				<tr>
						<td>gaji</td>
						<td>:</td>
						<td>{{ $pegawai->gaji->gaji }}</td>
				</tr>
				<tr>
						<td>ruang</td>
						<td>:</td>
						<td>{{ $pegawai->ruang->title }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pegawai->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pegawai->updated_at}}</td>
				</tr>
		</table>
</div>
@stop