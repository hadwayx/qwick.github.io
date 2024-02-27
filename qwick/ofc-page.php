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
                            <div class="ofc content" id="content-2">
                                <div class="ofc__wrapper">
                                    <div class="ofc__view">
                                        <select name="view" id="view">
                                            <option value="1">Вид</option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select>
                                    </div>
                                    <div class="ofc__zoom">
                                        <div class="ofc__zoom-minus" id="zoomminus">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <div class="ofc__zoom-number" id="zoomnumber">100%</div>
                                        <div class="ofc__zoom-plus" id="zoomplus">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="ofc__canvas scroll-block" id="canvas">
                                        <div class="ofc__content">
                                            <div class="ofc__content-item ofc__main-creator">
                                                <div class="ofc__content-title">Основатель</div>
                                                <div class="ofc__content-person">
                                                    <div class="ofc__content-img">
                                                        <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="ofc__content-name" id="ofcname">Иван Иванов Иванович</div>
                                                </div>
                                                <div class="ofc__content-date">
                                                    <div class="ofc__date-img">
                                                        <i class="fa-regular fa-file-lines"></i>
                                                    </div>
                                                    <div class="ofc__date-number">
                                                        <span class="ofc__date-year" id="ofcyear">20</span>
                                                        /
                                                        <span class="ofc__date-month" id="ofcmonth">0</span>
                                                        /
                                                        <span class="ofc__date-day" id="ofcday">0</span>
                                                    </div>
                                                    <div class="ofc__date-question question">
                                                        <i class="fa-solid fa-question"></i>
                                                    </div>
                                                </div>
                                                <div class="ofc__content-okr">
                                                    <div class="ofc__okr-title">ОКР:</div>
                                                    <p class="ofc__content-text">Процветающая компания, производящая безупречный продукт</p>
                                                </div>
                                                <div class="ofc__content-dots dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                                <div class="ofc__content-lines" id="linefromcreator"></div>
                                            </div>
                                            <div class="ofc__content-items--1">
                                                <div class="ofc__content-item ofc__item-director">
                                                    <div class="ofc__content-title">Генеральный директор</div>
                                                    <div class="ofc__content-person">
                                                        <div class="ofc__content-img">
                                                            <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                        </div>
                                                        <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                    </div>
                                                    <div class="ofc__content-date">
                                                        <div class="ofc__date-img">
                                                            <i class="fa-regular fa-file-lines"></i>
                                                        </div>
                                                        <div class="ofc__date-number">
                                                            <span class="ofc__date-month" id="ofcmonth">23</span>
                                                            /
                                                            <span class="ofc__date-day" id="ofcday">1</span>
                                                            /
                                                            <span cspans="ofc__date-year" id="ofcyear">0</span>
                                                        </div>
                                                        <div class="ofc__date-question question">
                                                            <i class="fa-solid fa-question"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ofc__content-okr">
                                                        <div class="ofc__okr-title">ОКР:</div>
                                                        <p class="ofc__content-text">Успешная реализация планов 
                                                            по развитию компании и прибыли</p>
                                                    </div>
                                                    <div class="ofc__content-dots dots">
                                                        <div class="dot-1"></div>
                                                        <div class="dot-2"></div>
                                                    </div>
                                                    <div class="ofc__content-line" id="linefromdirector"></div>
                                                    <div class="ofc__content-lines" id="linesfromdirector"></div>
                                                </div>
                                                <div class="ofc__content-items--2">
                                                    <div class="ofc__content-item ofc__item-department ofc__col-yellow">
                                                        <div class="ofc__content-title">Маркетолог</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-lines" id="linesfromdepartment"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-department ofc__col-red">
                                                        <div class="ofc__content-title">Директор Московская</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img"></div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__top-line"></div>
                                                        <div class="ofc__content-lines" id="linesfromdepartment"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-department ofc__col-green">
                                                        <div class="ofc__content-title">SMM Директор</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img"></div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__top-line"></div>
                                                        <div class="ofc__content-lines" id="linesfromdepartment"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-department ofc__col-pink">
                                                        <div class="ofc__content-title">Директор Call-centr</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img"></div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__top-line"></div>
                                                        <div class="ofc__content-lines" id="linesfromdepartment"></div>
                                                    </div>
                                                </div>
                                                <div class="ofc__content-items--3">
                                                    <div class="ofc__content-item ofc__item-worker ofc__col-yellow">
                                                        <div class="ofc__content-title">Переоценка товаров</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">0</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">1</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-subordinate ofc__col-red">
                                                        <div class="ofc__content-title">Стажеры</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-subordinate ofc__col-green">
                                                        <div class="ofc__content-title">Стажер</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname">Абрамов Владимир Алексеевич</div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-subordinate ofc__col-pink">
                                                        <div class="ofc__content-title">Маркетолог</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname"></div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-worker ofc__col-yellow">
                                                        <div class="ofc__content-title">Корпоративная культура</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname"></div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-subordinate ofc__col-red">
                                                        <div class="ofc__content-title">Стажеры Саранск</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname"></div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-subordinate ofc__col-green">
                                                        <div class="ofc__content-title">Продавец Кураева</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname"></div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                    <div class="ofc__content-item ofc__item-subordinate ofc__col-pink">
                                                        <div class="ofc__content-title">Маркетолог</div>
                                                        <div class="ofc__content-person">
                                                            <div class="ofc__content-img">
                                                                <img id="ofcaccountimg" src="images/account-image-1.jpg" alt="account image 1">
                                                            </div>
                                                            <div class="ofc__content-name" id="ofcname"></div>
                                                        </div>
                                                        <div class="ofc__content-date">
                                                            <div class="ofc__date-img">
                                                                <i class="fa-regular fa-file-lines"></i>
                                                            </div>
                                                            <div class="ofc__date-number">
                                                                <span class="ofc__date-month" id="ofcmonth">23</span>
                                                                /
                                                                <span class="ofc__date-day" id="ofcday">1</span>
                                                                /
                                                                <span class="ofc__date-year" id="ofcyear">0</span>
                                                            </div>
                                                            <div class="ofc__date-question question">
                                                                <i class="fa-solid fa-question"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-okr">
                                                            <div class="ofc__okr-title">ОКР:</div>
                                                            <p class="ofc__content-text">Успешная реализация планов 
                                                                по развитию компании и прибыли</p>
                                                        </div>
                                                        <div class="ofc__content-people">
                                                            <div class="ofc__content">Медведев Даниил Олегович</div>
                                                            <div class="ofc__content-else">
                                                                <span class="ofc__else-text">Ещё</span>
                                                                <span class="ofc__else-number">5</span> 
                                                            </div>
                                                        </div>
                                                        <div class="ofc__content-dots dots">
                                                            <div class="dot-1"></div>
                                                            <div class="dot-2"></div>
                                                        </div>
                                                        <div class="ofc__content-line ofc__left-line"></div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    </div>
                                    <button class="ofc__content-print" id="print">
                                        <i class="fa-solid fa-print"></i>
                                    </button>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
                <div class="ofc__message message" id="message2">
                    <div class="ofc__question-message message-block scroll-block">
                        <div class="ofc__message-title title-message">ОФС</div>
                        <p class="ofc__message-text message-text">
                            В данном разделе можно увидеть данные по сотрудникам компании, зарегистрированным в системе Квант. Организационная функциональная схема (ОФС) - это схема, на которой отображены все функции в компании и подчиненность между ними. ОФС позволяет эффективно управлять компанией за счет того, что регламенты, повторяющиеся задачи, статистики и другие инструменты управления привязываются не к конкретным людям, а к функциям.
                        </p>
                        <p class="ofc__message-text message-text">
                            В Кванте отделы, подразделения, службы и т.п. называются функциями.
                        </p>
                        <p class="ofc__message-text message-text">
                            Для того, чтобы построить ОФС, нажмите на “Добавить функцию”. Данная кнопка отображается только в тех системах, где ОФС еще не построена.
                        </p>
                        <p class="ofc__message-text message-text">
                            <span class="text-bold">Сотрудников:</span> общее количество сотрудников, зарегистрированное в системе.
                        </p>
                        <p class="ofc__message-text message-text">
                            <span class="text-bold">Руководителей:</span> количество сотрудников, которые на ОФС стоят в роли администраторов.
                        </p>
                        <p class="ofc__message-text message-text">
                            <span class="text-bold">Заходило сегодня:</span> количество сотрудников, которые сегодня заходили в систему.
                        </p>
                        <img class="ofc__message-img"src="images/image.jpg" alt="image">
                        <div class="ofc__message-wrapper">
                            <button class="ofc__message-btn btn-1 message-btn" id="confirmlearning2">Изучил</button>
                        </div>
                    </div>
                </div>
                <div class="popup__message message" id="message3">
                    <div class="popup__question-message message-block">
                        <div class="popup__message-title title-message">Администратор</div>
                        <p class="popup__message-text message-text">
                            <span class="text-bold">Администратор</span> - это руководитель этой функции.
                        </p>
                        <p class="popup__message-text message-text">
                            Если функции не требуется администратор, то его может и не быть.
                        </p>
                        <div class="popup__message-wrapper">
                            <button class="popup__message-btn popup__message-btn--1 btn-1 message-btn" id="confirmlearning3">Изучил 👍</button>
                        </div>
                    </div>
                </div>
                <div class="popup__message message" id="message4">
                    <div class="popup__question-message message-block scroll-block">
                        <div class="popup__message-title title-message">Повторяющиеся задачи</div>
                        <p class="popup__message-text message-text">
                            Данный раздел позволяет создавать и управлять повторяющимися задачами (ПЗ). ПЗ - это такой тип задач, которые выполняются с определенной периодичностью. Например:
                        </p>
                        <p class="popup__message-text message-text">
                            Каждый день
                            Каждую среду
                            Каждое 5 число месяца
                            Повторяющиеся задачи будут создаваться автоматически, согласно той периодичности, которую Вы настроите.
                        </p>
                        <p class="popup__message-text message-text">
                            Для того, чтобы добавить повторяющуюся задачу, нажмите на кнопку “Добавить” и выберите на кого задача будет назначена - на исполнителей или администраторов функции.
                        </p>
                        <p class="popup__message-text message-text">
                            С созданной повторяющейся задачей можно выполнить следующие действия:
                        </p>
                        <p class="popup__message-text message-text">
                            поставить на паузу (1), тогда новые коммуникации не будут создаваться до тех пор пока Вы вновь не запустите её. Для запуска ПЗ нажмите на значок  у повторяющейся задачи;
                            просмотреть список созданных коммуникаций по данной ПЗ (2);
                            редактировать (3);
                            скопировать (4) - при нажатии на кнопку откроется точная копия ПЗ, в самом начале названия задачи будет слово "Копия";
                            удалить (5).
                        </p>
                        <img class="ofc__message-img"src="images/image.jpg" alt="image">
                        <div class="popup__message-wrapper">
                            <button class="popup__message-btn popup__message-btn--2 btn-1 message-btn" id="confirmlearning4">Изучил 👍</button>
                        </div>
                    </div>
                </div>
                <div class="popup" id="popup1">
                    <div class="popup__wrapper">
                        <div class="popup__title">Генеральный Директор</div>
                        <div class="popup__descr">Успешная реализация планов по развитию компании и прибыли</div>
                        <div class="popup__tabs">
                            <div class="popup__tab popup__tab-primary active-tab" id="tab-1">Сотрудники</div>
                            <div class="popup__tab popup__tab-primary" id="tab-2">
                                Повторяющиеся задачи
                                <div class="popup__question popup__question--2 question-2" id="question4">
                                    <i class="fa-solid fa-question"></i>
                                </div>
                            </div>
                            <div class="popup__tab popup__tab-primary" id="tab-3">
                                Регламенты
                                <div class="popup__question popup__tabs-question question-2" id="question5">
                                    <i class="fa-solid fa-question"></i>
                                </div></div>
                            <div class="popup__tab popup__tab-primary" id="tab-4">Описание функций</div>
                            <div class="popup__tab popup__tab-primary" id="tab-5">Разрешения</div>
                        </div>
                        <div class="popup__content" id="tab-content-1">
                            <div class="popup__content-employee">
                                <div class="popup__content-wrapper">
                                    <div class="popup__content-title">Администратор</div>
                                    <div class="popup__question question-2 popup__question--1" id="question3">
                                        <i class="fa-solid fa-question"></i>
                                    </div>
                                </div>
                                <div class="popup__content-person popup__content-person--1">
                                    <div class="popup__content-img">
                                        <img src="images/account-image-1.jpg" alt="account image 1">
                                    </div>
                                    <div class="popup__content-name">Абрамов Владимир Алексеевич</div>
                                </div>
                                <div class="popup__content-buttons">
                                    <div class="popup__content-button">
                                        <button class="btn-2" id="addadministrator">Добавить администратора</button>
                                    </div>
                                    <div class="popup__content-button">
                                        <button class="btn-1" id="save">Сохранить</button>
                                    </div>
                                </div>
                                <div class="popup__employee-dropdown">
                                    <div class="popup__employee-wrapper">
                                        <input type="text" class="popup__employee-input input">
                                        <i></i>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                    <div class="popup__employee-item">
                                        <div class="popup__employee-img">
                                            <img src="images/image-account.jpg" alt="image account 1">
                                        </div>
                                        <div class="popup__employee-name"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup__content" id="tab-content-2">
                            <button class="popup__content-button btn-1">Добавить</button>
                            <div class="popup__content-items">
                                <div class="popup__content-item">
                                    <div class="popup__item-title">Заполнить вечерный чек-лист</div>
                                    <div class="popup__content-icons">
                                        <i class="fa-solid fa-pause"></i>
                                        <i class="fa-regular fa-eye"></i>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <i class="fa-regular fa-copy"></i>
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                    <div class="popup__content-data">
                                        <div class="popup__data-col1">
                                            <p class="popup__data-descr">Кому:</p>
                                            <p class="popup__data-descr">Переодичность:</p>
                                            <p class="popup__data-descr">Крайний срок:</p>
                                            <p class="popup__data-descr">Отправитель:</p>
                                        </div>
                                        <div class="popup__data-col2">
                                            <p class="popup__date-text">Исполнителям функции - Стажеры Саранск</p>
                                            <p class="popup__date-text">Каждый день в 19:00 (Кроме выходных и праздничных дней)</p>
                                            <p class="popup__date-text">Через 2 часов после создания</p>
                                            <p class="popup__date-text">Администратор функции: Cтажеры Саранск</p>
                                        </div>
                                    </div>
                                    <div class="popup__content-info">
                                        <div class="popup__content-person popup__content-person--2">
                                            <div class="popup__person-img">
                                                <img src="images/account-image-1.jpg" alt="acccount image 1">
                                            </div>
                                            <div class="popup__person-name">Иван Прохоров Иванович</div>
                                        </div>
                                        <div class="popup__content-date">18.11.2021</div>
                                        <div class="popup__content-time">12:36</div>
                                    </div>
                                    <div class="popup__task-dropdown">
                                        <div class="popup__task-dropdown"></div>
                                        <div class="popup__task-dropdown"></div>
                                    </div>
                                </div>
                                <div class="popup__content-item">
                                    <div class="popup__item-title">Заполнить вечерный чек-лист</div>
                                    <div class="popup__content-icons">
                                        <i class="fa-solid fa-pause"></i>
                                        <i class="fa-regular fa-eye"></i>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <i class="fa-regular fa-copy"></i>
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                    <div class="popup__content-data">
                                        <div class="popup__data-col1">
                                            <p class="popup__data-descr">Кому:</p>
                                            <p class="popup__data-descr">Переодичность:</p>
                                            <p class="popup__data-descr">Крайний срок:</p>
                                            <p class="popup__data-descr">Отправитель:</p>
                                        </div>
                                        <div class="popup__data-col2">
                                            <p class="popup__date-text">Исполнителям функции - Стажеры Саранск</p>
                                            <p class="popup__date-text">Каждый день в 19:00 (Кроме выходных и праздничных дней)</p>
                                            <p class="popup__date-text">Через 2 часов после создания</p>
                                            <p class="popup__date-text">Администратор функции: Cтажеры Саранск</p>
                                        </div>
                                    </div>
                                    <div class="popup__content-info">
                                        <div class="popup__content-person">
                                            <div class="popup__person-img">
                                                <img src="images/account-image-1.jpg" alt="acccount image 1">
                                            </div>
                                            <div class="popup__person-name">Иван Прохоров Иванович</div>
                                        </div>
                                        <div class="popup__content-date">18.11.2021</div>
                                        <div class="popup__content-time">12:36</div>
                                    </div>
                                    <div class="popup__task-dropdown">
                                        <div class="popup__task-dropdown"></div>
                                        <div class="popup__task-dropdown"></div>
                                    </div>
                                </div>
                                <div class="popup__content-item">
                                    <div class="popup__item-title">Заполнить вечерный чек-лист</div>
                                    <div class="popup__content-icons">
                                        <i class="fa-solid fa-pause"></i>
                                        <i class="fa-regular fa-eye"></i>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <i class="fa-regular fa-copy"></i>
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                    <div class="popup__content-data">
                                        <div class="popup__data-col1">
                                            <p class="popup__data-descr">Кому:</p>
                                            <p class="popup__data-descr">Переодичность:</p>
                                            <p class="popup__data-descr">Крайний срок:</p>
                                            <p class="popup__data-descr">Отправитель:</p>
                                        </div>
                                        <div class="popup__data-col2">
                                            <p class="popup__date-text">Исполнителям функции - Стажеры Саранск</p>
                                            <p class="popup__date-text">Каждый день в 19:00 (Кроме выходных и праздничных дней)</p>
                                            <p class="popup__date-text">Через 2 часов после создания</p>
                                            <p class="popup__date-text">Администратор функции: Cтажеры Саранск</p>
                                        </div>
                                    </div>
                                    <div class="popup__content-info">
                                        <div class="popup__content-person">
                                            <div class="popup__person-img">
                                                <img src="images/account-image-1.jpg" alt="acccount image 1">
                                            </div>
                                            <div class="popup__person-name">Иван Прохоров Иванович</div>
                                        </div>
                                        <div class="popup__content-date">18.11.2021</div>
                                        <div class="popup__content-time">12:36</div>
                                    </div>
                                    <div class="popup__task-dropdown">
                                        <div class="popup__task-dropdown"></div>
                                        <div class="popup__task-dropdown"></div>
                                    </div>
                                </div>
                                <div class="popup__content-item">
                                    <div class="popup__item-title">Заполнить вечерный чек-лист</div>
                                    <div class="popup__content-icons">
                                        <i class="fa-solid fa-pause"></i>
                                        <i class="fa-regular fa-eye"></i>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <i class="fa-regular fa-copy"></i>
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                    <div class="popup__content-data">
                                        <div class="popup__data-col1">
                                            <p class="popup__data-descr">Кому:</p>
                                            <p class="popup__data-descr">Переодичность:</p>
                                            <p class="popup__data-descr">Крайний срок:</p>
                                            <p class="popup__data-descr">Отправитель:</p>
                                        </div>
                                        <div class="popup__data-col2">
                                            <p class="popup__date-text">Исполнителям функции - Стажеры Саранск</p>
                                            <p class="popup__date-text">Каждый день в 19:00 (Кроме выходных и праздничных дней)</p>
                                            <p class="popup__date-text">Через 2 часов после создания</p>
                                            <p class="popup__date-text">Администратор функции: Cтажеры Саранск</p>
                                        </div>
                                    </div>
                                    <div class="popup__content-info">
                                        <div class="popup__content-person">
                                            <div class="popup__person-img">
                                                <img src="images/account-image-1.jpg" alt="acccount image 1">
                                            </div>
                                            <div class="popup__person-name">Иван Прохоров Иванович</div>
                                        </div>
                                        <div class="popup__content-date">18.11.2021</div>
                                        <div class="popup__content-time">12:36</div>
                                    </div>
                                </div>
                                <div class="popup__task-dropdown">
                                    <div class="popup__task-dropdown"></div>
                                    <div class="popup__task-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="popup__content" id="tab-content-3">
                            <div class="popup__content-inner">
                                <div class="popup__tabs">
                                    <div class="popup__tab popup__tab-secondary active-tab" id="tab-1">На функции</div>
                                    <div class="popup__tab popup__tab-secondary" id="tab-2">Сверху</div>
                                    <div class="popup__tab popup__tab-secondary" id="tab-3">Регламенты</div>
                                </div>
                                <div class="popup__content-filter">
                                    <div class="popup__content-text">Распространяется </div>
                                    <select name="filterReglaments" id="filter" class="popup__content-select">
                                        <option value="1">на всех</option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="popup__content-reglaments" id="secondary-content-1">
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                                <div class="popup__data-item">
                                    <a href="#" class="popup__data-title">Регламент Для съёмки и оформления Stories</a>
                                    <div class="popup__content-person">
                                        <div class="popup__person-img">
                                            <img src="images/account-image-1.jpg" alt="acccount image 1">
                                        </div>
                                        <div class="popup__person-name">Иван Прохоров Иванович</div>
                                    </div>
                                    <div class="popup__data-time">
                                        <div class="popup__data-date">10.12.2021</div>
                                        <div class="popup__data-hours">15:00</div>
                                    </div>
                                    <div class="popup__dropdown">
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                        <div class="popup__dropdown-item"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="popup__content-data" id="secondary-content-2">
                                
                            </div>
                            <div class="popup__content-data" id="secondary-content-3">
                                3
                            </div>
                        </div>
                        <div class="popup__content" id="tab-content-4">4</div>
                        <div class="popup__content" id="tab-content-5">5</div>
                    </div>
                        <div class="popup__close" id="close">
                            <div class="popup__close-line"></div>
                            <div class="popup__close-line"></div>
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