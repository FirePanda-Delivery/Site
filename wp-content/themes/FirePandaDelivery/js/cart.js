
//const address = localStorage.getItem("address");
//const city = localStorage.getItem("city");

const cartStorage = JSON.parse(localStorage.getItem("cart"));


let cartBlock = document.getElementById("cartBlock");
cartStorage.productsList.forEach(element => {

    $.getJSON(url + "/restaurant/product/" + element.productId, {}, product => {
        let cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");
        cartItem.dataset.productId = product.id;

        let imageBlock = document.createElement("div");
        imageBlock.classList.add("cart-img");

        let img = document.createElement("img");
        img.src = url + product.img;

        imageBlock.appendChild(img);
        cartItem.appendChild(imageBlock);

        let features =document.createElement("div");
        features.classList.add("cart-product-features");

        let title = document.createElement("div");
        title.classList.add("cart-product-title");
        title.innerText = product.name;

        let weight = document.createElement("div");
        weight.classList.add("cart-product-weight");
        weight.innerText = product.weight;

        features.appendChild(title);
        features.appendChild(weight);

        cartItem.appendChild(features);

        let price = document.createElement("div");
        price.classList.add("cart-product-price");
        price.innerHTML = product.price + " <span>руб</span>";

        cartItem.appendChild(price);

        let productCount = document.createElement("div");
        productCount.classList.add("add-product");
        productCount.classList.add("cart-product-count");


        let minus = document.createElement("div");
        minus.classList.add("minus");
        minus.innerText = "-";
        minus.addEventListener("click", element=> {
            let item = element.target.parentElement.parentElement;
            let productId = item.dataset.productId;
            let count = element.target.parentElement.querySelector(".number");
            if (count.textContent > 1) {
                count.textContent--;

                cartStorage.productsList.forEach(function (element, index, array) {
                    if (element.productId === productId) {
                        array[index].count = count.textContent;
                    }
                });

                item.querySelector(".cart-product-sum").textContent =
                    (parseFloat(item.querySelector(".cart-product-price").textContent) * (+count.textContent))
                        .toFixed(2) + " руб";

            }



            localStorage.setItem("cart", JSON.stringify(cartStorage));
        });

        productCount.appendChild(minus);

        let count = document.createElement("div");
        count.classList.add("add-product-count");
        count.classList.add("number");
        count.innerText = element.count;

        productCount.appendChild(count);

        let plus = document.createElement("div");
        plus.classList.add("plus");
        plus.innerText = "+";
        plus.addEventListener("click", element => {
            let item = element.target.parentElement.parentElement;
            let productId = item.dataset.productId;
            let count = element.target.parentElement.querySelector(".number");
            if (count.textContent < 100) {
                count.textContent++;

                cartStorage.productsList.forEach(function (element, index, array) {
                    if (element.productId === productId) {
                        array[index].count = count.textContent;
                    }
                });

                item.querySelector(".cart-product-sum").textContent =
                    (parseFloat(item.querySelector(".cart-product-price").textContent) * (+count.textContent))
                        .toFixed(2) + " руб";

            }
            localStorage.setItem("cart", JSON.stringify(cartStorage));
        });

        productCount.appendChild(plus);
        cartItem.appendChild(productCount);

        let sum = document.createElement("div");
        sum.classList.add("cart-product-sum");
        sum.innerText =(product.price * element.count).toFixed(2) + " руб";

        cartItem.appendChild(sum);

        let deleteBlock = document.createElement("div");
        deleteBlock.classList.add("cart-product-delete");

        let a = document.createElement("a");
        a.href = "#";
        a.innerText = " Удалить";
        a.addEventListener("click", event => {
            let item = event.target.parentElement.parentElement;
            let productId = item.dataset.productId;
            item.remove();
            cartStorage.productsList = cartStorage.productsList.filter(element => {
                return element.productId !== productId;
            });

            localStorage.setItem("cart", JSON.stringify(cartStorage));
        });

        deleteBlock.appendChild(a);

        cartItem.appendChild(deleteBlock);
        cartBlock.appendChild(cartItem);

    });

});