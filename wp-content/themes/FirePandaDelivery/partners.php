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
                <ul class="restaurant-menu">
                    <li>
                        <a href="#подключить" class="active">Как быстро подключить ресторан</a>
                    </li>
                    <li>
                        <a href="#преимущества" class="active">Наши основные преимущества</a>
                    </li>
                    <li>
                        <a href="#работа" class="active">Как работает FPD</a>
                    </li>
                    <li>
                        <a href="#вопросы" class="active">Популярные вопросы</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
<main>
    <section class="restaurant">
        <div class="container">
            <div class="restaurant-block">
                <h2>Станьте партнёром </br>сервиса FirePandaDelivery
                </h2>
                <a href="#кнопка" class="btn-login btn-courier active">Подключиться</a>
            </div>
        </div>
    </section>

    <section class="restaurant-plug">
        <div class="container">
            <div class="restaurant-plug-block">
                <h2>Как подключить ресторан</h2>
                <div class="restaurant-plug-cards">
                    <div class="restaurant-plug-card" id="подключить">
                        <div class="restaurant-plug-number">1.</div>
                        <div class="restaurant-descr">
                            <div class="restaurant-descr-title">Заполните форму</div>
                            <div class="restaurant-descr-text">Мы отправим вам на почту счет для акцепта оферты.</div>
                        </div>
                    </div>
                    <div class="restaurant-plug-card">
                        <div class="restaurant-plug-number">2.</div>
                        <div class="restaurant-descr">
                            <div class="restaurant-descr-title">Оплатите оферту</div>
                            <div class="restaurant-descr-text">В письме будет инструкция по оплате 100р с р/с
                                организации, которую вы указали при заполнении формы.</div>
                        </div>
                    </div>
                    <div class="restaurant-plug-card">
                        <div class="restaurant-plug-number">3.</div>
                        <div class="restaurant-descr">
                            <div class="restaurant-descr-title">Зайдите в личный кабинет</div>
                            <div class="restaurant-descr-text">Мы отправим вам на почту логин и пароль для входа в
                                личный кабинет.</div>
                        </div>
                    </div>
                    <div class="restaurant-plug-card">
                        <div class="restaurant-plug-number">4.</div>
                        <div class="restaurant-descr">
                            <div class="restaurant-descr-title">Зайдите в личный кабинет</div>
                            <div class="restaurant-descr-text">Мы отправим вам на почту логин и пароль для входа в
                                личный кабинет.
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-plug-card">
                        <div class="restaurant-plug-number">5.</div>
                        <div class="restaurant-descr">
                            <div class="restaurant-descr-title">Запускайтесь в сервисе</div>
                            <div class="restaurant-descr-text">После заполнения всех данных о ресторане, вы сможете
                                самостоятельно активировать ресторан, нажав на кнопку в левом верхнем углу личного
                                кабинета.</div>
                        </div>
                    </div>
                    <div class="restaurant-plug-card">
                        <div class="restaurant-plug-number">6.</div>
                        <div class="restaurant-descr">
                            <div class="restaurant-descr-title">Запускайтесь в сервисе</div>
                            <div class="restaurant-descr-text">После заполнения всех данных о ресторане, вы сможете
                                самостоятельно активировать ресторан, нажав на кнопку в левом верхнем углу личного
                                кабинета.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="restaurant-advantages">
        <div class="container">
            <div class="restaurant-advantages-block">
                <h2>Наши основные преимущества</h2>
                <div class="restaurant-advantages-items">
                    <div class="restaurant-advantages-descr" id="преимущества">
                        <div>
                            <i class="fas fa-shopping-cart fa-2x"></i>
                            <div><span>Готовый канал продаж</span><br> Размещаем ваше
                                меню на своем сайте, а вы
                                платите только за полученные заказы</div>
                        </div>
                        <div>
                            <i class="far fa-clock fa-2x"></i>
                            <div><span>Доставим клиенту заказ вовремя</span> <br>С
                                помощью
                                нашей курьерской службы
                                FirePandaDelivery</div>
                        </div>
                        <div>
                            <i class="fas fa-chart-line fa-2x"></i>
                            <div> <span>Продвижение ресторана</span> <br>Продвигаем
                                ваш
                                ресторан на нашем сайте и
                                мобильных приложениях с аудиторией более 4 млн человек</div>
                        </div>

                    </div>
                    <div class="restaurant-advantages-descr">
                        <div>
                            <i class="fas fa-percent fa-2x"></i>
                            <div>
                                <span>Рост продаж</span> <br>Средний прирост заказов у партнеров FirePandaDelivery +20%
                                за первый месяц сотрудничества
                            </div>
                        </div>
                        <div>
                            <i class="far fa-plus-square fa-2x"></i>
                            <div>
                                <span>Простой процесс интеграции</span>
                                <br>Для
                                работы
                                с заказами вы можете
                                использовать наше удобное приложение
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-user-clock fa-2x"></i>
                            <div>
                                <span>Поддержка 24/7</span> <br>Наш
                                колл-центр
                                сможет
                                помочь голодному клиенту с
                                заказом в любое время круглый год
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="restaurant-work">
        <div class="container">
            <div class="restaurant-work-block">
                <h2>Как работает FPD</h2>
                <img id="работа" class="restaurant-work-img"
                    src="<?php echo get_template_directory_uri(); ?>/img/restaurant-work.svg">
            </div>

        </div>
    </section>
    <section class="courier-questions">
        <div class="courier-block-questions">
            <div class="container">
                <h2 class="courier-questions-title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
                <div class="accordion" id="вопросы">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">Какие условия размещения?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Пользователь сервиса размещает заказ на сервисе, FPD передает заказ. Вы готовите.
                                Доставщики и их курьеры доставляют заказ пользователю. Мы работаем за стоимость услуг с
                                каждого оформленного на сервисе заказа.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Что делать, если закончились продукты?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                Вы можете сразу же добавить блюда «стоп-лист» в личном кабинете в приложении — клиенты
                                не будут их видеть, пока вы не снимете ограничение.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">Что делать, если мы не услышали уведомление о заказе?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>
                                В анкете вы впишете два номера телефона — на них позвонит робот с напоминанием, если
                                заказ не принят в течение 2 минут.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordion-title">Где и как принимать заказ?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Работа с заказами ведётся в приложении «FPD для ресторанов». Пользуйтесь им через:
                            </p>
                            <p>— веб-версию, которую мы бесплатно подключим на вашем компьютере</p>
                            <p>— мобильные устройства, скачав приложение на IOS или Android</p>
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