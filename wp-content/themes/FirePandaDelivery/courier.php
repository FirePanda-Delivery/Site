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
                <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logotype.png" alt="logo">
                </div>
                <ul class="courier-menu">
                    <li>Преимущества</li>
                    <li>Как стать курьером</li>
                    <li>Часто задаваемые вопросы</li>
                </ul>
            </div>

        </div>
    </div>
</header>
<main>
    <section class="courier">
        <div class="container">
            <div class="courier-block">
                <h2>СТАНЬ КУРЬЕРОМ</br> ПО ДОСТАВКЕ ЕДЫ</h2>
                <a href="#" class="btn-login btn-courier">Стать курьером</a>

            </div>
        </div>
    </section>
    <section class="courier-advantages">
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
                        <div>Скидки на еду </div>
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
    <section class="courier-become">
        <div class="container">
            <div class="courier-become-block">
                <h2>КАК СТАТЬ КУРЬЕРОМ</h2>
                <div class="courier-become-items">
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
            </div>
        </div>
    </section>
    <section class="courier-questions">
        <div class="courier-block-questions">
            <div class="container">
                <h2 class="courier-questions-title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
                <div class="accordion">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is
                                the moon sometimes out during the day?</span><span class="icon"
                                aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis
                                ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is
                                the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis
                                ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we
                                ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis
                                ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much
                                does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis
                                ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do
                                airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis
                                ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
<?php get_footer();?>