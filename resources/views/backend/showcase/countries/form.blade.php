<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
	{!! Form::label('name', trans('labels.backend.showcase.country.fields.name'),
	    ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @if ( 'text' == 'checkbox' )
            {!! Form::hidden('is_visible', 0) !!}
    	    {!! Form::text('name', 1, ['class' => 'form-control']) !!}
        @else
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @endif
    	{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<div class="form-group {!! $errors->has('is_visible') ? 'has-error' : '' !!}">
	{!! Form::label('is_visible', trans('labels.backend.showcase.country.fields.is_visible'),
	    ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @if ( 'checkbox' == 'checkbox' )
            {!! Form::hidden('is_visible', 0) !!}
    	    {!! Form::checkbox('is_visible', 1, ['class' => 'form-control']) !!}
        @else
            {!! Form::checkbox('is_visible', null, ['class' => 'form-control']) !!}
        @endif
    	{!! $errors->first('is_visible', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<!-- Submit Field -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

    </div>
</div>
