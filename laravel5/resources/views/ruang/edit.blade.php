@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('ruang') }}">
<i class="fa text-default fa-chevron-left"></i>
</a> Perbarui Data ruang</strong>
	</div>
	{!! Form::model($ruang,['url'=>'ruang/edit/'.$ruang->id,'class'=>'form-horizontal']) !!}
		@include('ruang.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
			<button type="reset" class="btn btn danger"><i class="fa fa-undo"></i> Ulangi</button>
			</div>
			{!! Form::close() !!}
			</div>
			@stop