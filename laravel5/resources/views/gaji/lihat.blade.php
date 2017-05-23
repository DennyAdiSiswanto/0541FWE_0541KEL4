@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('gaji') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data jadwal Mahasiswa</strong>
			</div>
			<table class="table">
				<tr>
						<td>gaji< /td>
						<td>:</td>
						<td>{{ $gaji->gaji }}</td>
				</tr>
				<tr>
						<td>golongan</td>
						<td>:</td>
						<td>{{ $gaji->golongan->title }}</td>
				</tr>
				
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$gaji->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$gaji->updated_at}}</td>
				</tr>
		</table>
</div>
@stop