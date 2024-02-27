<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>
<body>
    <main class="main">
        <section class="login">
            <div class="login__inner">
                <div class="login__wrapper">
                    <div class="login__logo">
                        <p class="login__logo-text">Qwick</p>
                    </div>
                    <form action="php/login.php" method="GET" class="login__form">
                        <div class="login__form-wrapper">
                            <p class="login__form-clue" id="clue-login">Логин</p>
                            <input type="text" class="login__form-input input" id="input-email" name="login" value="E-mail">
                        </div>
                        <div class="login__form-wrapper">
                            <p class="login__form-clue" id="clue-password">Password</p>
                            <div class="login__input-wrapper">
                                <input type="text" class="login__form-input input" id="input-password" name="password" value="Enter password">
                                <img class="login__form-img" id="showpassword" src="images/show-password.png" alt="show password icon">
                            </div>
                        </div>
                        <a class="login__form-link login__link-registration link" href="forgot-password-page.php">Забыли пароль?</a>
                        <button class="login__form-btn btn-1">Войти</button>
                        <div class="login__form-registration">
                            <p class="login__form-text text">У вас нет учетной записи?</p>
                            <a class="login__form-link link" href="registration-page.php">Регистрация</a>
                        </div>
                    </form> 
                </div>
            </div>
        </section>
    </main>

    <script src="js/main.js"></script>
</body>
</html>