<div class="form-group">
	<label class="col-sm-2 control-label">gaji</label>
	<div class="col-sm-10">
		{!! Form::text('gaji',null,['class'=>'form-control','placeholder'=>"gaji"]) !!}
	</div>
</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" id="golongan_id"> golongan</label>
		<div class="col-sm-10">	
			{!! Form::select('golongan_id',$golongan->lists('title','id'),null,['class'=>'form-control','id'=>'golongan_id','placeholder'=>"golongan"]) !!}
		</div>
	</div>