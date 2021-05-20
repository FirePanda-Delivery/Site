<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirePandaDelivery</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=c80bbf73-9f4a-4ac4-8f69-9b863ed3bb94"
        type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-block">
                <a class="marker" href="#popup1"><img src="<?php echo get_template_directory_uri(); ?>/img/marker.png"
                        alt="marker"></a>

                <input type="text" class="search-block" id="search" placeholder="Укажите адрес доставки">

                <div id="popup1" class="overlay">
                    <div class="popup">
                        <input type="text" class="search-block-popup" id="search-block-popup"
                            placeholder="Укажите адрес доставки">
                        <div class="popup-map" id="popup-map">
                            <div id="map"></div>
                        </div>
                        <a class="close" href="#">&times;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">

            <div class="header-bottom-block">
                <div class="logo"><a href="/Site"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/logotype.svg" alt="logo"></a></div>
                <ul class="courier-menu">
                    <li>
                        <a href="#преимущества" class="active">Преимущества</a>
                    </li>
                    <li>
                        <a href="#стать" class="active">Как стать курьером</a>
                    </li>
                    <li>
                        <a href="#вопросы" class="active">Часто задаваемые вопросы</a>
                    </li>
                </ul>
                <nav class="mobile-menu">
                    <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
                    <label for="checkbox" class="mobile-menu__btn">
                        <div class="mobile-menu__icon"></div>
                    </label>
                    <div class="mobile-menu__container">
                        <ul class="mobile-menu__list">
                            <li class="mobile-menu__item"><a href="#преимущества"
                                    class="mobile-menu__link">Преимущества</a></li>
                            <li class="mobile-menu__item"><a href="#стать" class="mobile-menu__link">Как стать
                                    курьером</a>
                            </li>
                            <li class="mobile-menu__item"><a href="#вопросы" class="mobile-menu__link">Часто задаваемые
                                    вопросы</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>
</header>
<main>
    <section class="courier">
        <div class="container">
            <div class="courier-block">
                <h2>СТАНЬ КУРЬЕРОМ</br>
                    ПО ДОСТАВКЕ ЕДЫ</h2>
                <a href="#" class="btn-login btn-courier active">Стать курьером</a>
            </div>
        </div>
    </section>
    <section class="courier-advantages" id="преимущества">
        <div class="container">
            <div class="courier-advantages-block">
                <h2>ПРЕИМУЩЕСТВА</h2>
                <div class="courier-advantages-items">
                    <div class="courier-advantages-item">
                        <i class="fas fa-percent fa-3x"></i>
                        <div>Получайте бонусы</div>
                    </div>
                    <div class="courier-advantages-item">
                        <i class="fas fa-bicycle fa-3x"></i>
                        <div>Доставляйте на любом транспорте</div>
                    </div>
                    <div class="courier-advantages-item">
                        <i class="fas fa-pizza-slice fa-3x"></i>
                        <div>Скидки на еду
                        </div>
                    </div>
                    <div class="courier-advantages-item">
                        <i class="far fa-calendar-alt fa-3x"></i>
                        <div>Выбирайте время</div>
                    </div>
                    <div class="courier-advantages-item">
                        <i class="far fa-money-bill-alt fa-3x"></i>
                        <div>Ежедневный доход</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courier-become" id="стать">
        <div class="container">
            <div class="courier-become-block">
                <h2>КАК СТАТЬ КУРЬЕРОМ</h2>
                <div class="courier-become-items ">
                    <div class="courier-become-item">
                        <div class="courier-number">1</div>
                        <div>Заполнить форму и отправить</div>
                    </div>
                    <div class="courier-become-item">
                        <div class="courier-number">2</div>
                        <div>Заполнить форму и отправить</div>
                    </div>
                    <div class="courier-become-item">
                        <div class="courier-number">3</div>
                        <div>Заполнить форму и отправить</div>
                    </div>
                    <div class="courier-become-item">
                        <div class="courier-number">4</div>
                        <div>Заполнить форму и отправить</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courier-form">
        <div class="container">
            <div class="courier-block-form">
                <form id="contact" action="" method="post">
                    <h3>Заполните форму и с вами скоро свяжутся</h3>
                    <fieldset>
                        <input placeholder="Ваше имя" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Ваш email" id="email" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Ваш номер телефона" type="tel" id="phone" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Ваш город" type="text" tabindex="4" required>
                    </fieldset>
                    <div class="input-checkbox">
                        <input type="checkbox" name="policy" id="policy" class="policy">
                        <label for="policy" class="policy-label">
                            Я принимаю условия
                            <a href="#" target="_blank">Пользовательского соглашения</a>
                        </label>
                    </div>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit">отправить</button>
                    </fieldset>
                </form>

            </div>
        </div>
    </section>
    <section class="courier-questions" id="вопросы">
        <div class="courier-block-questions">
            <div class="container">
                <h2 class="courier-questions-title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
                <div class="accordion">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">У меня есть основное место работы, можно ли совмещать?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Да, обычно курьеры могут совмещать основную работу с подработкой.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Можно ли выполнять заказы по выходным?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Да, вы сами выбираете доступное время и районы.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">Выдают ли одежду с логотипом?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Курьерская служба предоставит вам красную одежду с логотипом сервиса после начала
                                сотрудничества. Не забывайте надевать её на заказы.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordion-title">Какие документы нужны для оформления?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Гражданам РФ: паспорт с пропиской и медицинская книжка.</p>
                            <p>Другое гражданство: паспорт, регистрация, медицинская книжка, миграционная карта с целью
                                въезда «Работа», СНИЛС, ИНН, ДМС (медицинская страховка). А также ВНЖ, патент с чеками
                                или РВП для города, в котором вы хотите работать.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordion-title">Есть ли страхование во время выполнения заказов?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Да — страховое возмещение можно получить в случае серьёзных травм, которые случились с
                                вами во время слота. За информацией нужно будет обратиться в службу поддержки.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>
<?php get_footer();?>