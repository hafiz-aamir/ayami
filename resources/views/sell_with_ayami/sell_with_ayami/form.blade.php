<div class="form-body">
    <div class="row">
    	<div class="col-md-12">
    <div class="form-group">
    	<label for="receive_a_home" class="col-md-4 control-label">{{ 'Receive A Home' }}</label>
        <input class="form-control" name="receive_a_home" type="text" id="receive_a_home" value="{{ $sell_with_ayami->receive_a_home ?? ''}}" >
    </div>
</div><div class="col-md-12">
    <div class="form-group">
    	<label for="property_type1" class="col-md-4 control-label">{{ 'Property Type1' }}</label>
        <input class="form-control" name="property_type1" type="text" id="property_type1" value="{{ $sell_with_ayami->property_type1 ?? ''}}" >
    </div>
</div><div class="col-md-12">
    <div class="form-group">
    	<label for="unit" class="col-md-4 control-label">{{ 'Unit' }}</label>
        <input class="form-control" name="unit" type="text" id="unit" value="{{ $sell_with_ayami->unit ?? ''}}" >
    </div>
</div><div class="col-md-12">
    <div class="form-group">
    	<label for="property_type2" class="col-md-4 control-label">{{ 'Property Type2' }}</label>
        <input class="form-control" name="property_type2" type="text" id="property_type2" value="{{ $sell_with_ayami->property_type2 ?? ''}}" >
    </div>
</div><div class="col-md-12">
    <div class="form-group">
    	<label for="condition_property" class="col-md-4 control-label">{{ 'Condition Property' }}</label>
        <input class="form-control" name="condition_property" type="text" id="condition_property" value="{{ $sell_with_ayami->condition_property ?? ''}}" >
    </div>
</div><div class="col-md-12">
    <div class="form-group">
    	<label for="property_type3" class="col-md-4 control-label">{{ 'Property Type3' }}</label>
        <input class="form-control" name="property_type3" type="text" id="property_type3" value="{{ $sell_with_ayami->property_type3 ?? ''}}" >
    </div>
</div>
    </div>
</div>
<div class="form-actions text-right pb-0">
    <input class="btn btn-primary" type="submit" value="{{ $submitButtonText ?? 'Create' }}">
</div>
