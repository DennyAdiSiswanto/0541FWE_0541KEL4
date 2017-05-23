@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data manager</strong>
			<a href="{{ url('manager/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> manager</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>nama</th>
									<th>ktp</th>
									<th>alamat</th>
									<th>username</th>
									<th>devisi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuamanager as $manager)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $manager->nama or 'nama kosong'}}</td>
									<td>{{ $manager->ktp or 'ktp kosong'}}</td>
									<td>{{ $manager->alamat or 'alamat kosong'}}</td>
									<td>{{ $manager->pengguna->username or 'username kosong'}}</td>
									<td>{{ $manager->devisi->title or 'devisi kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('manager/edit/'.$manager->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('manager/'.$manager->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('manager/hapus/'.$manager->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop