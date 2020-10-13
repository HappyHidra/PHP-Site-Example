<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php"); ?>

<head>
    <script src="js/personalize.js"></script>
</head>
<?php
session_start(); 
if(!isset($_SESSION["session_username"])):
header("location:index.php");
else: 
?>

<body>
    <div class="container-fluid">
        <div id="welcome">
            <div class="row">
                <div class=col>
                    <h2 id="welcometext">Добро пожаловать, </h2>
                    <button type=" button" class="btn btn-default button" id="btnCreateHero">Создать нового
                        персонажа</button>
                </div>
            </div>
            <div class=row>

                <div class="col">
                    <div id="heroClass">Ваш персонаж:<br></div>
                    <img id="hero_portrait"></img>
                </div>

                <div class="col">
                    <div><br></div>
                    <div id="userStr">Сила:<br></div>
                    <div id="userAgi">Ловкость:<br></div>
                    <div id="userInt">Интеллект:<br></div>
                </div>
            </div>

            <div class="row">
                    <p id="game"><a href="game.php">Сыграть</a> в игру</p>

            </div>
            <div class="row">
            <p id="logout"><a href="logout.php">Выйти</a> из аккаунта</p>
        </div>
        </div>


    </div>
    <div id="result_form2"></div>
    <?php endif; ?>

</body>

</html>