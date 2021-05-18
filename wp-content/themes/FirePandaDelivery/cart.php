<?php get_header(); ?>
<main>
    <section class="cart">
        <div class="container">
            <div class="cart-wrapper">
                <h2>Корзина</h2>
                <div class="cart-block" id="cartBlock">
                    <div class="cart-item">
                        <div class="cart-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/restaurant-product.jpg"
                                alt="cart-image">
                        </div>
                        <div class="cart-product-features">
                            <div class="cart-product-title">Бургер Биг</div>
                            <div class="cart-product-weight">170 <span>г</span></div>
                        </div>
                        <div class="cart-product-price">68 <span>руб</span></div>
                        <div class="add-product cart-product-count">
                            <div class="minus">–</div>
                            <div class="add-product-count number">1</div>
                            <div class="plus">+</div>
                        </div>
                        <div class="cart-product-sum">200 руб</div>
                        <div class="cart-product-delete"> <a href="#"> Удалить</a> </div>

                    </div>
                    <div class="cart-item">
                        <div class="cart-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/restaurant-1.jpg"
                                alt="cart-image">
                        </div>
                        <div class="cart-product-features">
                            <div class="cart-product-title">Бургер Биг</div>
                            <div class="cart-product-weight">170 <span>г</span></div>
                        </div>
                        <div class="cart-product-price">68 <span>руб</span></div>
                        <div class="add-product cart-product-count">
                            <div class="minus">–</div>
                            <div class="add-product-count number">1</div>
                            <div class="plus">+</div>
                        </div>
                        <div class="cart-product-sum">200 руб</div>
                        <div class="cart-product-delete"> <a href="#"> Удалить</a> </div>

                    </div>
                    <div class="cart-item">
                        <div class="cart-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/restaurant-product.jpg"
                                alt="cart-image">
                        </div>
                        <div class="cart-product-features">
                            <div class="cart-product-title">Бургер Биг</div>
                            <div class="cart-product-weight">170 <span>г</span></div>
                        </div>
                        <div class="cart-product-price">68 <span>руб</span></div>
                        <div class="add-product cart-product-count">
                            <div class="minus">–</div>
                            <div class="add-product-count number">1</div>
                            <div class="plus">+</div>
                        </div>
                        <div class="cart-product-sum">200 руб</div>
                        <div class="cart-product-delete"> <a href="#"> Удалить</a> </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer();?>