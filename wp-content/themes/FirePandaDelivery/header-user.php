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
    <header class="header">
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
                            <a class="close" href="#">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-block">
                    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logotype.svg"
                            alt="logo">
                    </div>
                    <div class="header-bottom-user">
                        <div class="header-cart">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                            <div class="header-cart-count">1</div>
                        </div>
                        <div class="header-avatar"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/logo-main.svg" alt="avatar"></div>
                    </div>
                </div>

            </div>
        </div>
    </header>