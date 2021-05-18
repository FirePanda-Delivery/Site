
const restaurantId = new URLSearchParams(window.location.search).get("id");

$.getJSON(url + "/restaurant/only/" + restaurantId, {}, function(data, status) {

    if (status === "success") {
        generateHeader(data);
    } else {
        // если сломалось
        console.log();
        alert("ошибочка");
    }
});


$.getJSON(url + "/restaurant/" + restaurantId + "/categories", {}, function(data, status) {

    if (status === "success") {
        createCategoriesList(data);
    } else {
        // если сломалось
        console.error();
    }
});

function generateHeader(data) {

    document.getElementById("title").innerText = data.name;
    document.getElementById("restaurantImage").style.backgroundImage ="url(" + url + data.img + ")";
    document.getElementById("minPrice").innerText = data.minPrice;
    document.getElementById("time").innerText = data.workingHoursStart.substring(0 ,5) + " - " + data.workingHoursEnd.substring(0 ,5);
    if (data.description) {
        document.getElementById("description").innerHTML = "<p>" + data.description + "</p>"
    } else {
        document.getElementById("description").innerHTML = "<p>автор жопа ленивая</p>"
    }
}

let catList = document.getElementById("categories");
let productsList = document.getElementById("product-cards");

let categoryBlockId = 1;

function createCategoriesList(data) {
    data.forEach(function (category) {
        let li = document.createElement("li");
        li.innerText = category.name;
        li.dataset.blockId = categoryBlockId.toString();
        li.addEventListener("click", element =>
            window.scrollTo({
                top: document.getElementById(element.currentTarget.dataset.blockId).offsetTop - 200,
                behavior: "smooth"
            })
        );
        catList.appendChild(li);

        let categoryBlock = document.createElement("div");
        categoryBlock.classList.add("restaurant-product-cards-block");
        categoryBlock.id = categoryBlockId.toString();

        let title = document.createElement("h2");
        title.innerText = category.name;

        let productsBlock = document.createElement("div");
        productsBlock.classList.add("restaurant-product-cards");

        createProductCarts(category.products, productsBlock);

        categoryBlock.appendChild(title);
        categoryBlock.appendChild(productsBlock);

        productsList.appendChild(categoryBlock);

        categoryBlockId++;
    })

}

function createProductCarts(products, div) {
    products.forEach(function (product) {

        let productBlock = document.createElement("div");
        productBlock.classList.add("restaurant-product-card");
        productBlock.dataset.productId = product.id;

        let productImageBlock = document.createElement("div");
        productImageBlock.classList.add("restaurant-product-img");

        let productImage = document.createElement("img");
        productImage.src = url + product.img;

        productImageBlock.appendChild(productImage);
        productBlock.appendChild(productImageBlock);

        let title = document.createElement("h4");
        title.innerText = product.name;

        productBlock.appendChild(title);

        let description = document.createElement("div");

        if (product.description) {
            description.innerText = product.description;
        } else {
            description.innerText = "\n";
        }

        productBlock.appendChild(description);

        let take = document.createElement("div");
        take.classList.add("restaurant-product-take");

        let addProduct = document.createElement("div");
        addProduct.classList.add("add-product");

        let minus = document.createElement("div");
        minus.classList.add("minus");
        minus.innerText = "-";
        minus.setAttribute("onclick", "minus(this)");

        addProduct.appendChild(minus);

        let count = document.createElement("div");
        count.classList.add("add-product-count");
        count.classList.add("number");
        count.innerText = "1";

        addProduct.appendChild(count);

        let plus = document.createElement("div");
        plus.classList.add("plus");
        plus.setAttribute("onclick", "plus(this)");
        plus.innerText = "+";


        addProduct.appendChild(plus);



        take.appendChild(addProduct);
        take.innerHTML += "<div class=\"restaurant-product-price\">\n" +
            "                <div class=\"product-weight\">"+product.weight+"<span>г</span></div>\n" +
            "                <div class=\"product-cost\">"+product.price+" <span>₽</span>\n" +
            "                </div>\n" +
            "            </div>";


        productBlock.appendChild(take);

        let btn = document.createElement("div");
        btn.classList.add("restaurant-product-btn");
        btn.innerText = " в корзину ";
        btn.addEventListener("click", AddShoppingCart);

        productBlock.appendChild(btn);


        div.appendChild(productBlock);
    })
}


function minus(element) {
    let number = element.parentElement.getElementsByClassName("number")[0];
    if (number.textContent > 1) {
        number.textContent--;
    }
}

function plus(element) {
    let number = element.parentElement.getElementsByClassName("number")[0];
    if (number.textContent < 100) {
        number.textContent++;
    }
}

function AddShoppingCart(event) {
    let block = event.path[1];

    let obj = {
        productId: block.dataset.productId,
        count: block.getElementsByClassName("number")[0].textContent
    }

    let cartJson = localStorage.getItem("cart");

    if (!cartJson) {
        localStorage.setItem("cart", JSON.stringify({productsList: new Array(obj), restaurantId: restaurantId}));
    } else {
        let cart = JSON.parse(cartJson);

        if (cart.restaurantId !== restaurantId) {
            if (confirm("в корзине есть товары из другова ресторана, если вы продолжите они будут удалены")) {
                cart.restaurantId = restaurantId;
                cart.productsList = [];
            } else {
                return;
            }
        }

        let value = cart.productsList.find(function(item, index, array) {
            if (item.productId === obj.productId) {
                array[index] = obj;
                return true;
            }
            return false;
        });

        if (!value) {
            cart.productsList.push(obj);
        }

        localStorage.setItem("cart", JSON.stringify(cart));
    }
}

