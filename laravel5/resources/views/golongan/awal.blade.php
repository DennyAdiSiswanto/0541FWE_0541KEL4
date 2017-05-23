@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data golongan</strong>
			<a href="{{ url('golongan/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> golongan</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Title</th>
									
							</tr>
						</thead>
						<tbody>
								<?php $x=1;?>
								@foreach ($data as $golongan)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $golongan->title or 'title kosong'}}</td>
									
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('golongan/edit/'.$golongan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('golongan/'.$golongan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('golongan/hapus/'.$golongan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop