@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('golongan') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data golongan</strong>
			</div>
			<table class="table">
				<tr>
						<td>Title</td>
						<td>:</td>
						<td>{{ $golongan->title }}</td>
				</tr>
				

				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$golongan->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$golongan->updated_at}}</td>
				</tr>
		</table>
</div>
@stop