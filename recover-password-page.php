<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Forgot password</title>
</head>
<body>
    <main class="main">
        <section class="newpassword" id="newpasswordform">
            <div class="newpassword__inner">
                <div class="newpassword__wrapper">
                    <div class="newpassword__logo login__logo-recover">
                        <p class="newpassword__logo-text">Qwick</p>
                    </div>
                    <div class="newpassword__text">Введите новый пароль</div>
                    <form action="php/newpassword.php" method="GET" class="login__form">
                        <div class="newpassword__form-wrapper" id="formwrapper">
                            <p class="newpassword__form-clue" id="clue-newpassword1">Пароль</p>
                            <input type="password" class="login__form-input input" id="newpasswordinput1" name="newpassword">
                        </div>
                        <div class="newpassword__form-wrapper" id="formwrapper">
                            <p class="newpassword__form-clue" id="clue-newpassword2">Повторите пароль</p>
                            <input type="password" class="login__form-input input" id="newpasswordinput2">
                        </div>
                        <button class="newpassword__form-btn login__recover-btn  btn-1">Изменить</button>
                        <button class="newpassword__form-btn btn-secondary btn-1">Войти</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="js/main.js"></script>
</body>
</html>