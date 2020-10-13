<!DOCTYPE html>
<html lang="en">
<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php
    if(isset($_POST["register"]))
    {   	
        if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) 
            {
                $full_name= htmlspecialchars($_POST['full_name']);
                $email=htmlspecialchars($_POST['email']);
                $username=htmlspecialchars($_POST['username']);
                $password=htmlspecialchars($_POST['password']);

                mysqli_autocommit($connect, TRUE);
                $query  = mysqli_query($connect, "SELECT * FROM users WHERE username='".$username."'");//делаем выборку пользователей с введённым ником
                $row_cnt = mysqli_num_rows($query); //считаем количество пользователей с одинаковым ником
                if($row_cnt == 0){ //если одинаковых нет, тогда создаём
                    $result = mysqli_query($connect,"INSERT INTO users (full_name, email, username, password)
                    VALUES('$full_name', '$email' , '$username', '$password')");
                    mysqli_close($connect);
                    if($result) {
                        header("Location: index.php");
                    }
                else {
                    echo ("Не получилось создать пользователя!");
                }
                }
                else {
                //$message = "Такой пользователь уже существует! Попробуйте ввести другое имя!";
                    echo "Такой пользователь уже существует! Попробуйте ввести другое имя!";
                }
            }
            else {
            //$message = "Заполните все поля!";
            echo "Заполните все поля!";
            }
        }
?>

<body>
    <div class="container mregister">
        <div id="login">
            <form action="register.php" id="registerform" method="post" name="registerform">
                <h1>Регистрация</h1>
                <p><label for="user_login">Логин для входа<br>
                        <input class="input" id="full_name" name="full_name" size="32" type="text" value=""></label></p>
                <p><label for="user_pass">E-mail<br>
                        <input class="input" id="email" name="email" size="32" type="email" value=""></label></p>
                <p><label for="user_pass">Имя пользователя<br>
                        <input class="input" id="username" name="username" size="20" type="text" value=""></label></p>
                <p><label for="user_pass">Пароль<br>
                        <input class="input" id="password" name="password" size="32" type="password" value=""></label>
                </p>
                <p class="submit"><input class="button" id="register" name="register" type="submit"
                        value="Зарегистрироваться"></p>

                <p class="regtext">Уже зарегистрированы?<br> <a href="index.php">Введите имя пользователя</a>!</p>
            </form>
        </div>
    </div>
</body>

</html>