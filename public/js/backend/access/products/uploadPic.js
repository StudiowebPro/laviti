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
    // помещаем в него название
    $('<div/>').text(file.name).appendTo(li);
    // миниатюру
    var img = $('<img/>').appendTo(li);
    // progress bar
    $('<div/>').attr('id','prg-'+cntImg).addClass('progress').text('0%').appendTo(li);
    // создается массив скрытых input-полей NewImgNames, в котором будут имена всех загружаемых
    // изображений. Этот массив уйдёт вместе с остальными данными при отправке основной формы.
    $('<input name="NewImgNames[]" type="hidden" value=' + file.name + '/>').appendTo(li);
    // массив для полей Alt. Не скрытые, можно менять. По умолчанию в поле название файла
    // $('<input name="NewImgAlts[]" type="text" value=' + file.name + '/>').appendTo(li);
    // массив для полей Title. Не скрытые, можно менять. По умолчанию в поле название файла
    // $('<input name="NewImgTitles[]" type="text" value=' + file.name + '/>').appendTo(li);
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

