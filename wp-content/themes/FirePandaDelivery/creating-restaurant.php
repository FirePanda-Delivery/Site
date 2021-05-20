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
                            <div>Доставка в <span>г. Воронеж, ул. Ленина</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Января</span></div>
                            <div>ФИО заказчика <span>Иванов Иван Иванович</span></div>
                            <div>Телефон заказчика <span>89081234567</span></div>
                            <div>ФИО курьера <span> Тульпанская Лика Витальевна</span></div>
                            <div>Телефон заказчика <span>89101234985</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Роллы <span>4 шт</span></li>
                                        <li>Сочок <span>2 шт</span></li>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Роллы <span>4 шт</span></li>
                                        <li>Сочок <span>2 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>2</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Ленина</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Января</span></div>
                            <div>ФИО заказчика <span>Иванов Иван Иванович</span></div>
                            <div>Телефон заказчика <span>89081234567</span></div>
                            <div>ФИО курьера <span> Тульпанская Лика Витальевна</span></div>
                            <div>Телефон заказчика <span>89101234985</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Роллы <span>4 шт</span></li>
                                        <li>Сочок <span>2 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>3</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Ленина</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Января</span></div>
                            <div>ФИО заказчика <span>Иванов Иван Иванович</span></div>
                            <div>Телефон заказчика <span>89081234567</span></div>
                            <div>ФИО курьера <span> Тульпанская Лика Витальевна</span></div>
                            <div>Телефон заказчика <span>89101234985</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Роллы <span>4 шт</span></li>
                                        <li>Сочок <span>2 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>1</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Ленина</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Января</span></div>
                            <div>ФИО заказчика <span>Иванов Иван Иванович</span></div>
                            <div>Телефон заказчика <span>89081234567</span></div>
                            <div>ФИО курьера <span> Тульпанская Лика Витальевна</span></div>
                            <div>Телефон заказчика <span>89101234985</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Роллы <span>4 шт</span></li>
                                        <li>Сочок <span>2 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>2</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Ленина</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Января</span></div>
                            <div>ФИО заказчика <span>Иванов Иван Иванович</span></div>
                            <div>Телефон заказчика <span>89081234567</span></div>
                            <div>ФИО курьера <span> Тульпанская Лика Витальевна</span></div>
                            <div>Телефон заказчика <span>89101234985</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Роллы <span>4 шт</span></li>
                                        <li>Сочок <span>2 шт</span></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="info-rest-orders-item">
                            <h4>Заказ №<span>3</span></h4>
                            <div>Доставка в <span>г. Воронеж, ул. Ленина</span></div>
                            <div>Адрес ресторана <span>г. Воронеж, ул. Января</span></div>
                            <div>ФИО заказчика <span>Иванов Иван Иванович</span></div>
                            <div>Телефон заказчика <span>89081234567</span></div>
                            <div>ФИО курьера <span> Тульпанская Лика Витальевна</span></div>
                            <div>Телефон заказчика <span>89101234985</span></div>
                            <div>Товар <span>
                                    <ul>
                                        <li>Бургер Наггетс <span>1 шт</span></li>
                                        <li>Роллы <span>4 шт</span></li>
                                        <li>Сочок <span>2 шт</span></li>
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