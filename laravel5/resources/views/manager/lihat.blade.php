@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('manager') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Manager</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $manager->nama }}</td>
				</tr>
				<tr>
						<td>NIP</td>
						<td>:</td>
						<td>{{ $manager->ktp }}</td>
				</tr>
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $manager->alamat }}</td>
				</tr>
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $manager->pengguna->username }}</td>
				</tr>
				<tr>
						<td>Devisi</td>
						<td>:</td>
						<td>{{ $manager->devisi->title }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$manager->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$manager->updated_at}}</td>
				</tr>
		</table>
</div>
@stop