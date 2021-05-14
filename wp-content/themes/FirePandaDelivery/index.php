<?php get_header();?>
<main>
    <section class="slider-section">
        <div class="slider">
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/courier-1.jpg" />
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logotype.png" />
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/restaurant-1.jpg" />
            </div>
        </div>
    </section>
    <section class="main-menu">
        <div class="container">
            <div class="main-menu-block">
                <div class="list-food">
                    <?php wp_nav_menu("menu=Категории"); ?>
                    <div class="btn-more">Еще</div>
                </div>
                <div class="search-food-block">
                    <input type="text" class="search-block search-block-eat" id="search-block-eat"
                        placeholder="Название ресторана, блюдо, кухня">
                    <div class="search-food-btn">Найти</div>
                    <div class="search-food-results">

                        <div class="search-food-results-item">
                            <div class="search-results-restaurant">
                                <div class="search-results-restaurant-img"><img
                                        src="<?php echo get_template_directory_uri(); ?>/img/restaurant-1.jpg" alt="">
                                </div>
                                <div class="search-results-restaurant-title">Бургер Кинг</div>
                            </div>
                            <div class="search-results-product-block">

                                <div class="search-results-product">
                                    <div class="search-results-product-img"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/restaurant-product.jpg"
                                            alt=""></div>
                                    <div class="search-results-product-property">
                                        <div class="search-results-product-title">Бургер</div>
                                        <div class="search-results-product-price">68 <span>₽</span></div>
                                    </div>
                                </div>

                                <div class="search-results-product">
                                    <div class="search-results-product-img"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/restaurant-bg.jpg"
                                            alt=""></div>
                                    <div class="search-results-product-property">
                                        <div class="search-results-product-title">Пицца</div>
                                        <div class="search-results-product-price">68 <span>₽</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-food-results-item">
                            <div class="search-results-restaurant">
                                <div class="search-results-restaurant-img"><img
                                        src="<?php echo get_template_directory_uri(); ?>/img/restaurant-1.jpg" alt="">
                                </div>
                                <div class="search-results-restaurant-title">Бургер Кинг</div>
                            </div>
                            <div class="search-results-product-block">

                                <div class="search-results-product">
                                    <div class="search-results-product-img"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/restaurant-product.jpg"
                                            alt=""></div>
                                    <div class="search-results-product-property">
                                        <div class="search-results-product-title">Бургер</div>
                                        <div class="search-results-product-price">68 <span>₽</span></div>
                                    </div>
                                </div>

                                <div class="search-results-product">
                                    <div class="search-results-product-img"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/restaurant-bg.jpg"
                                            alt=""></div>
                                    <div class="search-results-product-property">
                                        <div class="search-results-product-title">Пицца</div>
                                        <div class="search-results-product-price">68 <span>₽</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-food-results-item">
                            <div class="search-results-restaurant">
                                <div class="search-results-restaurant-img"><img
                                        src="<?php echo get_template_directory_uri(); ?>/img/restaurant-1.jpg" alt="">
                                </div>
                                <div class="search-results-restaurant-title">Бургер Кинг</div>
                            </div>
                            <div class="search-results-product-block">

                                <div class="search-results-product">
                                    <div class="search-results-product-img"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/restaurant-product.jpg"
                                            alt=""></div>
                                    <div class="search-results-product-property">
                                        <div class="search-results-product-title">Бургер</div>
                                        <div class="search-results-product-price">68 <span>₽</span></div>
                                    </div>
                                </div>

                                <div class="search-results-product">
                                    <div class="search-results-product-img"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/restaurant-bg.jpg"
                                            alt=""></div>
                                    <div class="search-results-product-property">
                                        <div class="search-results-product-title">Пицца</div>
                                        <div class="search-results-product-price">68 <span>₽</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="list-restaurants">
        <div class="container">
            <div class="list-restaurants-block">
                <h2>В ВАШЕМ ГОРОДЕ</h2>
                <div class="list-restaurants-cards-block list-restaurants-cards" id="list-restaurants-cards">
