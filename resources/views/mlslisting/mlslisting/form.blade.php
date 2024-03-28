<div class="form-body">
    <div class="row">
		<div class="col-md-12">
    <div class="form-group">
    	{!! Form::label('name', 'Name') !!}
    	    	{!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
</div>


<div class="col-md-12">
    <div class="form-group">
    	{!! Form::label('location', 'Location') !!}
    	    	{!! Form::text('location', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
</div>


<div class="col-md-12">
    <div class="form-group">
    	{!! Form::label('link', 'Link') !!}
    	{!! Form::text('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
</div>



<!--<div class="col-md-12">-->
<!--    <div class="form-group">-->
<!--    	{!! Form::label('description', 'Description') !!}-->
<!--    	    	{!! Form::text('description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}-->
<!--    </div>-->
<!--</div>-->

<!--<div class="col-md-12">-->
<!--    <div class="form-group">-->
<!--    	{!! Form::label('image', 'Image') !!}-->
<!--    	    	{!! Form::text('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}-->
<!--    </div>-->
<!--</div>-->


 <div class="col-md-12">
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        <input class="form-control dropify" name="image" type="file" id="image" data-default-file = "{{asset($mlslisting->image)}}" value="{{$mlslisting->image}}">
    </div>
</div>


	</div>
</div>
<div class="form-actions text-right pb-0">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
