<!DOCTYPE html>
<html lang="en">

<?php session_start([
    'cookie_lifetime' => 86400,
    'read_and_close' => true
]);
?>

<?php include("includes/header.php"); ?>
<?php require_once("includes/connection.php"); ?>

<head>

</head>

<body>
    <div class="container mlogin">   
        <form id="loginAjaxForm" action="" method="POST">
        <h1>Войдите или зарегистрируйтесь</h1>
            <div class="form-horizontal">
                <div class="form-group col-6 offset-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Логин"
                        AUTOCOMPLETE="off" required oninvalid="this.setCustomValidity('Нужно имя')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="form-group col-6 offset-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Пароль"
                        AUTOCOMPLETE="off" required oninvalid="this.setCustomValidity('Секретное слово')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="form-group row">
                    <button type="submit" class="btn btn-default button col-5" id="btnLogin">Вход</button>
                    <button type="submit" class="btn btn-default button col-5" id="btnRegistration">Регистрация</button>
                </div>
            </div>
        </form>
        <div id="result_form"></div>
    </div>
    <script src='js/ajax.js'></script>
</body>
</html>