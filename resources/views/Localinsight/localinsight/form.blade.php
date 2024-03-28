<div class="form-body">
    <div class="row">
		<div class="col-md-12">
    <div class="form-group">
    	{!! Form::label('title', 'Title') !!}
    	    	{!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
</div>

<!--<div class="col-md-12">-->
<!--    <div class="form-group">-->
<!--    	{!! Form::label('image', 'Image') !!}-->
<!--    	    	{!! Form::text('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}-->
<!--    </div>-->
<!--</div>-->

<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        <input class="form-control dropify" name="image" type="file" id="image" {{ ($localinsight->image != '') ? "data-default-file = /$localinsight->image" : ''}} {{ ($localinsight->image == '') ? "required" : ''}} value="{{$localinsight->image}}">
    </div>
</div>

</div>
</div>
<div class="form-actions text-right pb-0">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
