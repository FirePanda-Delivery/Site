<?php
/*
Template Name: Оформление заказа
*/
?>
<?php get_header(); ?>
<main>
    <section class="contacts">
        <div class="container">
            <div class="order-reg-block">
                <h2>Оформление заказа</h2>
                <div class="order-registration-wrapper">
                    <div class="order-reg-left">
                        <h4>Адрес доставки</h4>

                        <form id="deliveryAddress" action="" method="post">
                            <fieldset>
                                <input placeholder="Адрес" type="text" required>
                            </fieldset>
                            <fieldset class="order-reg-address">
                                <input placeholder="Кв./офис" type="number" required>
                                <input placeholder="Домофон" type="number" required>
                                <input placeholder="Подъезд" type="number" required>
                                <input placeholder="Этаж" type="text" required>
                            </fieldset>
                            <fieldset>
                                <textarea placeholder="Комментарий к заказу" id=""></textarea>
                            </fieldset>
                        </form>

                        <form action="" class="order-reg-pay">
                            <p><input type="radio" id="radioOrderBtn">Онлайн оплата</p>
                            <p><input type="radio" id="radioOrderBtn2">Google Pay</p>
                        </form>

                        <div class="order-bottom-btn">
                            <button name="order-bottom-btn" type="submit" id="orderBottomBtn">заказать</button>
                        </div>

                    </div>
                    <div class="order-reg-right">
                        <h4>Мой заказ</h4>
                        <div class="order-reg-products ">

                            <div class="user-acc-my-orders-wrapper">
                                <div class="order-block">
                                    <div class="order-top">
                                        <div class="order-resraurant">
                                            <div class="order-resraurant-name">Макдоналдс</div>
                                        </div>
                                    </div>
                                    <div class="order-bottom">
                                        <div class="order-bottom-block">
                                            <div class="order-product">Двойной Биг Тейсти</div>
                                            <div class="order-product-count">2 шт</div>
                                            <div class="order-product-price">650 руб</div>
                                        </div>
                                        <div class="order-bottom-block">
                                            <div class="order-product">Венская вафля</div>
                                            <div class="order-product-count">5 шт</div>
                                            <div class="order-product-price">475 руб</div>
                                        </div>

                                    </div>
                                    <div class="order-bottom-result">
                                        <div>ИТОГ</div>
                                        <div><span>1125</span>руб</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>