@extends ('backend.layouts.app')
@section ('title', trans('labels.backend.showcase.country.management') . ' | ' . trans('labels.backend.showcase.country.create'))

@section('after-styles')
    {{ Html::style('css/backend/products/create.css') }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.showcase.country.management') }}
        <small>{{ trans('labels.backend.showcase.country.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.showcase.country.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.showcase.country.createtitle') }}</h3>
            <div class="box-tools pull-right">
                @include('backend.showcase.countries.country-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->
        <div class="tab-content" style="margin-top: 10px;">
            <div class="box-body">
                @include('backend.showcase.countries.form')
                <div id="img-container">
                    <ul id="img-list" class=""></ul>
                </div>
                <div class="col-lg-4">
                    <input  id="file-field" type="file" accept=".txt,image/*" style = "visibility: hidden;">
                    <label for="file-field" class="btn btn-block btn-info btn-lg">Добавить фото</label>
                </div>
            </div>
        </div>
    </div>
{{--Главное фото--}}
    {{--<div class="form-group">--}}
    {{--{{ Form::label('main_img', trans('validation.attributes.backend.access.products.main_img'), ['class' => 'col-lg-2 control-label']) }}--}}
    {{--<div class="col-lg-10">--}}
    {{--{{ Form::text('main_img', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.main_img')]) }}--}}
    {{--</div><!--col-lg-10-->--}}
    {{--</div><!--form control-->--}}
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.showcase.country.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div>
            <div class="pull-right">
                {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-xs']) }}
            </div>
            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
    {{ Form::close() }}
@endsection

@section('after-scripts')
    <script>
        // Стандарный input для файлов
        var fileInput = $('#file-field');
        var control = document.getElementById("file-field");
        // ul-список, содержащий миниатюрки выбранных файлов
        var imgList = $('ul#img-list');
        // Контейнер, куда можно помещать файлы методом drag and drop
        var dropBox = $('#img-container');
        // счетчик фото для формирования id
        var cntImg = 0;
        // Имя формы, передаваемой в асинхронном запросе
        var ajaxFormName = "photo";
    </script>
    {{ Html::script('js/backend/common/uploadOnePic.js') }}
@endsection
