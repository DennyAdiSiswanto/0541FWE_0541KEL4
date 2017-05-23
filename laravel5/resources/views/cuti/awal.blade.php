@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data cuti</strong>
			<a href="{{ url('cuti/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> cuti</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>total_hari</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1;?>
								@foreach ($data as $cuti)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $cuti->total_hari or 'total_hari kosong'}}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('cuti/edit/'.$cuti->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" total_hari="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('cuti/'.$cuti->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" total_hari="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('cuti/hapus/'.$cuti->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" total_hari="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop