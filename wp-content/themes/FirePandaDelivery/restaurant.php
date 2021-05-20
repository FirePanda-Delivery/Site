<?php get_header(); ?>
<main>
    <?php
    $var = json_decode(wp_remote_get("https://fire-panda-delivery.herokuapp.com/restaurant/exist/" . $_GET["id"])['body'], true)["value"];

    if ($var != null && $var == 1) {
    ?>
    <section class="restaurant-offer">
        <div class="container">
            <div class="restaurant-offer-block">
                <div class="restaurant-offer-main" id="restaurantImage">
                    <div class="restaurant-offer-main-overlay">

                        <div class="restaurant-offer-information">
                            <div class="restaurant-offer-title" id="title">Макдоналдс</div>
                            <div class="restaurant-offer-descr">
                                <div class="restaurant-offer-rating">
                                    <div class="restaurant-header-title-item">Рейтинг</div>
                                    <div class="restaurant-offer-rating-items">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="star">
                                        <div class="restaurant-offer-number" id="rating">4.5</div>
                                    </div>
                                </div>
                                <div class="restaurant-offer-order-from">
                                    <div class="restaurant-header-title-item">Доставка от</div>
                                    <div>
                                        <span id="minPrice">300</span>
                                        руб
                                    </div>

                                </div>
                                <div class="restaurant-offer-time-wrap">
                                    <div class="restaurant-header-title-item">Время работы</div>
                                    <div class="restaurant-offer-time" id="time">
                                        06:00 - 22:00
                                    </div>
                                </div>

                                <div class="restaurant-offer-about">
                                    <div>Информация</div>
                                    <a class="content_toggle" href="#">
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="restaurant-content_block" id="description" style="display: none;">
                <p>McDonald’s, «Макдо́налдс» — американская корпорация, работающая в сфере
                    общественного питания, крупнейшая в мире сеть ресторанов быстрого питания,
                    работающая по системе франчайзинга. На конец 2018 года под торговой маркой
                    McDonald’s работало 37 855 ресторанов, из них 35 085 на правах франчайзинга.
                    Корпорация входит в список крупнейших компаний США Fortune 500 (в 2019 году
                    149-е место). Штаб-квартира компании расположена в пригороде Чикаго Оук-Бруке.</p>
            </div>
        </div>
    </section>
    <section class="restaurant-food">
        <div class="container">
            <div class="restaurant-food-block">
                <div class="restaurant-food-wrapper">
                    <ul class="restaurant-food-category" id="categories">
                        <!--                        <li>Бургеры</li>-->
                        <!--                        <li>Пицца</li>-->
                        <!--                        <li>Роллы</li>-->
                        <!--                        <li>Салаты</li>-->
                        <!--                        <li>Картошка</li>-->
                        <!--                        <li>Закуски</li>-->
                        <!--                        <li>Напитки</li>-->
                    </ul>
                    <div class="restaurant-food-btn">Еще</div>
                </div>
            </div>
        </div>
    </section>
    <section class="restaurant-product-cards">
        <div class="container" id="product-cards">
            <!--            <div class="restaurant-product-cards-block">-->
            <!--                <h2>бургеры</h2>-->
            <!--                <div class="restaurant-product-cards">-->
            <!--                    <div class="restaurant-product-card">-->
            <!--                        <div class="restaurant-product-img"><img-->
            <!--                                src="--><?php //echo get_template_directory_uri(); ?>
            <!--/img/restaurant-product.jpg" alt="">-->
            <!--                        </div>-->
            <!--                        <h4>Бургер Биг</h4>-->
            <!--                        <div class="restaurant-product-descr">-->
            <!--                            Бургер с бифштексом из 100% говядины на булочке, посыпанной кукурузной крошкой, с-->
            <!--                            добавлением ломтиков бекона, свежего салата, помидоров, хрустящего лука, заправленных соусом-->
            <!--                            "Барбекю" и майонезом.-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-take">-->
            <!--                            <div class="add-product">-->
            <!---->
            <!--                                <div class="minus" onclick="alert('я сработал');">–</div>-->
            <!--                                <div class="add-product-count number">1</div>-->
            <!--                                <div class="plus">+</div>-->
            <!---->
            <!--                            </div>-->
            <!--                            <div class="restaurant-product-price">-->
            <!--                                <div class="product-weight">100 <span>г</span></div>-->
            <!--                                <div class="product-cost">68 <span>₽</span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-btn">-->
            <!--                            в корзину-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="restaurant-product-card">-->
            <!--                        <div class="restaurant-product-img"><img-->
            <!--                                src="--><?php //echo get_template_directory_uri(); ?>
            <!--/img/restaurant-product.jpg" alt="">-->
            <!--                        </div>-->
            <!--                        <h4>Бургер Биг</h4>-->
            <!--                        <div class="restaurant-product-descr">-->
            <!--                            Бургер с бифштексом из 100% говядины на булочке, посыпанной кукурузной крошкой, с-->
            <!--                            добавлением ломтиков бекона, свежего салата, помидоров, хрустящего лука, заправленных соусом-->
            <!--                            "Барбекю" и майонезом.-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-take">-->
            <!--                            <div class="add-product">-->
            <!---->
            <!--                                <div class="minus">–</div>-->
            <!--                                <div class="add-product-count number">1</div>-->
            <!--                                <div class="plus">+</div>-->
            <!---->
            <!--                            </div>-->
            <!--                            <div class="restaurant-product-price">-->
            <!--                                <div class="product-weight">100 <span>г</span></div>-->
            <!--                                <div class="product-cost">68 <span>₽</span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-btn">-->
            <!--                            в корзину-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="restaurant-product-card">-->
            <!--                        <div class="restaurant-product-img"><img-->
            <!--                                src="--><?php //echo get_template_directory_uri(); ?>
            <!--/img/restaurant-product.jpg" alt="">-->
            <!--                        </div>-->
            <!--                        <h4>Бургер Биг</h4>-->
            <!--                        <div class="restaurant-product-descr">-->
            <!--                            Бургер с бифштексом из 100% говядины на булочке, посыпанной кукурузной крошкой, с-->
            <!--                            добавлением ломтиков бекона, свежего салата, помидоров, хрустящего лука, заправленных соусом-->
            <!--                            "Барбекю" и майонезом.-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-take">-->
            <!--                            <div class="add-product">-->
            <!---->
            <!--                                <div class="minus">–</div>-->
            <!--                                <div class="add-product-count number">1</div>-->
            <!--                                <div class="plus">+</div>-->
            <!---->
            <!--                            </div>-->
            <!--                            <div class="restaurant-product-price">-->
            <!--                                <div class="product-weight">100 <span>г</span></div>-->
            <!--                                <div class="product-cost">68 <span>₽</span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-btn">-->
            <!--                            в корзину-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="restaurant-product-card">-->
            <!--                        <div class="restaurant-product-img"><img-->
            <!--                                src="--><?php //echo get_template_directory_uri(); ?>
            <!--/img/restaurant-product.jpg" alt="">-->
            <!--                        </div>-->
            <!--                        <h4>Бургер Биг</h4>-->
            <!--                        <div class="restaurant-product-descr">-->
            <!--                            Бургер с бифштексом из 100% говядины на булочке, посыпанной кукурузной крошкой, с-->
            <!--                            добавлением ломтиков бекона, свежего салата, помидоров, хрустящего лука, заправленных соусом-->
            <!--                            "Барбекю" и майонезом.-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-take">-->
            <!--                            <div class="add-product">-->
            <!---->
            <!--                                <div class="minus">–</div>-->
            <!--                                <div class="add-product-count number">1</div>-->
            <!--                                <div class="plus">+</div>-->
            <!---->
            <!--                            </div>-->
            <!--                            <div class="restaurant-product-price">-->
            <!--                                <div class="product-weight">100 <span>г</span></div>-->
            <!--                                <div class="product-cost">68 <span>₽</span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-btn">-->
            <!--                            в корзину-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="restaurant-product-card">-->
            <!--                        <div class="restaurant-product-img"><img-->
            <!--                                src="--><?php //echo get_template_directory_uri(); ?>
            <!--/img/restaurant-product.jpg" alt="">-->
            <!--                        </div>-->
            <!--                        <h4>Бургер Биг</h4>-->
            <!--                        <div class="restaurant-product-descr">-->
            <!--                            Бургер с бифштексом из 100% говядины на булочке, посыпанной кукурузной крошкой, с-->
            <!--                            добавлением ломтиков бекона, свежего салата, помидоров, хрустящего лука, заправленных соусом-->
            <!--                            "Барбекю" и майонезом.-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-take">-->
            <!--                            <div class="add-product">-->
            <!---->
            <!--                                <div class="minus">–</div>-->
            <!--                                <div class="add-product-count number">1</div>-->
            <!--                                <div class="plus">+</div>-->
            <!---->
            <!--                            </div>-->
            <!--                            <div class="restaurant-product-price">-->
            <!--                                <div class="product-weight">100 <span>г</span></div>-->
            <!--                                <div class="product-cost">68 <span>₽</span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-btn">-->
            <!--                            в корзину-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="restaurant-product-card">-->
            <!--                        <div class="restaurant-product-img"><img-->
            <!--                                src="--><?php //echo get_template_directory_uri(); ?>
            <!--/img/restaurant-product.jpg" alt="">-->
            <!--                        </div>-->
            <!--                        <h4>Бургер Биг</h4>-->
            <!--                        <div class="restaurant-product-descr">-->
            <!--                            Бургер с бифштексом из 100% говядины на булочке, посыпанной кукурузной крошкой, с-->
            <!--                            добавлением ломтиков бекона, свежего салата, помидоров, хрустящего лука, заправленных соусом-->
            <!--                            "Барбекю" и майонезом.-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-take">-->
            <!--                            <div class="add-product">-->
            <!---->
            <!--                                <div class="minus">–</div>-->
            <!--                                <div class="add-product-count number">1</div>-->
            <!--                                <div class="plus">+</div>-->
            <!---->
            <!--                            </div>-->
            <!--                            <div class="restaurant-product-price">-->
            <!--                                <div class="product-weight">100 <span>г</span></div>-->
            <!--                                <div class="product-cost">68 <span>₽</span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="restaurant-product-btn">-->
            <!--                            в корзину-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </section>
    <?php

    } else {
        // если такого ресторана нет
    }

    ?>
</main>
<?php get_footer();?>