<?php get_header('user'); ?>
<main>
    <section class="user-account">
        <div class="container">
            <div class="personal-account">
                <h2>ЛИЧНЫЙ КАБИНЕТ</h2>
                <div class="user-acc-block">
                    <div class="user-acc-sidebar">
                        <div class="user-acc-sidebar-top">
                            <ul>
                                <li id="userAccProfile">Профиль</li>
                                <li id="userAccOrders">Мои заказы</li>
                                <li id="userAccSale">Мои скидки</li>
                                <li id="userAccExit" onclick="swa()">Выход</li>
                            </ul>
                        </div>
                        <div class="user-acc-sidebar-bottom">
                            <div class=" discounts discounts-info">
                                <h5>АКЦИИ И СКИДКИ</h5>
                                <div class="discounts-checkbox">
                                    <label for="discount" class="discount-label">
                                        Уведомление о новых акциях
                                    </label>
                                    <input type="checkbox" name="discount" id="discount" class="discount">
                                </div>
                            </div>
                            <div class="discounts">
                                <h5>ИНФОРМАЦИЯ О ЗАКАЗАХ</h5>
                                <div class="discounts-checkbox">
                                    <label for="discount" class="discount-label">
                                        по электронной почте
                                    </label>
                                    <input type="checkbox" name="discount" id="discount" class="discount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-acc-profile" id="UserProfileBlock">
                        <h4>ПРОФИЛЬ</h4>
                        <div class="user-acc-profile-wrapper">
                            <form id="user-acc-form" action="" method="post">
                                <fieldset>
                                    <input placeholder="Имя" type="text" tabindex="1" required autofocus>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Ваш номер телефона" type="tel" tabindex="2" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="эл. почта" type="email" tabindex="3" required>
                                </fieldset>
                                <fieldset>
                                    <button name="submit" type="submit" id="user-contact-submit"
                                        data-submit="...Sending">сохранить</button>
                                </fieldset>
                            </form>
                            <!-- <div class="user-acc-avatar"><img
                                    src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="avatar"></div> -->
                        </div>

                    </div>
                    <div class="user-acc-my-orders" id="userOrdersBlock">
                        <h4>МОИ ЗАКАЗЫ</h4>
                        <div class="user-acc-my-orders-wrapper">
                            <div class="order-block">
                                <div class="order-top">
                                    <div class="order-resraurant">
                                        <div class="order-resraurant-name">Мак</div>
                                        <div class="order-resraurant-date">07.03.21
                                            <span>13:28</span>
                                        </div>
                                        <div class="order-resraurant-number">
                                            <span>№</span>3866316
                                        </div>
                                    </div>
                                    <div class="order-total-cost">1000 руб</div>
                                </div>
                                <div class="order-bottom">
                                    <div class="order-bottom-block">
                                        <div class="order-product">Салат с копченным лососем, рукколой и томатами</div>
                                        <div class="order-product-count">2шт</div>
                                        <div class="order-product-price">500 руб</div>
                                    </div>
                                    <div class="order-bottom-block">
                                        <div class="order-product">Салат с копченным лососем, рукколой и томатами</div>
                                        <div class="order-product-count">2шт</div>
                                        <div class="order-product-price">500 руб</div>
                                    </div>
                                    <div class="order-bottom-block">
                                        <div class="order-product">Салат с копченным лососем, рукколой и томатами</div>
                                        <div class="order-product-count">2шт</div>
                                        <div class="order-product-price">500 руб</div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-block">
                                <div class="order-top">
                                    <div class="order-resraurant">
                                        <div class="order-resraurant-name">Мак</div>
                                        <div class="order-resraurant-date">07.03.21
                                            <span>13:28</span>
                                        </div>
                                        <div class="order-resraurant-number">
                                            <span>№</span>3866316
                                        </div>
                                    </div>
                                    <div class="order-total-cost">1000 руб</div>
                                </div>
                                <div class="order-bottom">
                                    <div class="order-bottom-block">
                                        <div class="order-product">Салат с копченным лососем, рукколой и томатами</div>
                                        <div class="order-product-count">2шт</div>
                                        <div class="order-product-price">500 руб</div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-block">
                                <div class="order-top">
                                    <div class="order-resraurant">
                                        <div class="order-resraurant-name">Мак</div>
                                        <div class="order-resraurant-date">07.03.21
                                            <span>13:28</span>
                                        </div>
                                        <div class="order-resraurant-number">
                                            <span>№</span>3866316
                                        </div>
                                    </div>
                                    <div class="order-total-cost">1000 руб</div>
                                </div>
                                <div class="order-bottom">
                                    <div class="order-bottom-block">
                                        <div class="order-product">Салат с копченным лососем, рукколой и томатами</div>
                                        <div class="order-product-count">2шт</div>
                                        <div class="order-product-price">500 руб</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="user-acc-my-sales" id="userAccSaleBlock">
                        <h4>МОИ СКИДКИ</h4>
                        <div class="user-acc-my-sales-wrapper">
                            <div class="sales-block"></div>
                        </div>
                    </div>
                    <div class="user-acc-my-exit" id="userAccExitBlock"></div>
                </div>
                <div id="overlayUserAccExit">
                    <div class="popup">
                        <button class="close-cat" title="Закрыть окно" onclick="swa2()"><i
                                class="fas fa-times fa-2x"></i></button>
                        <p class="zag">Вы уверены, что хотите хотите выйти из аккаунта?</p>
                        <div class="modal-footer">
                            <button id="btnUserBack" type="button" class="btn btn-cancel">Отмена</button>
                            <button id="btnUserExit" class="btn btn-delete" type="button">Выйти</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</main>
<?php get_footer();?>