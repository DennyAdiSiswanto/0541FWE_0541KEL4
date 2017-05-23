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
		<label class="col-sm-2 control-label" id="manager_id"> manager</label>
		<div class="col-sm-10">
			{!! Form::select('manager_id',$manager->lists('nama','id'),null,['class'=>'form-control','id'=>'manager_id','placeholder'=>"manager"]) !!}
		</div>
	</div>	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="gaji_id"> gaji</label>
		<div class="col-sm-10">
			{!! Form::select('gaji_id',$gaji->lists('gaji','id'),null,['class'=>'form-control','id'=>'gaji_id','placeholder'=>"gaji"]) !!}
		</div>
	</div>	
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ruang_id"> ruang</label>
		<div class="col-sm-10">
			{!! Form::select('ruang_id',$ruang->lists('title','id'),null,['class'=>'form-control','id'=>'ruang_id','placeholder'=>"ruang"]) !!}
		</div>
	</div>