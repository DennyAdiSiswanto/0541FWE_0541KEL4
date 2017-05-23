@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data kerja</strong>
			<a href="{{ url('kerja/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> kerja</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No</th>
									<th>jam kerja</th>
									<th>pegawai</th>
									<th>total cuti</th>


							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuakerja as $kerja)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $kerja->jam_kerja or 'jam_kerja kosong'}}</td>
									<td>{{ $kerja->pegawai->nama or 'pegawai kosong'}}</td>
									<td>{{ $kerja->cuti->total_hari or 'total hari kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('kerja/edit/'.$kerja->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('kerja/'.$kerja->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('kerja/hapus/'.$kerja->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop