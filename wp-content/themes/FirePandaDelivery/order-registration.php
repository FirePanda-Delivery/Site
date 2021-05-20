<?php
/*
Template Name: Оформление заказа
*/
?>
<?php get_header(); ?>
<main>
    <section class="contacts">
        <div class="container">
            <div class="contacts-block">
                <h2>Оформление заказа</h2>\
                <div class="order-registration-wrapper">
                    <div class="order-reg-left">
                        <h4>Адрес доставки</h4>

                        <form id="deliveryAddress" action="" method="post">
                            <fieldset>
                                <input placeholder="Улица" type="text" required>
                            </fieldset>
                            <fieldset>
                                <input placeholder="Кв./офис" type="text" required>
                                <input placeholder="Домофон" type="text" required>
                                <input placeholder="Подъезд" type="text" required>
                                <input placeholder="Улица" type="text" required>
                            </fieldset>

                            <input placeholder="Введите фамилию" type="text" required>
                            <input placeholder="Введите логин" type="text" required>
                            <input placeholder="Введите пароль" type="password" required>
                            <input placeholder="Повторите пароль" type="password" required>
                            <input placeholder="Введите номер телефона" type="tel" required>
                            <input placeholder="Введите email" type="email" required>
                        </form>

                    </div>
                    <div class="order-reg-right"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>


<button name="submit" type="submit" id="loginSubmit">зарегистрироваться</button>