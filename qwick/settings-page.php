<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Qwick</title>
</head>
<body>
    <main class="main">
        <section class="main__inner">
            <div class="main__wrapper">
                <div class="main__menu">
                    <div class="main__menu-wrapper">
                        <div class="main__menu-top">
                            <div class="main__menu-logo">
                                <p>Qwick</p>
                            </div>
                            <ul class="main__menu-list">
                                <li class="main__menu-item active-item" data-item="1">
                                    <i class="fa-solid fa-house active-fontawesome main__menu-img"></i>
                                    <a href="#" class="main__menu-link active-link">Главная</a>
                                    <div class="main__menu-line" id="menuline"></div>
                                </li>
                                <li class="main__menu-item" id="menuitem2" data-item="2">
                                    <i class="fa-solid fa-table-list main__menu-img"></i>
                                    <a href="ofc-page.php" class="main__menu-link">ОФС</a>
                                    <div class="main__question-inner" id="question2">
                                        <div class="main__question-img">
                                            <i class="fa-solid fa-question"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="main__menu-item" data-item="3">
                                    <i class="fa-regular fa-file main__menu-img"></i>
                                    <a href="reglaments-page.php" class="main__menu-link">Регламенты</a>
                                    <div class="main__menu-img">
                                        
                                    </div>
                                </li>
                                <li class="main__menu-item" data-item="4">
                                    <i class="fa-solid fa-list-check main__menu-img"></i>
                                    <a href="responsibilities-page.php" class="main__menu-link">Мои обязанности</a>
                                </li>
                                <li class="main__menu-item" data-item="5">
                                    <i class="fa-solid fa-file main__menu-img"></i>
                                    <a href="reports-page.php" class="main__menu-link">Отчеты</a>
                                </li>
                                <li class="main__menu-item" data-item="6">
                                    <i class="fa-regular fa-comment main__menu-img"></i>
                                    <a href="communications-page.php" class="main__menu-link">Коммуникации</a>
                                </li>
                                <li class="main__menu-item" data-item="7">
                                    <i class="fa-solid fa-users main__menu-img"></i>
                                    <a href="employees-page.php" class="main__menu-link">Сотрудники</a>
                                </li>
                                <li class="main__menu-item" data-item="8">
                                    <i class="fa-solid fa-wallet main__menu-img"></i>
                                    <a href="payment-page.php" class="main__menu-link">Оплата</a>
                                </li>
                                <li class="main__menu-item" data-item="9">
                                    <i class="fa-solid fa-gear main__menu-img"></i>
                                    <a href="settings-page.php" class="main__menu-link">Настройки</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main__menu-bottom">
                            <div class="main__menu-info">
                                <a href="#" class="main__menu-confidency">Политика конфиденциальности</a>
                                <p>Все права защищены</p>
                            </div>
                            <div class="main__menu-music">
                                <div class="main__music-img">
                                    <i class="fa-solid fa-headphones"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main__menu-background"></div>
                </div>
                <div class="main__content">
                    <div class="main__content-wrapper">
                        <div class="main__content-menu">
                            <div class="main__content-search">
                                <input type="text" class="main__content-input" id="search" value="Поиск......">
                                <div class="main__search-img">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <div class="main__content-user">
                                <div class="main__content-notification">
                                    <div class="main__notification-img">
                                        <i class="fa-regular fa-bell"></i>
                                        <div class="main__content-notification--dot"></div>
                                    </div>
                                </div>
                                <div class="main__content-account">
                                    <img class="main__account-img" src="images/account-image.jpg" alt="account image">
                                </div>
                                <div class="main__content-dropdown dots">
                                    <div class="dot-1"></div>
                                    <div class="dot-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="settings content" id="content-9">
                                <div class="settings__wrapper">
                                    <div class="settings__title title">Настройки</div>
                                    <div class="settings__tabs tabs">
                                        <div class="settings__tab tab active-tab">Основное</div>
                                        <div class="settings__tab tab">Дополнительное</div>
                                    </div>
                                    <div class="settings__content scroll-block" id="content-1">
                                        <div class="settings__content-inner">
                                            <p class="settings__content-clue">Название компании</p>
                                            <input type="text" class="settings__content-input" data-input="1">
                                        </div>
                                        <div class="settings__content-inner">
                                            <p class="settings__content-clue">Цель компании</p>
                                            <input type="text" class="settings__content-input" data-input="2">
                                        </div>
                                        <p class="settings__content-clue">Часовой пояс</p>
                                        <select name="" id="" class="settings__content-select settings__select">
                                            <!-- <option value="1">
                                                <input type="checkbox">
                                                <p class="settings__select-title">Часовой пояс</p>
                                                <input type="checkbox">
                                                <p class="settings__select-text"></p>
                                                <input type="checkbox">
                                                <p class="settings__select-text"></p>
                                                <input type="checkbox">
                                                <p class="settings__select-text"></p>
                                                <input type="checkbox">
                                                <p class="settings__select-text"></p>
                                            </option> -->
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select>
                                        <div class="settings__content-wrapper">
                                            <input class="settings__content-checkbox" type="checkbox">
                                            <label for=""></label>
                                            <p class="setting__content-clue">Указать график работы организации</p>
                                        </div>
                                        <select name="" id="" class="settings__content-select">
                                            <option value="1">График работы организации </option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select><br>
                                        <select name="" id="" class="settings__content-select">
                                            <option value="1">График работы Генерального директора</option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select><br>
                                        <select name="" id="" class="settings__content-select">
                                            <option value="1">График работы ключевых лиц</option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select>
                                        <div class="settings__content-btn">
                                            <a href="" class="settings__content-link">Добавить отдельный график для функций</a>
                                            <!-- <div class="settings__content-dropdown settings__dropdown">
                                                <div class="settings__dropdown-item">2021</div>
                                                <div class="settings__dropdown-item">2022</div>
                                            </div> -->
                                        </div>
                                        <p class="settings__content-clue">Выходные дни 2021</p>
                                        <p class="settings__content-text">
                                            22 февраля - Не указано <br>
                                            23 февраля - День защитника Отечества <br>
                                            8 марта - Международный женский день <br>
                                            1 мая - Праздник Весны и Труда <br>
                                            3 мая - Не указано <br>
                                            9 мая - День Победы <br>
                                            10 мая - Не указано <br>
                                            14 июня - Не указано <br>
                                            4 ноября - День народного единства <br>
                                            5 ноября - Не указано <br>
                                            31 декабря - Не указано
                                        </p>
                                    </div>
                                    <div class="settings__content" id="content-2">
                                        <div class="settings__content-item">
                                            <div class="settings__content-title"></div>
                                            <div class="settings__content-middle">
                                                <p class="settings__content-text"></p>
                                                <div class="settings__content-subtitle"></div>
                                            </div>
                                            <div class="settings__content-bottom">
                                                <p class="settings__content-text"></p>
                                                <input class="settings__content-input" type="number">
                                            </div>
                                        </div>
                                        <div class="settings__content-item">
                                            <div class="settings__content-title"></div>
                                            <div class="settings__content-middle">
                                                <p class="settings__content-text"></p>
                                                <div class="settings__content-subtitle"></div>
                                            </div>
                                            <div class="settings__content-bottom">
                                                <p class="settings__content-text"></p>
                                                <input class="settings__content-input" type="number">
                                            </div>
                                        </div>
                                        <div class="settings__content-item">
                                            <div class="settings__content-title"></div>
                                            <div class="settings__content-middle">
                                                <p class="settings__content-text"></p>
                                                <div class="settings__content-subtitle"></div>
                                            </div>
                                            <div class="settings__content-bottom">
                                                <p class="settings__content-text"></p>
                                                <input class="settings__content-input" type="number">
                                            </div>
                                        </div>
                                        <button class="settings__content-btn"></button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="js/Print.js"></script>
    <script src="js/Inputs.js"></script>
    <script src="js/Menu.js"></script>
    <script src="js/Popups.js"></script>
    <script src="js/Scroll.js"></script>
    <script src="js/Tabs.js"></script>
    <script src="js/main.js"></script>
</body>
</html>