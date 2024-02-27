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
                            <div class="main__content-data content" id="content-1">
                                <div class="main__content-block">
                                    <div class="main__content-item">
                                        <div class="main__item-wrapper">
                                            <div class="main__content-img">
                                                <i class="fa-solid fa-users"></i>
                                            </div>
                                            <div class="main__content-text">Cотрудников</div>
                                            <div class="main__content-number">
                                                <?php 
                                                
                                                    $host = 'qwick';
                                                    $username = 'root';
                                                    $password = '';

                                                    $connect = mysqli_connect($host, $username, $password);

                                                    $Query = "USE Employees";
                                                    mysqli_query($connect, $Query);

                                                    $Query = "SELECT EmployeesNumber FROM EmployeesData";

                                                    if($result = mysqli_query($connection, $Query)) 
                                                    {
                                                        foreach($result as $row) {
                                                            $employeesNumber = $row['EmployeesNumber'];
                                                        }
                                                    }

                                                    echo $employeesNumber;

                                                    mysqli_close($connect);

                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main__content-item">
                                        <div class="main__item-wrapper">
                                            <div class="main__content-img">
                                                <i class="fa-solid fa-user-tie"></i>
                                            </div>
                                            <div class="main__content-text">Руководителей</div>
                                            <div class="main__content-number">
                                            <?php 
                                                
                                                $host = 'qwick';
                                                $username = 'root';
                                                $password = '';

                                                $connect = mysqli_connect($host, $username, $password);

                                                $Query = "USE Leaders";
                                                mysqli_query($connect, $Query);

                                                $Query = "SELECT LeadersNumber FROM LeadersData";

                                                if($result = mysqli_query($connection, $Query)) 
                                                {
                                                    foreach($result as $row) {
                                                        $leadersNumber = $row['LeadersNumber'];
                                                    }
                                                }

                                                echo $leadersNumber;

                                                mysqli_close($connect);

                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main__content-item">
                                        <div class="main__item-wrapper">
                                            <div class="main__content-img">
                                                <i class="fa-solid fa-chart-line"></i>
                                            </div>
                                            <div class="main__content-text">Заходило сегодня</div>
                                            <div class="main__content-number">
                                            <?php 
                                                
                                                $host = 'qwick';
                                                $username = 'root';
                                                $password = '';

                                                $connect = mysqli_connect($host, $username, $password);

                                                $Query = "USE Attendance";
                                                mysqli_query($connect, $Query);

                                                $Query = "SELECT AttendanceNumber FROM AttendancesData";

                                                if($result = mysqli_query($connection, $Query)) 
                                                {
                                                    foreach($result as $row) {
                                                        $AttendanceNumber = $row['AttendanceNumber'];
                                                    }
                                                }

                                                echo $AttendanceNumber;

                                                mysqli_close($connect);

                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main__content-question" id="question1">
                                    <div class="main__question-img">
                                        <div class="main__question-wrapper"> 
                                            <i class="fa-solid fa-question"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="reglaments content" id="content-3">
                                <div class="reglaments__wrapper">
                                    <div class="reglaments__title title">Регламенты</div>
                                    <div class="reglaments__menu">
                                        <div class="reglaments__menu-filter">
                                            <div class="reglaments__menu-wrapper">
                                                <div class="reglaments__menu-img">
                                                    <i class="fa-solid fa-filter"></i>
                                                </div>
                                                <div class="reglaments__menu-text">Фильтр</div>
                                                <div class="reglaments__menu-dropdown reglaments__dropdown">
                                                    <div class="reglaments__menu-whom">
                                                        <span>Кому:</span> Выберите кому доступен регламент
                                                    </div>
                                                    <div class="reglaments__menu-chosen">Генеральный директор</div>
                                                    <div class="reglaments__menu-chosen">Директор</div>
                                                    <div class="reglaments__dropdown-items">
                                                        <div class="reglaments__item-dropdown">
                                                            <div class="reglaments__dropdown-item">
                                                                Всем
                                                            </div>
                                                            <div class="reglaments__dropdown-item">Всем администраторам</div>
                                                            <div class="reglaments__dropdown-item">Администратор урновня</div>
                                                            <div class="reglaments__dropdown-item">Исполнителям типа</div>
                                                            <div class="reglaments__dropdown-item">Администратору функции</div>
                                                            <div class="reglaments__dropdown-item">Исполнителям функции</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reglaments__menu-search">
                                                <input type="text" class="reglaments__menu-input" placeholder="Поиск......">
                                            </div>
                                        </div>
                                        <div class="reglaments__menu-btns">
                                            <button class="reglaments__menu-btn btn-3">Статистика</button>
                                            <button class="reglaments__menu-btn btn-1">Добавить</button>
                                        </div>
                                    </div>
                                    <div class="reglaments__tabs tabs">
                                        <div class="reglaments__tab tab active-tab" id="tab-1">Одобрить</div>
                                        <div class="reglaments__tab tab" id="tab-2">Все</div>
                                        <div class="reglaments__tab tab" id="tab-3">Мои</div>
                                    </div>
                                    <div class="reglaments__content scroll-block" id="content-1">
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                                <div class="reglaments__content-state">На одобрении</div>
                                                <div class="reglaments__content-title">Регламент о регламентах</div>
                                                <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="reglaments__content" id="content-2">
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reglaments__content-item">
                                            <div class="reglaments__content-left">
                                            <div class="reglaments__content-state">Изучен</div>
                                            <div class="reglaments__content-title">Регламент о регламентах</div>
                                            <div class="reglaments__content-whom">Всем сотрудникам</div>
                                            </div>
                                            <div class="reglaments__content-right">
                                                <button class="reglaments__content-btn btn-4">Посмотреть</button>
                                                <div class="reglaments__content-dots dots">
                                                    <div class="reglaments__content-dot dot-1"></div>
                                                    <div class="reglaments__content-dot dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
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
                            <div class="report content" id="content-5">
                                <div class="report__wrapper">
                                    <div class="report__inner">
                                        <div class="report__title title">Отчёты</div>
                                        <select class="report__select">
                                            <option value="1">По регламентам</option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                        </select>
                                    </div>
                                    <div class="report__search main__content-search input-search">
                                        <input type="text" class="main__content-input input-1" id="search" value="Поиск......">
                                        <div class="main__search-img">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                    </div>
                                    <div class="report__tabs tabs">
                                        <div class="report__tab tab active-tab" id="tab-1">Сотрудники</div>
                                        <div class="report__tab tab" id="tab-2">Задачи на изучение</div>
                                    </div>
                                    <div class="report__content" id="content-1">
                                        <div class="report__content-table">
                                            <div class="report__table-head">
                                                <div class="report__table-title">Сотрудники</div>
                                                <div class="report__table-sort">Всего</div>
                                                <div class="report__table-sort">Изучил</div>
                                                <div class="report__table-sort">Должен изучить</div>
                                                <div class="report__table-sort">Процент изучения</div>
                                            </div>
                                            <div class="report__table-body scroll-block">
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                                <div class="report__table-item">
                                                    <div class="report__table-person">
                                                        <div class="report__table-img">
                                                            <img src="images/account-image-1.jpg" alt="image account 1">
                                                        </div>
                                                        <div class="report__table-name">Медведев Даниил Александрович</div>
                                                    </div>
                                                    <div class="report__table-total">26</div>
                                                    <div class="report__table-learned">12</div>
                                                    <div class="report__table-havetolearn">14</div>
                                                    <div class="report__table-procent">46,2%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report__content" id="content-2"></div>
                                        <div class="report__table-item">
                                                <div class="report__table-person">
                                                    <div class="report__table-img">
                                                        <img src="images/account-image-1.jpg" alt="image account">
                                                    </div>
                                                    <div class="report__table-name"></div>
                                                </div>
                                                <div class="report__table-total"></div>
                                                <div class="report__table-learned"></div>
                                                <div class="report__table-havetolearn"></div>
                                                <div class="report__table-procent"></div>
                                            </div>
                                        </div>
                                    </div> 
                            <div class="communication content" id="content-6">
                                <div class="communication__wrapper">
                                    <div class="communication__top">
                                        <div class="communication__top-messages">
                                            <div class="communication__top-message">
                                                Мои
                                                <div class="communication__top-circle">3</div>
                                            </div>
                                            <div class="communication__top-message">
                                                На контроле
                                                <div class="communication__top-circle">24</div>
                                                <div class="communication__top-circle">24</div>
                                            </div>
                                            <div class="communication__top-message">
                                                Участвую
                                            </div>
                                            <div class="communication__top-message">
                                                Массовые задачи
                                                <div class="communication__top-circle">30</div>
                                            </div>
                                            <div class="communication__top-message">
                                                Сегодня
                                                <div class="communication__top-circle">24</div>
                                                <div class="communication__top-circle">24</div>
                                            </div>
                                            <div class="communication__top-message">
                                                Завтра
                                                <div class="communication__top-circle">3</div>
                                            </div>
                                        </div>
                                        <div class="communication__top-settings">
                                            <div class="communication__top-date">
                                                <i class="fa-regular fa-calendar"></i>
                                                Дата
                                            </div>
                                            <div class="communication__top-filter">
                                                <i class="fa-solid fa-filter"></i>
                                                Фильтр
                                            </div>
                                        </div>
                                    </div>
                                    <div class="communication__content">
                                        <div class="communication__content-col scroll-block">
                                            <div class="communication__col-title">
                                                <div class="communication__col-text">Входящие</div>
                                                <div class="communication__col-circle">12</div>
                                                <div class="dots communication__col-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <button class="communication__content-btn btn-5">Добавить</button>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-info">Не взята в работу</div>
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-info">Не принята более 1 дня</div>
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-info">Не взята в работу больше 2 дней</div>
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-info">Не взята в работу</div>
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="communication__content-col scroll-block">
                                            <div class="communication__col-title">
                                                <div class="communication__col-text">Принято</div>
                                                <div class="communication__col-circle">22</div>
                                                <div class="dots communication__col-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <button class="communication__content-btn btn-5">Добавить</button>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-info">Принята</div>
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="communication__content-col scroll-block">
                                            <div class="communication__col-title">
                                                <div class="communication__col-text">В работе</div>
                                                <div class="communication__col-circle">3</div>
                                                <div class="dots communication__col-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <button class="communication__content-btn btn-5">Добавить</button>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="communication__content-col scroll-block">
                                            <div class="communication__col-title">
                                                <div class="communication__col-text">Готово</div>
                                                <div class="communication__col-circle">4</div>
                                                <div class="dots communication__col-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <button class="communication__content-btn btn-5">Добавить</button>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                            <div class="communication__col-item communication__item">
                                                <div class="communication__col-task">Назначить консультацию Диане Шавлиной</div>
                                                <div class="communication__col-person">
                                                    <div class="communication__col-img img-wrapper">
                                                        <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                                    </div>
                                                    <div class="communication__col-name">Соболев Б.Г.</div>
                                                </div>
                                                <div class="dots communication__item-dots">
                                                    <div class="dot-1"></div>
                                                    <div class="dot-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="employees content" id="content-7">
                                <div class="employees__wrapper">
                                    <div class="employees__inner">
                                        <div class="employees__title title">Сотрудники</div>
                                        <select name="selectEmployees" id="" class="employees__select">
                                            <option value="1">Список работы</option>
                                            <option value="2"></option>
                                            <option value="2"></option>
                                        </select>
                                    </div>
                                    <div class="employees__search search-wrapper">
                                        <input class="employees__search-input input-search" type="text" placeholder="Email, имя, фамилия или отчество сотрудника">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <div class="employees__content scroll-block" id="content-1">
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                        <div class="employees__content-item">
                                            <div class="employees__content-img img-wrapper">
                                                <img class="img-account" src="images/account-image-1.jpg" alt="account image 1">
                                            </div>
                                            <div class="employees__content-name">Абрамов Владимир Алексеевич</div>
                                            <div class="employees__content-position">Генеральный директор</div>
                                            <div class="employees__content-dropdown">
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                                <div class="employees__content-text"></div>
                                            </div>
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="employees__content" id="content-2">
                                        <div class="employees__content-calendar">
                                            <div class="employees__calendar-head">
                                                <div class="employees__calendar-search">
                                                    <select class="employees__calendar-select">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                </div>
                                                <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                                    <div class="employees__calendar-title"></div>
                                            </div>
                                            <div class="employees__calendar-body">
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="emloyees__calendar-item">
                                                    <div class="emloyees__calendar-position"></div>
                                                    <div class="emloyees__calendar-name"></div>
                                                    <div class="employees__calendar-shedule employees__shedule">
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                        <div class="employees__shedule-item">
                                                            <div class="employees__shedule-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="pay content" id="content-8">
                                <div class="pay__wrapper">
                                    <div class="pay__title title">Оплата</div>
                                    <div class="pay__tabs tabs">
                                        <div class="pay__tab tab active-tab" id="tab-1">Тариф</div>
                                        <div class="pay__tab tab" id="tab-2">Счета</div>
                                    </div>
                                    <div class="pay__content scroll-block" id="content-1">
                                        <div class="pay__content-top">
                                            <div class="pay__content-subtitle">Текущий тариф</div>
                                            <div class="pay__content-card pay__card">
                                                <div class="pay__card-title">Квант 50</div>
                                                <p class="pay__card-text">Активен до: 18.04.2022 17:32</p>
                                                <div class="pay__card-title">Выбранные опции</div>
                                                <p class="pay__card-text">Количество сотрудников: 50</p>
                                                <div class="pay__content-btns">
                                                    <button class="pay__card-btn btn-1">Продлить</button>
                                                    <button class="pay__card-btn btn-5">Сменить</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay__content-subtitle">Тарифы</div>
                                        <div class="pay__content-wrapper">
                                            <div class="pay__content-card pay__card">
                                                <div class="pay__card-title">Квант 50</div>
                                                <p class="pay__card-text">Количество сотрудников: 50</p>
                                                <div class="pay__card-title">Период:</div>
                                                <p class="pay__card-text">Месяц</p>
                                                <div class="pay__content-payment">
                                                    <div class="pay__content-inner">
                                                        <div class="pay__card-discount">31 000 р/мес</div>
                                                        <div class="pay__card-price">25 000 р/мес</div>
                                                    </div>
                                                    <div class="pay__card-continue">
                                                        <button class="pay__card-btn btn-1">Продлить</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pay__content-card pay__card">
                                                <div class="pay__card-title">Квант 80</div>
                                                <p class="pay__card-text">Количество сотрудников: 80</p>
                                                <div class="pay__card-title">Период:</div>
                                                <p class="pay__card-text">Месяц</p>
                                                <div class="pay__content-payment">
                                                    <div class="pay__content-inner">
                                                        <div class="pay__card-discount">35 000 р/мес</div>
                                                        <div class="pay__card-price">27 500 р/мес</div>
                                                    </div>
                                                    <div class="pay__card-continue">
                                                        <button class="pay__card-btn btn-1">Продлить</button>
                                                    </div>
                                                </div>
                                                <div class="pay__card-benefit">
                                                    🔥 Выгодно
                                                </div>
                                            </div>
                                            <div class="pay__content-card pay__card">
                                                <div class="pay__card-title">Квант 50</div>
                                                <p class="pay__card-text">Количество сотрудников: 50</p>
                                                <div class="pay__card-title">Период:</div>
                                                <p class="pay__card-text">Месяц</p>
                                                <div class="pay__content-payment">
                                                    <div class="pay__content-inner">
                                                        <div class="pay__card-discount">39 000 р/мес</div>
                                                        <div class="pay__card-price">30 000 р/мес</div>
                                                    </div>
                                                    <div class="pay__card-continue">
                                                        <button class="pay__card-btn btn-1">Продлить</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pay__content-card pay__card">
                                                <div class="pay__card-title">Квант 50</div>
                                                <p class="pay__card-text">Количество сотрудников: 50</p>
                                                <div class="pay__card-title">Период:</div>
                                                <p class="pay__card-text">Месяц</p>
                                                <div class="pay__content-payment">
                                                    <div class="pay__content-inner">
                                                        <div class="pay__card-discount">40 000 р/мес</div>
                                                        <div class="pay__card-price">32 000 р/мес</div>
                                                    </div>
                                                    <div class="pay__card-continue">
                                                        <button class="pay__card-btn btn-1">Продлить</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pay__content-card pay__card">
                                                <div class="pay__card-title">Квант 50</div>
                                                <p class="pay__card-text">Количество сотрудников: 50</p>
                                                <div class="pay__card-title">Период:</div>
                                                <p class="pay__card-text">Месяц</p>
                                                <div class="pay__content-payment">
                                                    <div class="pay__content-inner">
                                                        <div class="pay__card-discount">42 000 р/мес</div>
                                                        <div class="pay__card-price">35 000 р/мес</div>
                                                    </div>
                                                    <div class="pay__card-continue">
                                                        <button class="pay__card-btn btn-1">Продлить</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pay__content" id="content-2">
                                                
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
                    <div class="main__message message" id="message1">
                        <div class="main__question-message message-block">
                            <div class="main__message-title title-message">Статистика по пользователям</div>
                            <p class="main__message-text message-text">
                                В данном разделе можно увидеть данные по сотрудникам компании, зарегистрированным в системе Квант.
                            </p>
                            <p class="main__message-text message-text">
                                <span class="text-bold">Сотрудников:</span> общее количество сотрудников, зарегистрированное в системе.
                            </p>
                            <p class="main__message-text message-text">
                                <span class="text-bold">Руководителей:</span> количество сотрудников, которые на ОФС стоят в роли администраторов.
                            </p>
                            <p class="main__message-text message-text">
                                <span class="text-bold">Заходило сегодня:</span> количество сотрудников, которые сегодня заходили в систему.
                            </p>
                            <div class="main__message-wrapper">
                                <button class="main__message-btn btn-1 message-btn" id="confirmlearning1">Изучил</button>
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
                <div class="popup" id="popup-1">
                    <div class="popup__wrapper">
                        <div class="popup__img"></div>
                        <div class="popup__title"></div>
                        <div class="popup__btns">
                            <button class="popup__btn"></button>
                            <button class="popup__btn"></button>
                        </div>
                    </div>
                </div>
                <div class="popup">
                    <div class="popup__wrapper">
                        <div class="popup__title"></div>
                        <div class="popup__text"></div>
                        <button class="popup__btn"></button>
                    </div>
                </div>
                <div class="popup" id="popup-2">
                    <div class="popup__wrapper">
                        <div class="popup__table">
                            <div class="popup__table-title"></div>
                            <div class="popup__table-content">
                                <div class="popup__table-head">
                                    <div class="popup__table-text"></div>
                                    <div class="popup__table-text"></div>
                                    <div class="popup__table-text"></div>
                                    <div class="popup__table-text"></div>
                                    <div class="popup__table-text"></div>
                                    <div class="popup__table-text"></div>
                                </div>
                                <div class="popup__table-items">
                                    <div class="popup__table-item">
                                        <div class="popup__table-number"></div>
                                        <div class="popup__table-task"></div>
                                        <div class="popup__table-result"></div>
                                        <div class="popup__table-deadline"></div>
                                        <div class="popup__table-progress"></div>
                                        <div class="popup__table-whom"></div>
                                        <div class="popup__table-sender"></div>
                                    </div>
                                    <div class="popup__table-item">
                                        <div class="popup__table-number"></div>
                                        <div class="popup__table-task"></div>
                                        <div class="popup__table-result"></div>
                                        <div class="popup__table-deadline"></div>
                                        <div class="popup__table-progress"></div>
                                        <div class="popup__table-whom">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                        <div class="popup__table-sender">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                        </div>
                                    <div class="popup__table-item">
                                        <div class="popup__table-number"></div>
                                        <div class="popup__table-task"></div>
                                        <div class="popup__table-result"></div>
                                        <div class="popup__table-deadline"></div>
                                        <div class="popup__table-progress"></div>
                                        <div class="popup__table-whom">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                        <div class="popup__table-sender">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                            </div>
                                    <div class="popup__table-item">
                                        <div class="popup__table-number"></div>
                                        <div class="popup__table-task"></div>
                                        <div class="popup__table-result"></div>
                                        <div class="popup__table-deadline"></div>
                                        <div class="popup__table-progress"></div>
                                        <div class="popup__table-whom">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                        <div class="popup__table-sender">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                    </div class="popup__table-item">
                                    <div class="popup__table-item">
                                        <div class="popup__table-number"></div>
                                        <div class="popup__table-task"></div>
                                        <div class="popup__table-result"></div>
                                        <div class="popup__table-deadline"></div>
                                        <div class="popup__table-progress"></div>
                                        <div class="popup__table-whom">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                        <div class="popup__table-sender">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                    </div>
                                    <div class="popup__table-item">
                                        <div class="popup__table-number"></div>
                                        <div class="popup__table-task"></div>
                                        <div class="popup__table-result"></div>
                                        <div class="popup__table-deadline"></div>
                                        <div class="popup__table-progress"></div>
                                        <div class="popup__table-whom">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                        <div class="popup__table-sender">
                                            <img src="" alt="">
                                            <div class="popup__table-name"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="close">
                            <div class="close__line"></div>
                            <div class="close__line"></div>
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
                <div class="popup-menu">
                    <div class="popup-menu__title"></div>
                    <div class="close">
                        <div class="close__line"></div>
                        <div class="close__line"></div>
                    </div>
                    <div class="popup-menu__creator"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__worker"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__director"></div>
                    <div class="popup-menu__director"></div>
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