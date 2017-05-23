@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data pegawai</strong>
			<a href="{{ url('pegawai/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> pegawai</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>nama</th>
									<th>ktp</th>
									<th>alamat</th>
									<th>manager</th>
									<th>gaji</th>
									<th>ruang</th>
									
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuapegawai as $pegawai)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $pegawai->nama or 'nama kosong'}}</td>
									<td>{{ $pegawai->ktp or 'ktp kosong'}}</td>
									<td>{{ $pegawai->alamat or 'alamat kosong'}}</td>
									<td>{{ $pegawai->manager->nama or 'nama kosong'}}</td>
									<td>{{ $pegawai->gaji->gaji or 'gaji kosong'}}</td>
									<td>{{ $pegawai->ruang->title or 'title kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('pegawai/edit/'.$pegawai->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('pegawai/'.$pegawai->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('pegawai/hapus/'.$pegawai->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop