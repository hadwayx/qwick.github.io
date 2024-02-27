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
                        <div class="responsibilitites content" id="content-4">
                            <div class="responsibilities__wrapper">
                                <div class="responsibilities__title title">Мои обязанности</div>
                                <div class="responsibilities__btns">
                                    <div class="responsibilities__inner">
                                        <button class="responsibilities__btn btn-3">Статистика</button>
                                        <button class="responsibilities__btn btn-1">Добавить</button>
                                    </div>
                                </div>
                                <div class="responsibilities__table">
                                    <div class="responsibilities__table-item">
                                        <p class="responsibilities__table-title">Функция</p>
                                        <p class="responsibilities__table-text">Успешная реализация планов по развитию компании и прибыли</p>
                                    </div>
                                    <div class="responsibilities__table-item">
                                        <p class="responsibilities__table-title">Обязанности функции</p>
                                        <p class="responsibilities__table-text">Нет информации</p>
                                    </div>
                                    <div class="responsibilities__table-item">
                                        <p class="responsibilities__table-title">Рекомендованные задачи плана на ближайшие несколько недель</p>
                                        <p class="responsibilities__table-text">Нет информации</p>
                                    </div>
                                    <div class="responsibilities__table-item">
                                        <p class="responsibilities__table-title">Список ошибок на этой функции</p>
                                        <p class="responsibilities__table-text">Нанимать персонал первой линии без опыта работы</p>
                                    </div>
                                    <div class="responsibilities__table-item">
                                        <p class="responsibilities__table-title">Список успешных действий на этой функции</p>
                                        <p class="responsibilities__table-text">Нет информации</p>
                                    </div>
                                    <div class="responsibilities__table-item">
                                        <p class="responsibilities__table-title">По каким вопросам можно обратиться</p>
                                        <p class="responsibilities__table-text">Любой</p>
                                    </div>
                                    <div class="responsibilities__table-item">
                                        <p class="responsibilities__table-title">Словарь</p>
                                        <p class="responsibilities__table-text">Нет информации</p>
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