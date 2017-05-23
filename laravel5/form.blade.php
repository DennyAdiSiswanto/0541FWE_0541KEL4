<div class="form-group">
	<label class="col-sm-2 control-label">Jam Kerja</label>
	<div class="col-sm-10">
		{!! Form::text('jam_kerja',null,['class'=>'form-control','placeholder'=>"jam kerja"]) !!}
	</div>
</div>

<!-- <div class="form-group">
		<label class="col-sm-2 control-label" id="pegawai_id">pegawai</label>
		<div class="col-sm-10">
			{!! Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control','id'=>'pegawai_id','placeholder'=>"pegawai_id"]) !!}
		</div>
</div>
 -->
	<div class="form-group">
		<label class="col-sm-2 control-label" id="pegawai_id"> pegawai</label>
		<div class="col-sm-10">
			{!! Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control','id'=>'pegawai_id','placeholder'=>"pegawai"]) !!}
		</div>
	</div>
 
<div class="form-group">
		<label class="col-sm-2 control-label" id="cuti_id">cuti</label>
		<div class="col-sm-10">
			{!! Form::select('cuti_id',$cuti->lists('nama','id'),null,['class'=>'form-control','id'=>'cuti_id','placeholder'=>"cuti_id"]) !!}
		</div>
</div>

