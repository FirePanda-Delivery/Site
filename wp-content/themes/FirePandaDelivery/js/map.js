let textInput = document.getElementById('search');
let textInputPopup = document.getElementById('search-block-popup');

textInput.value = defaultCity
//let city;

let address = localStorage.getItem("address");

if (address) {
    textInput.value = address;
}

ymaps.ready(init);

function init() {
    // Создаем выпадающую панель с поисковыми подсказками и прикрепляем ее к
    // HTML-элементу по его id.
    let suggestView1 = new ymaps.SuggestView('search');

    let myPlacemark,
        myMap = new ymaps.Map('map', {
            center: [
                51.660732,
                 39.200265
            ],
            zoom: 15,
            controls: [
                "geolocationControl",
                "searchControl",
                "typeSelector",
                "zoomControl"
            ]

        }, {
            suppressMapOpenBlock: true,
            autoFitToViewport: 'always'
        });

    ymaps.geolocation.get({
        mapStateAutoApply: false
    }).then(function (result) {
        myMap.setCenter(result.geoObjects.get(0).geometry.getCoordinates(), 15);
    });

    // Слушаем клик на карте.
    myMap
        .events
        .add('click', function (e) {
            let coords = e.get('coords');

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
                let firstGeoObject = res
                    .geoObjects
                    .get(0);

                textInputPopup.value = firstGeoObject.getAddressLine();
                city = firstGeoObject.getLocalities();

            });
    }

}
function submitAddress() {

    ymaps
        .geocode(textInputPopup.value)
        .then(function (res) {
            let firstGeoObject = res
                .geoObjects
                .get(0);
            if (!firstGeoObject.getPremiseNumber()) {
                alert("добавить предупреждение о том что это не дом")
            } else {
                textInput.value = firstGeoObject.getAddressLine();
                localStorage.setItem("address", firstGeoObject.getAddressLine());
                localStorage.setItem("city", firstGeoObject.getLocalities());
                localStorage.setItem("coordinates", firstGeoObject.geometry.getCoordinates());
            }

        });
    //
    // localStorage.setItem("address", textInputPopup.value);
    // localStorage.setItem("city", city);
    // textInput.value = textInputPopup.value;

}
// предыдушее значение инпута с адресом
let beforeValue = "";

// слушаем клик и записываем значение
textInput.addEventListener("click", function () {
    if (this.value) {
        beforeValue = this.value;
    }
})

/**
 * слушаем изменение адреса в хедере. Проверяем что это здание и записываем
 */
textInput.addEventListener("change", function () {
    ymaps
        .geocode(this.value)
        .then(function (res) {
            let firstGeoObject = res
                .geoObjects
                .get(0);
            if (!firstGeoObject.getPremiseNumber()) {
                textInput.value = beforeValue;
            } else {
                textInput.value = firstGeoObject.getAddressLine();
                localStorage.setItem("address", firstGeoObject.getAddressLine());
                localStorage.setItem("city", firstGeoObject.getLocalities()[0]);
                localStorage.setItem("coordinates", firstGeoObject.geometry.getCoordinates());
            }

        });
});
