<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
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


<div class="form-group {!! $errors->has('country_id') ? 'has-error' : '' !!}">
	{!! Form::label('country_id', 'Country Id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @if ( 'number' == 'checkbox' )
            {!! Form::hidden('is_visible', 0) !!}
    	    {!! Form::number('country_id', 1, ['class' => 'form-control']) !!}
        @else
            {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
        @endif
    	{!! $errors->first('country_id', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<div class="form-group {!! $errors->has('is_visible') ? 'has-error' : '' !!}">
	{!! Form::label('is_visible', 'Is Visible', ['class' => 'col-sm-2 control-label']) !!}
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