<!--                    <div class="list-restaurants-cards">-->
<!--                        <div class="card-restaurant">-->
<!--                            <div class="card-restaurant-img"><img-->
<!--                                    src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                    alt="restaurant-image"></div>-->
<!--                            <h4>Макдоналдс</h4>-->
<!--                            <div class="card-restaurant-specifications">-->
<!--                                <div class="card-restaurant-rating">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                    <div class="card-restaurant-rating-number">5</div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-price">от 200 р-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-time">50-60 мин-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-restaurant">-->
<!--                            <div class="card-restaurant-img"><img-->
<!--                                    src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                    alt="restaurant-image"></div>-->
<!--                            <h4>Макдоналдс</h4>-->
<!--                            <div class="card-restaurant-specifications">-->
<!--                                <div class="card-restaurant-rating">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                    <div class="card-restaurant-rating-number">5</div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-price">от 200 р-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-time">50-60 мин-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-restaurant">-->
<!--                            <div class="card-restaurant-img"><img-->
<!--                                    src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                    alt="restaurant-image"></div>-->
<!--                            <h4>Макдоналдс</h4>-->
<!--                            <div class="card-restaurant-specifications">-->
<!--                                <div class="card-restaurant-rating">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                    <div class="card-restaurant-rating-number">5</div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-price">от 200 р-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-time">50-60 мин-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-restaurant">-->
<!--                            <div class="card-restaurant-img"><img-->
<!--                                    src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                    alt="restaurant-image"></div>-->
<!--                            <h4>Макдоналдс</h4>-->
<!--                            <div class="card-restaurant-specifications">-->
<!--                                <div class="card-restaurant-rating">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                    <div class="card-restaurant-rating-number">5</div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-price">от 200 р-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-time">50-60 мин-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-restaurant">-->
<!--                            <div class="card-restaurant-img"><img-->
<!--                                    src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                    alt="restaurant-image"></div>-->
<!--                            <h4>Макдоналдс</h4>-->
<!--                            <div class="card-restaurant-specifications">-->
<!--                                <div class="card-restaurant-rating">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                    <div class="card-restaurant-rating-number">5</div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-price">от 200 р-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-time">50-60 мин-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-restaurant">-->
<!--                            <div class="card-restaurant-img"><img-->
<!--                                    src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                    alt="restaurant-image"></div>-->
<!--                            <h4>Макдоналдс</h4>-->
<!--                            <div class="card-restaurant-specifications">-->
<!--                                <div class="card-restaurant-rating">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                    <div class="card-restaurant-rating-number">5</div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-price">от 200 р-->
<!--                                </div>-->
<!--                                <div class="card-restaurant-time">50-60 мин-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="btn-restaurants-more">-->
<!--                        <p id="see-more" onclick="seemore()">Смотреть еще</p>-->
<!--                        <div id="more-cards" style="display:none">-->
<!--                            <div class="list-restaurants-cards">-->
<!--                                <div class="card-restaurant">-->
<!--                                    <div class="card-restaurant-img"><img-->
<!--                                            src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                            alt="restaurant-image"></div>-->
<!--                                    <h4>Макдоналдс</h4>-->
<!--                                    <div class="card-restaurant-specifications">-->
<!--                                        <div class="card-restaurant-rating">-->
<!--                                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                            <div class="card-restaurant-rating-number">5</div>-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-price">от 200 р-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-time">50-60 мин-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant">-->
<!--                                    <div class="card-restaurant-img"><img-->
<!--                                            src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                            alt="restaurant-image"></div>-->
<!--                                    <h4>Макдоналдс</h4>-->
<!--                                    <div class="card-restaurant-specifications">-->
<!--                                        <div class="card-restaurant-rating">-->
<!--                                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                            <div class="card-restaurant-rating-number">5</div>-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-price">от 200 р-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-time">50-60 мин-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant">-->
<!--                                    <div class="card-restaurant-img"><img-->
<!--                                            src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                            alt="restaurant-image"></div>-->
<!--                                    <h4>Макдоналдс</h4>-->
<!--                                    <div class="card-restaurant-specifications">-->
<!--                                        <div class="card-restaurant-rating">-->
<!--                                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                            <div class="card-restaurant-rating-number">5</div>-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-price">от 200 р-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-time">50-60 мин-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant">-->
<!--                                    <div class="card-restaurant-img"><img-->
<!--                                            src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                            alt="restaurant-image"></div>-->
<!--                                    <h4>Макдоналдс</h4>-->
<!--                                    <div class="card-restaurant-specifications">-->
<!--                                        <div class="card-restaurant-rating">-->
<!--                                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                            <div class="card-restaurant-rating-number">5</div>-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-price">от 200 р-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-time">50-60 мин-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant">-->
<!--                                    <div class="card-restaurant-img"><img-->
<!--                                            src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                            alt="restaurant-image"></div>-->
<!--                                    <h4>Макдоналдс</h4>-->
<!--                                    <div class="card-restaurant-specifications">-->
<!--                                        <div class="card-restaurant-rating">-->
<!--                                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                            <div class="card-restaurant-rating-number">5</div>-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-price">от 200 р-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-time">50-60 мин-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card-restaurant">-->
<!--                                    <div class="card-restaurant-img"><img-->
<!--                                            src="--><?php //echo get_template_directory_uri(); ?><!--/img/restaurant-1.jpg"-->
<!--                                            alt="restaurant-image"></div>-->
<!--                                    <h4>Макдоналдс</h4>-->
<!--                                    <div class="card-restaurant-specifications">-->
<!--                                        <div class="card-restaurant-rating">-->
<!--                                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/star.svg" alt="">-->
<!--                                            <div class="card-restaurant-rating-number">5</div>-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-price">от 200 р-->
<!--                                        </div>-->
<!--                                        <div class="card-restaurant-time">50-60 мин-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <p id="hide-blocks" style="display:none" onclick="hideblocks()">Скрыть</p>-->
<!---->
<!--                    </div>-->
                </div>
                <div class="btn-restaurants-more" id="btn-see-more">
                    <p id="see-more" onclick="seeMore()">Смотреть еще</p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer();?>