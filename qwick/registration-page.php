<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Registration</title>
</head>
<body>
    <main class="main">
        <section class="login">
            <div class="login__inner">
                <div class="login__wrapper">
                    <div class="login__logo">
                        <p class="login__logo-text">Qwick</p>
                    </div>
                    <form action="php/registration.php" method="GET" class="login__form">
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
                        <button class="login__form-btn login__registration-btn  btn-1">Регистрация</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="js/main.js"></script>
</body>
</html>