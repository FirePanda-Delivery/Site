<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cоздание ресторана</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=c80bbf73-9f4a-4ac4-8f69-9b863ed3bb94"
        type="text/javascript"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
            <header>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logotype.svg" alt="logo"></a>
            </header>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-view-dashboard"></i>
                        Ресторан
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-link"></i>
                        Товары
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-widgets"></i>
                        Заказы
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-calendar"></i>
                        Выход
                    </a>
                </li>
            </ul>
        </div>
        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-notifications text-danger"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">Test User</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>
                    Make sure to keep all page content within the
                    <code>#content</code>.
                </p>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>