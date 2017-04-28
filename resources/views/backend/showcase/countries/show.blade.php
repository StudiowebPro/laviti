@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
	{!! Form::label('name', trans('labels.$TRANS_PREFIX$.$MODEL_NAME_CAMEL$.fields.name'),
	    ['class' => 'col-sm-2 control-label']) !!}
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


<div class="form-group {!! $errors->has('is_visible') ? 'has-error' : '' !!}">
	{!! Form::label('is_visible', trans('labels.$TRANS_PREFIX$.$MODEL_NAME_CAMEL$.fields.is_visible'),
	    ['class' => 'col-sm-2 control-label']) !!}
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
