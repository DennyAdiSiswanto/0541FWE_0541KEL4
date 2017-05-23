@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data devisi</strong>
			<a href="{{ url('devisi/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> devisi devisi</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>Title</th>
									


							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $devisi)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $devisi->title or 'title kosong'}}</td>
<!-- 									<td>{{ $devisi->pegawai->nama or 'pegawai kosong'}}</td>
									<td>{{ $devisi->cuti->total_hari or 'total hari kosong'}}</td> -->
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('devisi/edit/'.$devisi->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('devisi/'.$devisi->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('devisi/hapus/'.$devisi->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop