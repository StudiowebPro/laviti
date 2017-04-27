@extends ('backend.layouts.app')
@section ('title', trans('labels.backend.showcase.brands.management') . ' | ' . trans('labels.backend.showcase.brands.create'))

@section('after-styles')
    {{ Html::style('css/backend/products/create.css') }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.showcase.brand.management') }}
        <small>{{ trans('labels.backend.showcase.brand.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($brand, ['route' => ['admin.showcase.brand.update', $brand ], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}


    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.showcase.brand.createtitle') }}</h3>
            <div class="box-tools pull-right">
                @include('backend.showcase.brands.brand-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->
        <div class="tab-content" style="margin-top: 10px;">
            <div class="box-body">
                @include('backend.showcase.brands.form')
                <div id="img-container">
                    <ul id="img-list" class="">
                        @if (count($media) > 0)
                            @foreach($media as $mediaItem)
                                {{--// Создаем элемент li с уникальным ID--}}
                                <li id="liImgOld-{{ $mediaItem->id }}" class="liImg oldImg">
                                    {{--// в нем делаем контейнер для аккуратной верстки инфо о картинке.--}}
                                    <div class="row">
                                        {{--// В первую колонку ставим миниатюру--}}
                                        <div class="col-xs-12 col-lg-2">
                                            <img src="{{$mediaItem->getUrl('thumb150')}}" alt="">
                                        </div>
                                        <div class="col-xs-12 col-lg-10">
                                            <div class="row rowtbl">
                                                <input name="oldImgNames[]" type="hidden" value="{{$mediaItem->file_name}}">
                                                {{-- Если пользователь удаляет фото, то с формой уходит пометка об этом. --}}
                                                <input name="oldImgDeleted[]" type="hidden" value="0" class="oldImgDeleted">
                                                <input name="oldImgId[]" type="hidden" value="{{$mediaItem->id}}">
                                                <label for="oldImgAlts" class="col-lg-2 col-md-2 control-label">Alt (SEO)</label>
                                                <div class="col-lg-8 col-md-7"><input class="form-control" name="oldImgAlts[]" type="text" value="{{$mediaItem->getCustomProperty('alt', '')}}"></div>
                                            </div>
                                            <div class="row  rowtbl">
                                                <label for="oldImgTitles" class="col-lg-2 col-md-2 control-label">Title (SEO)</label>
                                                <div class="col-lg-8 col-md-7"><input class="form-control" name="oldImgTitles[]" type="text" value="{{$mediaItem->name}}"></div>
                                            </div>
                                            {{--// Кнопка для удаления ненужного изображения--}}
                                            <div class="btn btn-danger delOldImgBtn">Удалить</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
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
                {{ link_to_route('admin.showcase.brand.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
