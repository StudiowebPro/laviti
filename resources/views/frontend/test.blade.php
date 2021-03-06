{{--@extends('frontend.layouts.testlay')--}}
@extends('backend.layouts.app')

@section('after-styles')
@endsection

@section('content')
{{--    {{ Form::open(['route' => 'frontend.formatest', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}--}}
    {{--{{ Form::open(['route' => 'frontend.macros', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}--}}
        {{--<div class="pull-right">--}}
            {{--{{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-xs']) }}--}}
        {{--</div><!--pull-right-->--}}
    {{--{{ Form::close() }}--}}


<div class="container">
        <div class="row">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main-tab" data-toggle="tab">{{ trans('labels.backend.showcase.product.tabmain') }}</a></li>
            <li><a href="#img-tab" data-toggle="tab">{{ trans('labels.backend.showcase.product.tabimg') }}</a></li>
            <li><a href="#seo-tab" data-toggle="tab">{{ trans('labels.backend.showcase.product.tabseo') }}</a></li>
            <li><a href="#other-tab" data-toggle="tab">{{ trans('labels.backend.showcase.product.tabother') }}</a></li>
        </ul>
        <div class="tab-content" style="margin-top: 10px;">
            <!-- Filesystem tab -->

            <div class="tab-pane active" id="main-tab">
                <div class="well well-lg auto-tip" id="drop-box" data-title="... or just drop it here" data-placement="bottom">
                    sdfsdfsd dfsdfsdf saddsadsda fdfffffffff
                </div>
            </div>
            <div class="tab-pane" id="img-tab">
                <div class="well well-lg auto-tip" id="drop-box" data-title="... or just drop it here" data-placement="bottom">
                    <div id="img-container">
                        <ul id="img-list" class=""></ul>
                    </div>
                    <input id="file-field" type="file" multiple="multiple" accept=".txt,image/*" style = "visibility: hidden;">
                    <label for="file-field" class="btn btn-default">Выберите файл(ы)</label>
                </div>
            </div>
        </div>
    </div>
</div>

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
            var col1 = $('<div/>').addClass('col-xs-12 col-sm-4').appendTo(row);
            var img = $('<img/>').appendTo(col1);
            // и progress bar
            $('<div/>').attr('id','prg-'+cntImg).addClass('progress').text('0%').appendTo(col1);

            // Во вторую колонку
            var col2 = $('<div/>').addClass('col-xs-12 col-sm-8').appendTo(row);
            //  название
            $('<div/>').text(file.name).appendTo(col2);
            // создается массив скрытых input-полей NewImgNames, в котором будут имена всех загружаемых
            // изображений. Этот массив уйдёт вместе с остальными данными при отправке основной формы.
            $('<input name="NewImgNames[]" type="hidden" value=' + file.name + '/>').appendTo(col2);
            // массив для полей Alt. Не скрытые, можно менять. По умолчанию в поле название файла
             $('<input name="NewImgAlts[]" type="text" value=' + file.name + '/><br/>').appendTo(col2);
            // массив для полей Title. Не скрытые, можно менять. По умолчанию в поле название файла
             $('<input name="NewImgTitles[]" type="text" value=' + file.name + '/>').appendTo(col2);
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
{{--    {{ Html::script('js/backend/access/products/uploadPic.js') }}--}}
@endsection