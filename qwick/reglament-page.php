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
                                    <i class="fa-solid fa-table-list main__menu-img active-fontawesome"></i>
                                    <a href="#" class="main__menu-link">ОФС</a>
                                    <div class="main__question-inner" id="question2">
                                        <div class="main__question-img">
                                            <i class="fa-solid fa-question"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="main__menu-item" data-item="3">
                                    <i class="fa-regular fa-file main__menu-img"></i>
                                    <a href="#" class="main__menu-link">Регламенты</a>
                                    <div class="main__menu-img">
                                        
                                    </div>
                                </li>
                                <li class="main__menu-item" data-item="4">
                                    <i class="fa-solid fa-list-check main__menu-img"></i>
                                    <a href="#" class="main__menu-link">Мои обязанности</a>
                                </li>
                                <li class="main__menu-item" data-item="5">
                                    <i class="fa-solid fa-file main__menu-img"></i>
                                    <a href="#" class="main__menu-link">Отчеты</a>
                                </li>
                                <li class="main__menu-item" data-item="6">
                                    <i class="fa-regular fa-comment main__menu-img"></i>
                                    <a href="#" class="main__menu-link">Коммуникации</a>
                                </li>
                                <li class="main__menu-item" data-item="7">
                                    <i class="fa-solid fa-users main__menu-img"></i>
                                    <a href="#" class="main__menu-link">Сотрудники</a>
                                </li>
                                <li class="main__menu-item" data-item="8">
                                    <i class="fa-solid fa-wallet main__menu-img"></i>
                                    <a href="#" class="main__menu-link">Оплата</a>
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
                        <div class="reglaments__item content">
                            <div class="reglaments__item-title">Регламенты</div>
                            <div class="reglaments__item-descr">
                                <div class="reglaments__item-wrapper">
                                    <div class="reglaments__item-img">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </div>
                                    <div class="reglaments__item-action">Напишите</div>
                                </div>
                                <div class="reglaments__item-wrapper">
                                    <div class="reglaments__item-img">
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <div class="reglaments__item-action">Проверьте</div>
                                </div>
                                <div class="reglaments__item-wrapper">
                                    <div class="reglaments__item-img">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="reglaments__item-action">Одобрите</div>
                                </div>
                            </div>
                            <div class="reglaments__item-subtitle">Добавление регламента</div>
                            <div class="reglaments__item-text">Где находится сотрудник</div>
                            <div class="reglaments__item-location">Не имеет значения</div>
                            <div class="reglaments__item-input">
                                Название
                                <input type="text" placeholder="Например, правила предоставления скидок в отделе продаж">
                            </div>
                            <div class="reglaments__item-text">Кому</div>
                            <div class="reglaments__item-whom">Выберите кому будет доступен регламент</div>
                            <textarea name="" id="" cols="30" rows="10" class="reglaments__item-textarea">
                                <div class="reglaments__textarea-item">
                                    <i class="fa-solid fa-plus"></i>
                                    <input class="reglaments__textarea-input" type="text" placeholder="Правила предоставления скидок в отделе продаж">
                                    <div class="reglaments__textarea-dropdown">
                                        <i class="fa-solid fa-arrow-up"></i>
                                        <i class="fa-solid fa-xmark"></i>
                                        <i class="fa-solid fa-arrow-down"></i>
                                    </div>
                                    <i class="fa-solid fa-bars"></i>
                                </div>
                                <i class="fa-solid fa-arrow-left"></i>
                                <i class="fa-solid fa-arrow-right"></i>
                                <i class="fa-solid fa-expand"></i>
                            </textarea>
                            <div class="reglaments__item-checkbox">
                                <input type="checkbox">
                                Тестирование
                                <i class="fa-solid fa-question"></i>
                            </div>
                            <div class="reglaments__item-question">
                                <div class="reglaments__item-inner">
                                    <div class="reglaments__question-title">Вопрос:</div>
                                    <div class="reglaments__question-text">Какую максимальную скидку мы можем предоставить клиенту?</div>
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                                <div class="reglaments__question-inner">
                                    <div class="reglaments__question-answer">Ответ:</div>
                                    <div class="reglaments__question-content">Верный</div>
                                    <div class="reglaments__question-text">Скидку в размере 20% процентов на все модели компании Apple</div>
                                    <button class="reglaments__question-btn">Добавить ответ</button>
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </div>
                            <div class="reglaments__item-question">
                                <div class="reglaments__item-inner">
                                    <div class="reglaments__question-title">Вопрос:</div>
                                    <div class="reglaments__question-text">Какую максимальную скидку мы можем предоставить клиенту?</div>
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                                <div class="reglaments__question-inner">
                                    <div class="reglaments__question-answer">Ответ:</div>
                                    <div class="reglaments__question-content">Неверный</div>
                                    <div class="reglaments__question-text">Скидку в размере 50% процентов на все модели</div>
                                    <button class="reglaments__question-btn">Добавить ответ</button>
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </div>
                            <button class="reglaments__item-add">Добавить вопрос</button>
                            <div class="reglamens__item-btns">
                                <button class="reglaments__item-btn">Отмена</button>
                                <button class="reglaments__item-btn">Сохранить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </seciton>
    </main>

    <script src="js/Inputs.js"></script>
    <script src="js/Menu.js"></script>
    <script src="js/Popups.js"></script>
    <script src="js/Scroll.js"></script>
    <script src="js/Tabs.js"></script>
    <script src="js/main.js"></script>
</body>
</html>