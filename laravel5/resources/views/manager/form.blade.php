<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"nama"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ktp"> ktp</label>
		<div class="col-sm-10">
			{!! Form::text('ktp',null,['class'=>'form-control','id'=>'ktp','placeholder'=>"ktp"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="alamat"> alamat</label>
		<div class="col-sm-10">
			{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"alamat"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> username</label>
		<div class="col-sm-10">
			{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> password</label>
		<div class="col-sm-10">
			{!! Form::password('password',['class'=>'form-control','placeholder'=>"password"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> devisi</label>
		<div class="col-sm-10">
			{!! Form::select('devisi_id',$devisi->lists('title','id'),null,['class'=>'form-control','id'=>'devisi_id','placeholder'=>"devisi"]) !!}
		</div>
	</div>