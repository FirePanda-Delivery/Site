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
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logotype2.svg" alt="logo"></a>
            </header>
            <ul class="nav">
                <li id="navRestaurant">
                    <a href="#">
                        Ресторан
                    </a>
                </li>
                <li id="navCategory">
                    <a href="#">
                        Категории
                    </a>
                </li>
                <li id="navProducts">
                    <a href="#">
                        Товары
                    </a>
                </li>
                <li id="navOrders">
                    <a href="#">
                        Заказы
                    </a>
                </li>
                <li id="navExit" onclick="deleteExite()">
                    <a href="#">
                        Выход
                    </a>
                </li>
            </ul>
        </div>
        <!-- Content -->
        <div id="content-prod">
            <div class="container-fluid">
                <div class="info-rest-block" id="infoRestBlock">
                    <h2>Информация о ресторане</h2>
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
                            <input placeholder="От скольки доставка, руб" type="number" required>
                            <fieldset class="time-work">
                                <input placeholder="Время работы" type="time" required>
                                <div>до</div>
                                <input placeholder="Время работы" type="time" required>
                            </fieldset>
                            <textarea placeholder="Описание" required></textarea>
                            <fieldset class="info-rest-btns">
                                <button name="info-rest-save" type="submit" class="btn"
                                    id="info-rest-save">сохранить</button>
                                <button name="info-rest-send" type="submit" class="btn"
                                    id="info-rest-send">отправить</button>
                            </fieldset>

                        </form>
                        <div class="info-rest-ava">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
                        </div>
                    </div>

                </div>
                <div class="info-rest-category" id="infoRestCategory">
                    <h2>Категории товаров</h2>
                    <div class=" info-rest-cat-create">
                        <div class="info-rest-category-wrap">
                            <div class="category-create-item">
                                <div class="category-name">Бургеры</div>
                                <i class="fas fa-trash" onclick="swa()" type="button"></i>
                            </div>
                            <div class="category-create-item">
                                <div class="category-name">Роллы</div>
                                <i class="fas fa-trash " onclick="swa()" type="button"></i>
                            </div>
                            <div class="category-create-item">
                                <div class="category-name">Пицца</div>
                                <i class="fas fa-trash" onclick="swa()" type="button"></i>
                            </div>
                            <div class="category-create-item">
                                <div class="category-name">Напитки</div>
                                <i class="fas fa-trash " onclick="swa()" type="button"></i>
                            </div>
                            <div class="category-create-item">
                                <div class="category-name">Салаты</div>
                                <i class="fas fa-trash" onclick="swa()" type="button"></i>
                            </div>
                            <div class="category-create-item">
                                <div class="category-name">Десерты</div>
                                <i class="fas fa-trash " onclick="swa()" type="button"></i>
                            </div>
                            <div class="category-create-item">
                                <div class="category-name">Кофе</div>
                                <i class="fas fa-trash " onclick="swa()" type="button"></i>
                            </div>
                        </div>
                        <div class="info-rest-cat-new-cat">
                            <input placeholder="Введите название категории" type="text">
                            <button type="submit" class="btn" id="create-new-cat">Добавить</button>
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
                <div class="info-rest-product" id="infoRestProduct">
                    <h2>товары</h2>
                    <div class="info-rest-product-wrap">
                        <form id="createProduct">

                            <fieldset class="upload-file">
                                <input type="file" required name="image-product" id="ImgProd"
                                    accept="image/jpeg,image/png">
                                <input type="submit" value="Добавить">
                            </fieldset>

                            <ul id="uploadImagesProd">
                                <li class="item template">
                                    <span class="img-wrap">
                                        <img src="image.jpg" alt="">
                                    </span>
                                    <span class="delete-link" title="Удалить">Удалить</span>
                                </li>
                            </ul>

                            <input placeholder="Название товара" type="text" required>
                            <textarea placeholder="Описание" required></textarea>
                            <input placeholder="От скольки доставка, руб" type="number" required>
                            <input placeholder="Цена" type="number" required>
                            <input placeholder="Вес, 100г " type="number" required>
                            <select name="list1" id="selectCatProd" autofocus>
                                <option>Выберите категорию из списка</option>
                                <option>Бургер</option>
                                <option>Напитки</option>
                                <option>Пицца</option>
                            </select>
                            <fieldset class="create-prod-btn">
                                <button name="saveprod" type="submit" class="btn"
                                    id="save-prod-submit">сохранить</button>
                                <button name="saveprod" type="submit" class="btn"
                                    id="cancel-prod-submit">отмена</button>
                            </fieldset>

                        </form>
                    </div>
                    <div class="products-sale-wrap">
                        <h4>Товары в продаже</h4>
                        <div class="products-sale-block">
                            <div class="products-sale-item">
                                <div class="prod-edit">редактировать</div>
                                <form id="productsSaleItem">
                                    <fieldset class="prod-sale-top">

                                        <fieldset class="prod-sale-info">
                                            <fieldset class="upload-file">
                                                <input type="file" required name="image-product" id="ImgProd"
                                                    accept="image/jpeg,image/png">
                                                <input type="submit" value="Добавить">
                                            </fieldset>

                                            <ul id="uploadImagesProd">
                                                <li class="item template">
                                                    <span class="img-wrap">
                                                        <img src="image.jpg" alt="">
                                                    </span>
                                                    <span class="delete-link" title="Удалить">Удалить</span>
                                                </li>
                                            </ul>

                                            <input placeholder="Название товара" type="text" required>
                                            <select name="list1" id="CatProd">
                                                <option>Бургер</option>
                                                <option>Напитки</option>
                                                <option>Пицца</option>
                                            </select>
                                            <textarea placeholder="Описание" required></textarea>

                                        </fieldset>
                                        <fieldset class="ready-price">
                                            <input placeholder="Цена" type="number" required>
                                            <span>руб</span>
                                        </fieldset>
                                        <fieldset class="ready-weight">
                                            <input placeholder="Вес" type="number" required>
                                            <span>г</span>
                                        </fieldset>
                                        <fieldset class="delete-prod-card">
                                            <i class="fas fa-trash" onclick="deleteProd()" type="button"></i>
                                        </fieldset>
                                    </fieldset>

                                    <fieldset class="save-ready-prod-btn">
                                        <button name="savereadyprod" type="submit" class="btn"
                                            id="saveProdReady">сохранить</button>
                                        <button name="savereadyprod" type="submit" class="btn"
                                            id="cancelProdReady">отмена</button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="products-sale-item">
                                <div class="prod-edit">редактировать</div>
                                <form id="productsSaleItem">
                                    <fieldset class="prod-sale-top">

                                        <fieldset class="prod-sale-info">
                                            <fieldset class="upload-file">
                                                <input type="file" required name="image-product" id="ImgProd"
                                                    accept="image/jpeg,image/png">
                                                <input type="submit" value="Добавить">
                                            </fieldset>

                                            <ul id="uploadImagesProd">
                                                <li class="item template">
                                                    <span class="img-wrap">
                                                        <img src="image.jpg" alt="">
                                                    </span>
                                                    <span class="delete-link" title="Удалить">Удалить</span>
                                                </li>
                                            </ul>

                                            <input placeholder="Название товара" type="text" required>
                                            <select name="list1" id="CatProd">
                                                <option>Бургер</option>
                                                <option>Напитки</option>
                                                <option>Пицца</option>
                                            </select>
                                            <textarea placeholder="Описание" required></textarea>

                                        </fieldset>
                                        <fieldset class="ready-price">
                                            <input placeholder="Цена" type="number" required>
                                            <span>руб</span>
                                        </fieldset>
                                        <fieldset class="ready-weight">
                                            <input placeholder="Вес" type="number" required>
                                            <span>г</span>
                                        </fieldset>
                                        <fieldset class="delete-prod-card">
                                            <i class="fas fa-trash" onclick="" type="button"></i>
                                        </fieldset>
                                    </fieldset>

                                    <fieldset class="save-ready-prod-btn">
                                        <button name="savereadyprod" type="submit" class="btn"
                                            id="saveProdReady">сохранить</button>
                                        <button name="savereadyprod" type="submit" class="btn"
                                            id="cancelProdReady">отмена</button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="products-sale-item">
                                <div class="prod-edit">редактировать</div>
                                <form id="productsSaleItem">
                                    <fieldset class="prod-sale-top">

                                        <fieldset class="prod-sale-info">
                                            <fieldset class="upload-file">
                                                <input type="file" required name="image-product" id="ImgProd"
                                                    accept="image/jpeg,image/png">
                                                <input type="submit" value="Добавить">
                                            </fieldset>

                                            <ul id="uploadImagesProd">
                                                <li class="item template">
                                                    <span class="img-wrap">
                                                        <img src="image.jpg" alt="">
                                                    </span>
                                                    <span class="delete-link" title="Удалить">Удалить</span>
                                                </li>
                                            </ul>

                                            <input placeholder="Название товара" type="text" required>
                                            <select name="list1" id="CatProd">
                                                <option>Бургер</option>
                                                <option>Напитки</option>
                                                <option>Пицца</option>
                                            </select>
                                            <textarea placeholder="Описание" required></textarea>

                                        </fieldset>
                                        <fieldset class="ready-price">
                                            <input placeholder="Цена" type="number" required>
                                            <span>руб</span>
                                        </fieldset>
                                        <fieldset class="ready-weight">
                                            <input placeholder="Вес" type="number" required>
                                            <span>г</span>
                                        </fieldset>
                                        <fieldset class="delete-prod-card">
                                            <i class="fas fa-trash" onclick="" type="button"></i>
                                        </fieldset>
                                    </fieldset>

                                    <fieldset class="save-ready-prod-btn">
                                        <button name="savereadyprod" type="submit" class="btn"
                                            id="saveProdReady">сохранить</button>
                                        <button name="savereadyprod" type="submit" class="btn"
                                            id="cancelProdReady">отмена</button>
                                    </fieldset>
                                </form>
                            </div>

                        </div>

                        <div id="overlayProd">
                            <div class="popup">
                                <button class="close-cat" title="Закрыть окно" onclick="deleteProd2()"><i
                                        class="fas fa-times fa-2x"></i></button>
                                <p class="zag">Вы уверены что хотите удалить данный товар?</p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-cancel">Отмена</button>
                                    <button id="btnDelete" class="btn btn-delete" type="button">Удалить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-rest-orders" id="infoRestOrders">
                    <h2>Заказы в процессе</h2>
                    <div class="info-rest-orders-wrap">
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>1</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Ленина, 37Д</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. 9 Января, 204</span></div>
                            <div>ФИО заказчика <span>Мельников Иван Александрович</span></div>
                            <div>Телефон заказчика <span>89081234567</span></div>
                            <div>ФИО курьера <span> Тульпанская Лика Витальевна</span></div>
                            <div>Телефон заказчика <span>89101234985</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Твистер оригинальный <span>24 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>2</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Айдаровская улица, 329</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Абрикосовая, 1Б</span></div>
                            <div>ФИО заказчика <span>Князева Эмма Владиславовна</span></div>
                            <div>Телефон заказчика <span>89435980321</span></div>
                            <div>ФИО курьера <span> Майоров Павел Демидович</span></div>
                            <div>Телефон заказчика <span>89100987867</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Баскет фри <span> 4 шт</span></li>
                                        <li>Пепси Макс 0,5 <span> 2 шт</span></li>
                                        <li>Пирожок с вишней <span> 1 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>3</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Автодорожная, 55</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Абрикосовая, 1Б</span></div>
                            <div>ФИО заказчика <span>Королев Илья Даниилович</span></div>
                            <div>Телефон заказчика <span>8997321001</span></div>
                            <div>ФИО курьера <span> Иванов Глеб Давидович</span></div>
                            <div>Телефон заказчика <span>89107776435</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Комбо с 2 Сандерс Баскетами <span> 1 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>1</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Беляева</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. 9 Января, 204A</span></div>
                            <div>ФИО заказчика <span>Прусикин Иван Петрович</span></div>
                            <div>Телефон заказчика <span>89704653827</span></div>
                            <div>ФИО курьера <span> Никифорова Ярослава Егоровна</span></div>
                            <div>Телефон заказчика <span>88904756332</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Микс Бокс <span> 2 шт</span></li>
                                        <li>2 Картофеля фри стандартных <span> 2 шт</span></li>
                                        <li>Соус Барбекю <span> 2 шт</span></li>
                                        <li> Кофе Капучино 0,4 <span> 2 шт</span></li>
                                        <li> Чизбургер Де Люкс <span> 2 шт</span></li>

                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>2</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Дарвина, 3В</span></div>
                            <div>Адрес ресторана <span>г. ул. Абрикосовая, 1Б</span></div>
                            <div>ФИО заказчика <span>Цветкова Алия Мироновна</span></div>
                            <div>Телефон заказчика <span>89995762317</span></div>
                            <div>ФИО курьера <span> Шарова Ксения Александровна</span></div>
                            <div>Телефон заказчика <span>8007653399</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Сок J7 яблочный <span> 1 шт</span></li>
                                        <li>Картофель фри стандартный <span> 1 шт</span></li>
                                        <li>Донат Карамельный вкус <span> 1 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>3</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Димитрова, 8</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Абрикосовая, 1Б</span></div>
                            <div>ФИО заказчика <span>Никулина Ника Артёмовна</span></div>
                            <div>Телефон заказчика <span>89764490810</span></div>
                            <div>ФИО курьера <span> Фомин Максим Владимирович</span></div>
                            <div>Телефон заказчика <span>89087654651</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Кофе Латте 0,4 <span> 5 шт</span></li>
                                        <li>Твистер Джуниор Спешл <span>6 шт</span></li>
                                        <li>Шефбургер <span>2 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="info-rest-exit" id="infoRestExit">
                    <div id="overlayExit">
                        <div class="popup">
                            <button class="close-cat" title="Закрыть окно" onclick="deleteExite2()"><i
                                    class="fas fa-times fa-2x"></i></button>
                            <p class="zag">Вы уверены, что хотите выйти?</p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-cancel">Отмена</button>
                                <button id="btnDelete" class="btn btn-delete" type="button"><a href="/">
                                        Выйти</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>

    <div class="preloader">
        <div class="preloader-container">
            <span class="animated-preloader"></span>
        </div>
    </div>

</body>

</html>