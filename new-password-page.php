<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <title>New password</title>
</head>
<body>
    <main class="main">
        <section class="login">
            <div class="login__inner">
                <div class="login__wrapper">
                    <div class="login__logo login__logo-recover">
                        <p class="login__logo-text">Qwick</p>
                    </div>
                    <div class="login__text">Введите новый пароль</div>
                    <form action="" method="GET" class="login__form">
                        <div class="login__form-wrapper" id="formwrapper">
                            <p class="login__form-clue" id="clue-login">Пароль</p>
                            <input type="text" class="login__form-input input" id="input-email" value="Ваш пароль">
                        </div>
                        <button class="login__form-btn login__recover-btn  btn-1" id="recoverpassword">Изменить</button>
                        <button class="login__form-btn btn-secondary btn-1">Войти</button>
                    </form>
                </div>
            </div>
            <div class="recover-message">
                <div class="recover-message__wrapper">
                    <div class="recover-message__img">
                        <img src="images/check-mark.png" alt="check mark icon">
                    </div>
                    <div class="recover-messaage__text text-message">
                        На ваш email адрес отправлено сообщение для восстановления пароля
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="js/main.js"></script>
</body>
</html>