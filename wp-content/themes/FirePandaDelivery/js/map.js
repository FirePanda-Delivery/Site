var textInput;
var textInputPopup;

ymaps.ready(init);

function init() {
    // Создаем выпадающую панель с поисковыми подсказками и прикрепляем ее к
    // HTML-элементу по его id.
    var suggestView1 = new ymaps.SuggestView('search');
    var searchControl = new ymaps
        .control
        .SearchControl({
            options: {
                provider: 'yandex#map'
            }
        });

    var myPlacemark,
        myMap = new ymaps.Map('map', {
            center: [
                51.660732,
                 39.200265
            ],
            zoom: 15

        }, {
            suppressMapOpenBlock: true,
            autoFitToViewport: 'always'
        });


    textInput = document.getElementById('search');
    textInputPopup = document.getElementById('search-block-popup');

    // Слушаем клик на карте.
    myMap
        .events
        .add('click', function (e) {
            var coords = e.get('coords');

            // Если метка уже создана – просто передвигаем ее.
            if (myPlacemark) {
                myPlacemark
                    .geometry
                    .setCoordinates(coords // Если нет – создаем.
                    );
            } else {
                myPlacemark = createPlacemark(coords);
                myMap
                    .geoObjects
                    .add(myPlacemark);
                // Слушаем событие окончания перетаскивания на метке.
                myPlacemark
                    .events
                    .add('dragend', function () {
                        getAddress(myPlacemark.geometry.getCoordinates());
                    });
            }
            getAddress(coords);
        });

    // Создание метки.
    function createPlacemark(coords) {
        return new ymaps.Placemark(coords, {
            iconCaption: ''
        }, {
            preset: 'islands#redDotIconWithCaption',
            draggable: true
        });
    }

    // Определяем адрес по координатам (обратное геокодирование).
    function getAddress(coords) {
        ymaps
            .geocode(coords)
            .then(function (res) {
                var firstGeoObject = res
                    .geoObjects
                    .get(0);

                textInputPopup.value = firstGeoObject.getAddressLine();

            });
    }

}
function submitAddress() {
    let date = new Date();
    date.setFullYear(date.getFullYear() + 10);
    document.cookie = "address=" + textInputPopup.value + "; expires=" + date;
    textInput.value = textInputPopup.value;
}

