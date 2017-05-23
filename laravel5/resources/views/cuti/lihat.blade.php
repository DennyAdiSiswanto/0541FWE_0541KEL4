@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('cuti') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data cuti</strong>
			</div>
			<table class="table">
				<tr>
						<td>total_hari</td>
						<td>:</td>
						<td>{{ $cuti->total_hari }}</td>
				</tr>
								<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$cuti->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$cuti->updated_at}}</td>
				</tr>
		</table>
</div>
@stop