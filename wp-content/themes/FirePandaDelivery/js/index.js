
let city = localStorage.getItem("city");
let restaurantList;
let restaurantListBlock = document.getElementById("list-restaurants-cards");
let startIndex = 0;
let numberItemsDisplayed = 9;

if (city) {

    $.getJSON(url + "/restaurant/only", {city: city}, function(data, status) {

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

    })
}

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
    location.href = "/restaurant?id=" + data.currentTarget.dataset.restaurantId;
}

function search() {
    let searchString = document.getElementById("search-block-eat").value;

    $.getJSON(url + "/restaurant/search", {value: searchString}, data => {

    });
}