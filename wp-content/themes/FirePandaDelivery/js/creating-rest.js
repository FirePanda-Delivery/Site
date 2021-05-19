
// Превью категории в конструкторе в информации
jQuery(document).ready(function($) {

    var maxFileSize = 2 * 1024 * 1024; // (байт) Максимальный размер файла (2мб)
    var queue = {};
    var form = $('form#uploadImages');
    var imagesList = $('#uploadImagesList');

    var itemPreviewTemplate = imagesList.find('.item.template').clone();
    itemPreviewTemplate.removeClass('template');
    imagesList.find('.item.template').remove();


    $('#uploadfile').on('change', function() {
        var files = this.files;

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            if (!file.type.match(/image\/(jpeg|jpg|png|gif)/)) {
                alert('Фотография должна быть в формате jpg, png или gif');
                continue;
            }

            if (file.size > maxFileSize) {
                alert('Размер фотографии не должен превышать 2 Мб');
                continue;
            }

            preview(files[i]);
        }

        this.value = '';
    });

    // Создание превью
    function preview(file) {
        var reader = new FileReader();
        reader.addEventListener('load', function(event) {
            var img = document.createElement('img');

            var itemPreview = itemPreviewTemplate.clone();

            itemPreview.find('.img-wrap img').attr('src', event.target.result);
            itemPreview.data('id', file.name);

            imagesList.append(itemPreview);

            queue[file.name] = file;

        });
        reader.readAsDataURL(file);
    }

    // Удаление фотографий
    imagesList.on('click', '.delete-link', function() {
        var item = $(this).closest('.item'),
            id = item.data('id');

        delete queue[id];

        item.remove();
    });


    // Отправка формы
    form.on('submit', function(event) {

        var formData = new FormData(this);

        for (var id in queue) {
            formData.append('images[]', queue[id]);
        }

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            async: true,
            success: function(res) {
                alert(res)
            },
            cache: false,
            contentType: false,
            processData: false
        });

        return false;
    });

});

// Превью категории в конструкторе в информации
jQuery(document).ready(function($) {

    var maxFileSize = 2 * 1024 * 1024; // (байт) Максимальный размер файла (2мб)
    var queue = {};
    var form = $('form#uploadImages');
    var imagesList = $('#uploadImagesProd');

    var itemPreviewTemplate = imagesList.find('.item.template').clone();
    itemPreviewTemplate.removeClass('template');
    imagesList.find('.item.template').remove();


    $('#ImgProd').on('change', function() {
        var files = this.files;

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            if (!file.type.match(/image\/(jpeg|jpg|png|gif)/)) {
                alert('Фотография должна быть в формате jpg, png или gif');
                continue;
            }

            if (file.size > maxFileSize) {
                alert('Размер фотографии не должен превышать 2 Мб');
                continue;
            }

            preview(files[i]);
        }

        this.value = '';
    });

    // Создание превью
    function preview(file) {
        var reader = new FileReader();
        reader.addEventListener('load', function(event) {
            var img = document.createElement('img');

            var itemPreview = itemPreviewTemplate.clone();

            itemPreview.find('.img-wrap img').attr('src', event.target.result);
            itemPreview.data('id', file.name);

            imagesList.append(itemPreview);

            queue[file.name] = file;

        });
        reader.readAsDataURL(file);
    }

    // Удаление фотографий
    imagesList.on('click', '.delete-link', function() {
        var item = $(this).closest('.item'),
            id = item.data('id');

        delete queue[id];

        item.remove();
    });


    // Отправка формы
    form.on('submit', function(event) {

        var formData = new FormData(this);

        for (var id in queue) {
            formData.append('images[]', queue[id]);
        }

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            async: true,
            success: function(res) {
                alert(res)
            },
            cache: false,
            contentType: false,
            processData: false
        });

        return false;
    });

});

// модальное окно в конструкторе ресторана Удаление категории
var b = document.getElementById('overlay-cat');
function swa(){
	b.style.visibility = 'visible';
	b.style.opacity = '1';
	b.style.transition = 'all 0.3s ease-out 0s';
}
function swa2(){
	b.style.visibility = 'hidden';
	b.style.opacity = '0';
}

// модальное окно в конструкторе ресторана Удаление товара
var c = document.getElementById('overlayProd');
function deleteProd(){
	c.style.visibility = 'visible';
	c.style.opacity = '1';
	c.style.transition = 'all 0.3s ease-out 0s';
}
function deleteProd2(){
	c.style.visibility = 'hidden';
	c.style.opacity = '0';
}
// модальное окно в конструкторе ресторана Выход
var c = document.getElementById('overlayExit');
function deleteExite(){
	c.style.visibility = 'visible';
	c.style.opacity = '1';
	c.style.transition = 'all 0.3s ease-out 0s';
}
function deleteExite2(){
	c.style.visibility = 'hidden';
	c.style.opacity = '0';
}

// перключение блоков
let infoRest = document.getElementById("infoRestBlock");
let infoCat = document.getElementById("infoRestCategory");
let infoProd = document.getElementById("infoRestProduct");
let infoOrd = document.getElementById("infoRestOrders");

let btnRest = document.getElementById("navRestaurant");
let btnCat = document.getElementById("navCategory");
let btnProd = document.getElementById("navProducts");
let btnOrd = document.getElementById("navOrders");

btnRest.addEventListener('click', event => {
    event.currentTarget.style.background = "var(--white)";
    event.currentTarget.style.color = "var(--light-black)";
    btnCat.style = "";
    btnProd.style = "";
    btnOrd.style = "";
    infoRest.style.display = 'block';
    infoCat.style.display = 'none';
    infoProd.style.display = 'none';
    infoOrd.style.display = 'none'; 
});
btnCat.addEventListener('click', event => {
    event.currentTarget.style.background = "var(--white)";
    event.currentTarget.style.color = "var(--light-black)";
    btnRest.style = "";
    btnProd.style = "";
    btnOrd.style = "";
    infoRest.style.display = 'none';
    infoCat.style.display = 'block';
    infoProd.style.display = 'none';
    infoOrd.style.display = 'none'; 
});
btnProd.addEventListener('click', event => {
    event.currentTarget.style.background = "var(--white)";
    event.currentTarget.style.color = "var(--light-black)";
    btnRest.style = "";
    btnCat.style = "";
    btnOrd.style = "";
    infoRest.style.display = 'none';
    infoCat.style.display = 'none';
    infoProd.style.display = 'block';
    infoOrd.style.display = 'none'; 
});
btnOrd.addEventListener('click', event => {
    event.currentTarget.style.background = "var(--white)";
    event.currentTarget.style.color = "var(--light-black)";
    btnRest.style = "";
    btnCat.style = "";
    btnProd.style = "";
    infoOrd.style.display = 'block'; 
    infoRest.style.display = 'none';
    infoCat.style.display = 'none';
    infoProd.style.display = 'none';
});