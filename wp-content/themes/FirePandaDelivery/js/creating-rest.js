
//Открытие-скрытие блока с категориями
document.getElementById('rest-category-btn').addEventListener("click", hiddenCloseclick);
function hiddenCloseclick() {
let x = document.getElementById('hidden-rest-category');
  if (x.style.display == "none"){
  x.style.display = "block";
  } else {
 x.style.display = "none"}
};

// Превью категории в конструкторе
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

// модальное окно в конструкторе ресторана
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

