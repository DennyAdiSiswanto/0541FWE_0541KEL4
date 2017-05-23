@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kerja') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data jadwal Mahasiswa</strong>
			</div>
			<table class="table">
				<tr>
						<td>Jam Kerja</td>
						<td>:</td>
						<td>{{ $kerja->jam_kerja }}</td>
				</tr>
				<tr>
						<td>Pegawai</td>
						<td>:</td>
						<td>{{ $kerja->pegawai->nama}}</td>
				</tr>
				<tr>
						<td>Total Cuti</td>
						<td>:</td>
						<td>{{ $kerja->cuti->total_hari}}</td>
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