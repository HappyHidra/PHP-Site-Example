<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/header.php");
    include("includes/connection.php");
?>

<body>

    <div class=container-fluid>
        <form id=chooseHeroForm>
            <span>Выберите расу персонажа:</span>
            <div class=row id="heroes">
                <div id="ork" class=col-sm><span>Орк</span><br><img src="images/heroes/1.png"> </div>
                <div id="gnome" class=col-sm><span>Гном</span><br><img src="images/heroes/2.png"></div>
                <div id="elf" class=col-sm><span>Эльф</span><br><img src="images/heroes/5.png"></div>
                <!-- <div id="halfOrk" class=col-sm>Полуорк<br><img src="images/heroes/4.png"></div>
                <div id="human" class=col-sm>Человек<br><img src="images/heroes/5.png"></div>
                <div id="halfElf" class=col-sm>Полуэльф<br><img src="images/heroes/6.png"></div> -->
            </div>
        </form>

        <div id="attr">
            <span>Выберите параметры<br></span>
            <span>Осталось очков: <div id="pointsLeft"></div></span>

            <div class="row">
                <div id=strenght class="col-sm"><span>Сила:</span></div>
                <div id=strenghtPlus class="col-sm"><img src="images/icons/attrplus.jpg"></div>
                <div id=strenghtMinus class="col-sm"><img src="images/icons/attrminus.jpg"></div>
                <div id=strenghtResult class="col-sm">0</div>
            </div>

            <div class="row">
                <div id=agility class="col-sm"><span>Ловкость:</span></div>
                <div id=agilityPlus class="col-sm"><img src="images/icons/attrplus.jpg"></div>
                <div id=agilityMinus class="col-sm"><img src="images/icons/attrminus.jpg"></div>
                <div id=agilityResult class="col-sm">0</div>
            </div>

            <div class="row">
                <div id=int class="col-sm"><span>Интеллект:</span></div>
                <div id=intPlus class="col-sm"><img src="images/icons/attrplus.jpg"></div>
                <div id=intMinus class="col-sm"><img src="images/icons/attrminus.jpg"></div>
                <div id=intResult class="col-sm">0</div>
            </div>
        </div>
        <button type=" button" class="btn btn-default button" id="btnBack">Назад</button>
        <button type="button" class="btn btn-default button" id="btnCancel">Отмена</button>
        <button type=" button" class="btn btn-default button" id="btnSaveHero">Сохранить персонажа</button>
    </div>

    <script src="js/createHero.js"></script>
</body>

</html>