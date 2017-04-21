@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.access.products.management') . ' | ' . trans('labels.backend.access.products.create'))

@section('after-styles')
    {{--<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />--}}
    {{ Html::style('css/backend/products/create.css') }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.products.management') }}
        <small>{{ trans('labels.backend.access.products.create') }}</small>

    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.access.product.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.products.createtitle') }}</h3>
            <div class="box-tools pull-right">
                @include('backend.access.includes.partials.user-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->


        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#main-tab" data-toggle="tab">{{ trans('labels.backend.access.products.tabmain') }}</a></li>
                    <li><a href="#img-tab" data-toggle="tab">{{ trans('labels.backend.access.products.tabimg') }}</a></li>
                    <li><a href="#seo-tab" data-toggle="tab">{{ trans('labels.backend.access.products.tabseo') }}</a></li>
                    <li><a href="#descriptions-tab" data-toggle="tab">{{ trans('labels.backend.access.products.tabdescription') }}</a></li>
                    <li><a href="#other-tab" data-toggle="tab">{{ trans('labels.backend.access.products.tabother') }}</a></li>
                </ul>
                <div class="tab-content" style="margin-top: 10px;">
                    <!-- Filesystem tab -->

                    <div class="tab-pane active" id="main-tab">
                            {{-- Наименование --}}
                            <div class="box-body">
                            <div class="row">
                                <div class="form-group">
                                    {{ Form::label('name', trans('validation.attributes.backend.access.products.name'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-8">
                                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.name')]) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Цена--}}
                                <div class="form-group">
                                    {{ Form::label('price', trans('validation.attributes.backend.access.products.price'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.price')]) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Категория--}}
                                <div class="form-group">
                                    {{ Form::label('category_id', trans('validation.attributes.backend.access.products.category'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::text('category_id', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.category')]) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Брэнд--}}
                                <div class="form-group">
                                    {{ Form::label('brand_id', trans('validation.attributes.backend.access.products.brand'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::text('brand_id', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.brand')]) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Страна производства--}}
                                <div class="form-group">
                                    {{ Form::label('country_id', trans('validation.attributes.backend.access.products.country'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::text('country_id', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.country')]) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Материал--}}
                                <div class="form-group">
                                    {{ Form::label('material', trans('validation.attributes.backend.access.products.material'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::text('material', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.material')]) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Коллекция --}}
                                <div class="form-group">
                                    {{ Form::label('collection_id', trans('validation.attributes.backend.access.products.collection_id'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::text('collection_id', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.collection_id')]) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Показать коллекцию--}}
                                <div class="form-group">
                                    {{ Form::label('is_collection_visible', trans('validation.attributes.backend.access.products.is_collection_visible'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::checkbox('is_collection_visible', '1', false) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Доступен ли товар (не путать с видимостью. Товар может быть показан, но не доступен и наоборот)--}}
                                <div class="form-group">
                                    {{ Form::label('is_available', trans('validation.attributes.backend.access.products.is_available'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::checkbox('is_available', '1', true) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                                {{--Видим--}}
                                <div class="form-group">
                                    {{ Form::label('is_visible', trans('validation.attributes.backend.access.products.is_visible'), ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-10">
                                        {{ Form::checkbox('is_visible', '1', true) }}
                                    </div><!--col-lg-10-->
                                </div><!--form control-->
                            </div>
                            </div>
                    </div>
                    <div class="tab-pane" id="img-tab">
                        <div class="box-body">
                            <div id="img-container">
                                <ul id="img-list" class=""></ul>
                            </div>
                            <input id="file-field" type="file" multiple="multiple" accept=".txt,image/*" style = "visibility: hidden;">
                            <label for="file-field" class="btn btn-default">Выберите файл(ы)</label>
                        </div>
                    </div>
                    <div class="tab-pane" id="seo-tab">
                        <div class="box-body">

                            {{--Title страницы (Важно для СЕО)--}}
                            <div class="form-group">
                                {{ Form::label('seo_title', trans('validation.attributes.backend.access.products.seo_title'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('seo_title', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.seo_title')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Ключевые слова (Важно для СЕО)--}}
                            <div class="form-group">
                                {{ Form::label('seo_keywords', trans('validation.attributes.backend.access.products.seo_keywords'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('seo_keywords', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.seo_keywords')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Описание (Важно для СЕО)--}}
                            <div class="form-group">
                                {{ Form::label('seo_description', trans('validation.attributes.backend.access.products.seo_description'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('seo_description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.seo_description')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                        </div>
                    </div>

                    <div class="tab-pane" id="descriptions-tab">
                        <div class="box-body">
                            {{--Краткое описание (для категории по карточкам) --}}
                            <div class="form-group">
                                {{ Form::label('mini_description', trans('validation.attributes.backend.access.products.mini_description'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::textarea('mini_description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.mini_description')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->
                            {{--Промежуточное описание (при показе в категориях в виде списка)--}}
                            <div class="form-group">
                                {{ Form::label('middle_description', trans('validation.attributes.backend.access.products.middle_description'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::textarea('middle_description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.middle_description')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->
                            {{--Полное описание--}}
                            <div class="form-group">
                                {{ Form::label('description', trans('validation.attributes.backend.access.products.description'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.description')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->
                        </div>
                    </div>

                    <div class="tab-pane" id="other-tab">
                        <div class="box-body">
                            {{--Показать на главной--}}
                            <div class="form-group">
                                {{ Form::label('is_homepage', trans('validation.attributes.backend.access.products.is_homepage'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::checkbox('is_homepage', '1', false) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->


                            {{--Показать в новинках--}}
                            <div class="form-group">
                                {{ Form::label('is_new', trans('validation.attributes.backend.access.products.is_new'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::checkbox('is_new', '1', false) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Показать в распродажах--}}
                            <div class="form-group">
                                {{ Form::label('is_sale', trans('validation.attributes.backend.access.products.is_sale'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::checkbox('is_sale', '1', false) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Цена на распродаже--}}
                            <div class="form-group">
                                {{ Form::label('price_sale', trans('validation.attributes.backend.access.products.price_sale'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('price_sale', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.price_sale')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Участник акции--}}
                            <div class="form-group">
                                {{ Form::label('is_action', trans('validation.attributes.backend.access.products.is_action'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::checkbox('is_action', '1', false) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Цена по акции--}}
                            <div class="form-group">
                                {{ Form::label('price_sale', trans('validation.attributes.backend.access.products.price_sale'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('price_sale', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.price_sale')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Начислять бонус за покупку--}}
                            <div class="form-group">
                                {{ Form::label('is_bonus', trans('validation.attributes.backend.access.products.is_bonus'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::checkbox('is_bonus', '1', false) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Сумма бонуса--}}
                            <div class="form-group">
                                {{ Form::label('sum_bonus', trans('validation.attributes.backend.access.products.sum_bonus'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('sum_bonus', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.sum_bonus')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Акция со скидками --}}
                            <div class="form-group">
                                {{ Form::label('action_id', trans('validation.attributes.backend.access.products.action_id'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('action_id', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.action_id')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Акция с бонусами --}}
                            <div class="form-group">
                                {{ Form::label('bonusaction_id', trans('validation.attributes.backend.access.products.bonusaction_id'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::text('bonusaction_id', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.bonusaction_id')]) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->

                            {{--Лидер продаж--}}
                            <div class="form-group">
                                {{ Form::label('is_leader', trans('validation.attributes.backend.access.products.is_leader'), ['class' => 'col-lg-2 control-label']) }}
                                <div class="col-lg-10">
                                    {{ Form::checkbox('is_leader', '1', false) }}
                                </div><!--col-lg-10-->
                            </div><!--form control-->


                        </div>
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
                {{ link_to_route('admin.access.user.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->

    {{ Form::close() }}

@endsection
@section('after-scripts')
    {{--{{ Html::script('js/backend/access/users/script.js') }}--}}
    {{--<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>--}}
    {{--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>--}}
    {{--{{ Html::script('js/backend/access/products/ajaxupload35.js') }}--}}

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

        /**
         * Created by OldDev on 21.04.2017.
         */

        /*
         * Основные переменные (Лучше их задавать на странице, куда подключаем скрипт).
         */
        // // Стандарный input для файлов
        // var fileInput = $('#file-field');
        // // ul-список, содержащий миниатюрки выбранных файлов
        // var imgList = $('ul#img-list');
        // // Контейнер, куда можно помещать файлы методом drag and drop
        // var dropBox = $('#img-container');
        // // счетчик фото для формирования id
        // var cntImg = 0;
        // // Имя формы, передаваемой в асинхронном запросе
        // var ajaxFormName = "photo";
        // var control = document.getElementById("file-field");

        /*
         *   Основной обработчик.
         *   Когда происходит изменение элементов управления, значит появились новые файлы.
         *   Добавляем слушатель события изменения input
         * */
        control.addEventListener("change", function(event) {
            var i = 0,
                files = control.files,
                len = files.length;
            for (; i < len; i++) {
                cntImg++;
                displayFile(files[i],i);
            }
        }, false);

        /*
         *  Асинхронная отправка файла
         */
        function sendFile(file,i) {
            var form = new FormData();
            form.append(ajaxFormName, file);
            var xhr = new XMLHttpRequest();
            // Индикация прогресса отправки
            xhr.upload.addEventListener("progress", function(e) {
                if (e.lengthComputable) {
                    var progress = (e.loaded * 100) / e.total;
                    /* ... обновляем инфу о процессе загрузки ... */
                    $( '#prg-'+i ).text(progress);
                }
            }, false);
            // Отправка файла
            xhr.onload = function() {
                console.log("Отправка завершена");
            };
            xhr.open("post", "/frmt/2", true);
            xhr.send(form);
        }

        /*
         *  Создание и отображение миниатюры
         */
        function displayFile(file,i) {
            if (!file.type.match(/image.*/)) {
                // Отсеиваем не картинки
                return true;
            }

            // а также создаем ему свойство file, куда помещаем объект File (при загрузке понадобится)
            // кроме того, создается массив скрытых input-полей NewImgNames, в котором будут имена всех загружаемых
            // изображений. Этот массив уйдёт вместе с остальными данными при отправке основной формы.

            // Создаем элемент li с уникальным ID
            var li = $('<li id=liImg-' + cntImg + '/>').appendTo(imgList);
            // в нем делаем контейнер для аккуратной верстки инфо о картинке.
            var row = $('<div/>').addClass('row').appendTo(li);
            // В первую колонку ставим миниатюру
            var col1 = $('<div/>').addClass('col-xs-12 col-sm-2').appendTo(row);
            var img = $('<img/>').appendTo(col1);
            // и progress bar
            $('<div/>').attr('id','prg-'+cntImg).addClass('progress').text('0%').appendTo(col1);

            // Во второй колонке
            var col2 = $('<div/>').addClass('col-xs-12 col-sm-10').appendTo(row);
            // создается массив скрытых input-полей NewImgNames, в котором будут имена всех загружаемых
            // изображений. Этот массив уйдёт вместе с остальными данными при отправке основной формы.
            var col2row1 = $('<div/>').addClass('row').appendTo(col2);
            $('<input name="NewImgNames[]" type="hidden" value=' + file.name + '/>').appendTo(col2row1);
            // массив для полей Alt. Не скрытые, можно менять. По умолчанию в поле название файла
            $('<label for="NewImgAlts" class="col-lg-2 col-md-2 control-label">Alt (SEO)</label>').appendTo(col2row1);
            $('<div class="col-lg-8 col-md-7"><input class="form-control" name="NewImgAlts[]" type="text" value=' + file.name + '/></div>').appendTo(col2row1);

            // массив для полей Title. Не скрытые, можно менять. По умолчанию в поле название файла
            var col2row2 = $('<div/>').addClass('row').appendTo(col2);
            $('<label for="NewImgTitles" class="col-lg-2 col-md-2 control-label">Title (SEO)</label>').appendTo(col2row2);
            $('<div class="col-lg-8 col-md-7"><input class="form-control" name="NewImgTitles[]" type="text" value=' + file.name + '/></div>').appendTo(col2row2);


            li.get(0).file = file;
            // Кнопка для удаления ненужного изображения
            $('<div class="btn btn-default delImgBtn"/>').text('Удалить').appendTo(li);
            // Создаем объект FileReader и по завершении чтения файла, отображаем миниатюру и обновляем
            // инфу обо всех файлах
            var reader = new FileReader();
            reader.onload = (function (aImg) {
                return function (e) {
                    aImg.attr('src', e.target.result);
                    aImg.attr('width', 150);
                    /* ... обновляем инфу о выбранных файлах ... */
                };
            })(img);
            reader.readAsDataURL(file);
            sendFile(file,cntImg);
        }

        /*
         *  Обработчик нажатия кнопки удаления.
         */
        $("body").on("click", ".delImgBtn", function () {
            $(this).parent().remove();
        });


        // /* ... можно обрабатывать еще события load и error объекта xhr.upload ... */
        // xhr.onreadystatechange = function () {
        //     if (this.readyState == 4) {
        //         if(this.status == 200) {
        //             /* ... все ок! смотрим в this.responseText ... */
        //             console.log('Всё ок');
        //             console.log(file);
        //         } else {
        //             /* ... ошибка! ... */
        //             console.log('vvvvvvvvvvvvv');
        //         }
        //     }
        // };

    </script>

@endsection
