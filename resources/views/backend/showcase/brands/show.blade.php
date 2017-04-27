@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @if ( '$INPUT_TYPE$' == 'checkbox' )
            {!! Form::hidden('is_visible', 0) !!}
    	    {!! Form::$INPUT_TYPE$('name', 1, ['class' => 'form-control']) !!}
        @else
            {!! Form::$INPUT_TYPE$('name', null, ['class' => 'form-control']) !!}
        @endif
    	{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<div class="form-group {!! $errors->has('country_id') ? 'has-error' : '' !!}">
	{!! Form::label('country_id', 'Country Id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @if ( '$INPUT_TYPE$' == 'checkbox' )
            {!! Form::hidden('is_visible', 0) !!}
    	    {!! Form::$INPUT_TYPE$('country_id', 1, ['class' => 'form-control']) !!}
        @else
            {!! Form::$INPUT_TYPE$('country_id', null, ['class' => 'form-control']) !!}
        @endif
    	{!! $errors->first('country_id', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<div class="form-group {!! $errors->has('is_visible') ? 'has-error' : '' !!}">
	{!! Form::label('is_visible', 'Is Visible', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @if ( '$INPUT_TYPE$' == 'checkbox' )
            {!! Form::hidden('is_visible', 0) !!}
    	    {!! Form::$INPUT_TYPE$('is_visible', 1, ['class' => 'form-control']) !!}
        @else
            {!! Form::$INPUT_TYPE$('is_visible', null, ['class' => 'form-control']) !!}
        @endif
    	{!! $errors->first('is_visible', '<small class="help-block">:message</small>') !!}
    </div>
</div>

</div>
@endsection
