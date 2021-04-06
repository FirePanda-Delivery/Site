<?php get_header(); ?>
<main>
    <section class="user-account">
        <div class="container">
            <h2>ЛИЧНЫЙ КАБИНЕТ</h2>
            <div class="user-acc-block">
                <div class="user-acc-sidebar">
                    <div class="user-acc-sidebar-top">
                        <ul>
                            <li>Профиль</li>
                            <li>Мои заказы</li>
                            <li>Мои скидки</li>
                            <li>Выход</li>
                        </ul>
                    </div>
                    <div class="user-acc-sidebar-bottom">
                        <div class="discounts discounts-info">
                            <h4>АКЦИИ И СКИДКИ</h4>
                            <div class="discounts-checkbox">
                                <label for="discount" class="discount-label">
                                    Уведомление о новых акциях
                                </label>
                                <input type="checkbox" name="discount" id="discount" class="discount">
                            </div>
                        </div>
                        <div class="discounts">
                            <h4>ИНФОРМАЦИЯ О ЗАКАЗАХ</h4>
                            <div class="discounts-checkbox">
                                <label for="discount" class="discount-label">
                                    по электронной почте
                                </label>
                                <input type="checkbox" name="discount" id="discount" class="discount">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-acc-profile">
                    <h4>профиль</h4>
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
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">сохранить</button>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>

    </section>
</main>
<?php get_footer();?>