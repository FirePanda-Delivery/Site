
//const address = localStorage.getItem("address");
//const city = localStorage.getItem("city");

const cartElements = JSON.parse(localStorage.getItem("cart"));


let cartBlock = document.getElementById("cartBlock");
cartElements.productsList.forEach(element => {

    $.getJSON(url + "/restaurant/product/" + element.productId, {}, product => {
        let cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");

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
        minus.addEventListener("click", ()=> alert("-"));
       // minus.setAttribute("onclick", "minus(this)");

        productCount.appendChild(minus);

        let count = document.createElement("div");
        count.classList.add("add-product-count");
        count.classList.add("number");
        count.innerText = element.count;

        productCount.appendChild(count);

        let plus = document.createElement("div");
        plus.classList.add("plus");
       //plus.setAttribute("onclick", "plus(this)");
        plus.innerText = "+";
        plus.addEventListener("click", ()=> alert("+"));

        productCount.appendChild(plus);
        cartItem.appendChild(productCount);

        let sum = document.createElement("div");
        sum.classList.add("cart-product-sum");
        sum.innerText = product.price * element.count + " руб";

        cartItem.appendChild(sum);

        let deleteBlock = document.createElement("div");
        deleteBlock.classList.add("cart-product-delete");

        let a = document.createElement("a");
        a.href = "#";
        a.innerText = " Удалить";

        deleteBlock.appendChild(a);

        cartItem.appendChild(deleteBlock);
        cartBlock.appendChild(cartItem);

    });



    // <div className="cart-item">
    //   =  <div className="cart-img">
    //   =      <img src="<?php echo get_template_directory_uri(); ?>/img/restaurant-product.jpg"
    //   =           alt="cart-image">
    //   =  </div>
    //   =  <div className="cart-product-features">
    //   =      <div className="cart-product-title">Бургер Биг</div>
    //   =      <div className="cart-product-weight">170 <span>г</span></div>
    //   =  </div>
    //   =  <div className="cart-product-price">68 <span>руб</span></div>
    //   =  <div className="add-product cart-product-count">
    //   =      <div className="minus">–</div>
    //   =      <div className="add-product-count number">1</div>
    //   =      <div className="plus">+</div>
    //   =  </div>
    //   =  <div className="cart-product-sum">200 руб</div>
    //   =  <div className="cart-product-delete"><a href="#"> Удалить</a></div>
    //
    // </div>
});