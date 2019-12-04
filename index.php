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
<div class ='background'></div>
<div class = container>
    <form id="loginAjaxForm" action="" method="POST">
            <div class="form-horizontal">
                <div class="form-group col-6 offset-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Ваше имя" AUTOCOMPLETE="off" 
                    required oninvalid="this.setCustomValidity('Нужно имя')" oninput="setCustomValidity('')">
                </div>

                <div class="form-group col-6 offset-3">
                    <input type="text" name="password" class="form-control" id="password" placeholder="Пароль" AUTOCOMPLETE="off"
                     required oninvalid="this.setCustomValidity('Секретное слово')" oninput="setCustomValidity('')">
                </div>

                <div class="form-group row offset-3 ">
                    <button type="submit" class="btn btn-default button" id="btnLogin">Войти</button>
                    <button type="submit" class="btn btn-default button" id="btnRegistration">Зарегистрироваться</button>
                    <!-- <button type="submit" class="btn btn-default button" id="btnAjax">Ajax Запрос</button>     -->
                </div>
            </div>
    </form> 
    <br>
    <div id="result_form"></div> 
</div>
    <?php include("includes/footer.php");?>
    <script src='ajax.js'></script>
</body>

</html>