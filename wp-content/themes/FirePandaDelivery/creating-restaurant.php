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
            <div class="container-fluid">
                <div class="info-rest-block">
                    <div class="info-rest-wrap-form">
                        <form id="info-rest-form">

                            <fieldset class="upload-file">
                                <input type="file" required="required" name="image" id="uploadfile"
                                    accept="image/jpeg,image/png">

                                <input type="submit" value="Добавить">
                            </fieldset>
                            <ul id="uploadImagesList">
                                <li class="item template">
                                    <span class="img-wrap">
                                        <img src="image.jpg" alt="">
                                    </span>
                                    <span class="delete-link" title="Удалить">Удалить</span>
                                </li>
                            </ul>

                            <input placeholder="Название ресторана" type="text" required autofocus>

                            <textarea placeholder="Описание" tabindex="2" required></textarea>

                            <input placeholder="От скольки доставка, руб" type="text" required>

                            <fieldset class="time-work">
                                <input placeholder="Время работы" type="time" required>
                                <div>до</div>
                                <input placeholder="Время работы" type="time" required>
                            </fieldset>

                            <a href="#" id="rest-category-btn">Категории товаров</a>

                            <button name="submit" type="submit" class="btn" id="user-contact-submit"
                                data-submit="...Sending">сохранить</button>
                        </form>
                    </div>
                    <div class="info-rest-category" id="hidden-rest-category">
                        <div class="category-create-item">
                            <div class="category-name">Категория</div>
                            <i class="fas fa-trash" onclick="swa()" type="button"></i>
                        </div>
                        <div class="category-create-item">
                            <div class="category-name">Категория</div>
                            <i class="fas fa-trash " onclick="swa()" type="button"></i>
                        </div>
                        <div class="category-create-item">
                            <div class="category-name">Категория</div>
                            <i class="fas fa-trash" onclick="swa()" type="button"></i>
                        </div>
                        <div class="category-create-item">
                            <div class="category-name">Категория</div>
                            <i class="fas fa-trash " onclick="swa()" type="button"></i>
                        </div>
                        <div class="category-create-item">
                            <div class="category-name">Категория</div>
                            <i class="fas fa-trash" onclick="swa()" type="button"></i>
                        </div>
                        <div class="category-create-item">
                            <div class="category-name">Категория</div>
                            <i class="fas fa-trash " onclick="swa()" type="button"></i>
                        </div>
                    </div>
                    <div id="overlay-cat">
                        <div class="popup">
                            <button class="close-cat" title="Закрыть окно" onclick="swa2()"><i
                                    class="fas fa-times fa-2x"></i></button>
                            <p class="zag">Вы уверены что хотите удалить данную категорию?</p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-cancel">Отмена</button>
                                <button id="btnDelete" class="btn btn-delete" type="button">Удалить</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-rest-product">
                    <div class="info-rest-product-wrap"></div>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>

</body>

</html>