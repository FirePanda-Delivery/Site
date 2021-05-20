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

<body>
    <header id="header-main" class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top-block">
                    <a class="marker" href="#popup1"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/marker.png" alt="marker"></a>

                    <input type="text" class="search-block" id="search" placeholder="Укажите адрес доставки">

                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <div class="search-wrapper">
                                <input type="text" class="search-block-popup" id="search-block-popup"
                                    placeholder="Адрес доставки">
                                <button id="btn-search-popup" onclick="submitAddress()">Применить</button>
                            </div>
                            <div class="popup-map" id="popup-map">
                                <div id="map"></div>
                            </div>
                            <a class="close" href="#">
                                <i class="fas fa-times fa-2x"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-wrapp">
                    <div class="header-bottom-block">
                        <div class="logo">
                            <a href="/Site"><img src="<?php echo get_template_directory_uri(); ?>/img/logotype.svg"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="header-bottom-user">
                        <div class="header-cart">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                            <div class="header-cart-count">1</div>
                        </div>
                        <div class="btn-login" id="btnLogin" onclick="loginWindow()">Войти</div>
                    </div>
                </div>
            </div>
            <div id="LoginModalWindow">
                <div class="popup">
                    <button class="close-cat" title="Закрыть окно" onclick="loginWindow2()">
                        <i class="fas fa-times fa-2x"></i>
                    </button>

                    <div class="modal-login-wrap">
                        <div class="login-block-form">
                            <form id="loginForm" action="" method="post">
                                <h3>Регистрация</h3>
                                <input placeholder="Введите имя" type="text" required>
                                <input placeholder="Введите фамилию" type="text" required>
                                <input placeholder="Введите логин" type="text" required>
                                <input placeholder="Введите пароль" type="password" required>
                                <input placeholder="Повторите пароль" type="password" required>
                                <input placeholder="Введите номер телефона" type="tel" required>
                                <input placeholder="Введите email" type="email" required>
                                <div class="input-checkbox">
                                    <input type="checkbox" name="policy" id="policy" class="policy">
                                    <label for="policy" class="policy-label">
                                        Я принимаю условия
                                        <a href="#" target="_blank">Пользовательского соглашения</a>
                                    </label>
                                </div>
                                <button name="submit" type="submit" id="loginSubmit">зарегистрироваться</button>
                                <p id="loginLinkEnter">Уже есть аккаунт? Войти</p>
                            </form>

                            <form id="loginForm2" action="" method="post">
                                <h3>Вход</h3>
                                <input placeholder="Введите логин" type="text" required>
                                <input placeholder="Введите пароль" type="password" required>
                                <button name="submit" type="submit" id="loginSubmit">войти</button>
                                <p id="loginLinkRegistr">Нет аккаунта? Зарегистрироваться</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>