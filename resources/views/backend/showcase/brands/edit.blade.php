@extends('backend.layouts.app')

@section('content')
<div class="container">

    @include('flash::message')

    {!! Form::model($brand, ['route' => ['brands.update', $brand->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}

        @include('backend.showcase.brands.form')

    {!! Form::close() !!}
</div>
@endsection
