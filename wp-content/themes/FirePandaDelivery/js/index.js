
let city = localStorage.getItem("city");
let restaurantList;
let restaurantListBlock = document.getElementById("list-restaurants-cards");
let startIndex = 0;
let numberItemsDisplayed = 9;


$.getJSON(url + "/restaurant/only", {city: city ? city : defaultCity}, function(data, status) {

    restaurantList = data;

    if (restaurantList.length > numberItemsDisplayed) {
        restaurantList.slice(startIndex, startIndex+numberItemsDisplayed).forEach(restaurant =>
        restaurantListBlock.appendChild(generateRestaurantCart(restaurant)));

        startIndex += numberItemsDisplayed;
    } else {
        restaurantList.forEach(restaurant =>
            restaurantListBlock.appendChild(generateRestaurantCart(restaurant)));
        document.getElementById("btn-see-more").style.display = "none";
    }

});


let index = 0;

function generateRestaurantCart(data) {

    let cardRestaurant = document.createElement("div");
    cardRestaurant.classList.add("card-restaurant");
    cardRestaurant.id = "cardRestaurant_" + index++;
    cardRestaurant.dataset.restaurantId = data.id;

    let imageDiv = document.createElement("div");
    imageDiv.classList.add("card-restaurant-img");

    let image = document.createElement("img");
    image.src = url + data.img;
    image.alt = "restaurant-image";

    imageDiv.appendChild(image);

    cardRestaurant.appendChild(imageDiv);

    let title = document.createElement("h4");
    title.innerText = data.name;

    cardRestaurant.appendChild(title);

    let specifications = document.createElement("div");
    specifications.classList.add("card-restaurant-specifications");

    let ratingDiv = document.createElement("div");
    ratingDiv.classList.add("card-restaurant-rating");

    let ratingImg = document.createElement("img");
    ratingImg.src = starUrl;

    ratingDiv.appendChild(ratingImg);

    let rating = document.createElement("div");
    rating.classList.add("card-restaurant-rating-number");
    rating.innerText = "5";

    ratingDiv.appendChild(rating);

    specifications.appendChild(ratingDiv);

    let price = document.createElement("div");
    price.classList.add("card-restaurant-price");
    price.innerText = "от " + data.minPrice + " р";

    specifications.appendChild(price);

    let time = document.createElement("div");
    time.classList.add("card-restaurant-time");
    time.innerText = "50-60 мин";
    specifications.appendChild(time);

    cardRestaurant.appendChild(specifications);

    cardRestaurant.addEventListener("click", cartClick);

    return cardRestaurant;
}

function seeMore() {
    if (restaurantList.length - startIndex > numberItemsDisplayed) {
        restaurantList.slice(startIndex, startIndex+numberItemsDisplayed).forEach(restaurant =>
            restaurantListBlock.appendChild(generateRestaurantCart(restaurant))
        );

        startIndex += numberItemsDisplayed;
    } else {
        restaurantList.slice(startIndex).forEach(restaurant =>
            restaurantListBlock.appendChild(generateRestaurantCart(restaurant)));
        document.getElementById("btn-see-more").style.display = "none";
    }
}


function cartClick(data) {
    location.href = "Site/restaurant?id=" + data.currentTarget.dataset.restaurantId;
}

let searchInput = document.getElementById("search-block-eat");
searchInput.addEventListener("input", search);

let searchResult = document.getElementById("searchResult");

function search() {


    let searchString = searchInput.value;

    if (searchString.length > 2) {

        let param = {
            value: searchString,
            city: city? city : defaultCity
        };

        $.getJSON(url + "/restaurant/search", param, data => {

            if (data.length < 1) {
                searchResult.style.display = "";
                searchResult.innerHTML = "<div>нету</div>";
                document.body.addEventListener("click", ()=> {
                    searchResult.style.display = "none";
                    searchInput.value = "";
                    document.body.removeEventListener("click", ()=>{});
                })
                return;
            }

            searchResult.innerHTML = "";

            data.forEach(rest => {
                let restaurant = document.createElement("div");
                restaurant.classList.add("search-food-results-item");

                let restaurantData = document.createElement("div");
                restaurantData.classList.add("search-results-restaurant");

                let restaurantDataImageBlock = document.createElement("div");
                restaurantDataImageBlock.classList.add("search-results-restaurant-img");

                let image = document.createElement("img");
                image.src = url + rest.img;

                let title = document.createElement("div");
                title.classList.add("search-results-restaurant-title");
                title.innerText = rest.name;

                let productList = document.createElement("div");
                productList.classList.add("search-results-product-block");

                restaurantDataImageBlock.appendChild(image);
                restaurantData.appendChild(restaurantDataImageBlock);
                restaurantData.appendChild(title);
                restaurant.appendChild(restaurantData);
                restaurant.dataset.restaurantId = rest.id;
                restaurant.addEventListener("click", cartClick)


                rest.categories.forEach(category => {
                    if (category.name.toUpperCase() !== searchString.toUpperCase()) {
                        category.products.forEach(productData => {
                            if (productData.name.toUpperCase() === searchString.toUpperCase()) {

                                let product = document.createElement("div");
                                product.classList.add("search-results-product");

                                let imageBlock = document.createElement("div");
                                imageBlock.classList.add("search-results-product-img");

                                let img = document.createElement("img");
                                img.src = url + productData.img;

                                let property = document.createElement("div");
                                property.classList.add("search-results-product-property");

                                let title = document.createElement("div");
                                title.classList.add("search-results-product-title");
                                title.innerText = productData.name;

                                let price = document.createElement("div");
                                price.classList.add("search-results-product-price");
                                price.innerHTML += productData.price + " <span>₽</span>";

                                property.appendChild(title);
                                property.appendChild(price);
                                imageBlock.appendChild(img);
                                product.appendChild(imageBlock);
                                product.appendChild(property);
                                productList.appendChild(product);
                            }
                        });
                    }
                });

                restaurant.appendChild(productList);
                searchResult.appendChild(restaurant);

            });
            searchResult.style.display = "";
            document.body.addEventListener("click", ()=> {
                searchResult.style.display = "none";
                searchInput.value = "";
                document.body.removeEventListener("click", ()=>{});
            })

        });



    } else {
        searchResult.style.display = "none";
        searchResult.innerHTML = "";
    }

}



// "Еще" на главной
const btnMore = document.querySelector("#btnMore");
const MoreBlock = document.querySelector('#MoreBlock');

MoreBlock.style.display = 'none';

btnMore.addEventListener('click', event => {
   MoreBlock.style.display = 'block';
});

document.onclick = function(e){
    if ( e.target.id !== 'MoreBlock' && e.target.id !== 'btnMore' ) {
        MoreBlock.style.display = 'none';
    };
};

// Модальное окно авторизации
var b = document.getElementById('LoginModalWindow');
function loginWindow(){
	b.style.visibility = 'visible';
	b.style.opacity = '1';
	b.style.transition = 'all 0.3s ease-out 0s';
}
function loginWindow2(){
	b.style.visibility = 'hidden';
	b.style.opacity = '0';
}


let loginForm = document.querySelector("#loginForm");
let loginForm2 = document.querySelector("#loginForm2");

let loginLinkEnter = document.querySelector("#loginLinkEnter");
let loginLinkRegistr = document.querySelector("#loginLinkRegistr");


loginLinkEnter.addEventListener('click',() => {
   loginForm.style.display = 'none';
   loginForm2.style.display = 'block';
});
loginLinkRegistr.addEventListener('click', () => {
    loginForm.style.display = 'block';
    loginForm2.style.display = 'none';
 });


