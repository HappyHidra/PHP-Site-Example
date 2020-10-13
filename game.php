<!DOCTYPE HTML>
<html>
<?php include("includes/header.php"); ?>

<body>

    <div class="container" id="game">
        <h1 id=main-heading>Найди клад на карте!</h1>
        <div class="container" id="absContainer">        
            <img id="map" src="../images/World_map.jpg">
            <div id="maps"></div>
        </div>
        <div class='row help'>
            <div class="col-6 offset-3" id="distance"><br>Кликай по карте и читай подсказки!<br></div>
            <div class="col-6 offset-3" id='clicks'></div>
            <div class="col-6 offset-3" id='again'></div>
            <button type=" button" class="btn btn-default button" id="btnBack">Назад</button>
        </div>

    </div>

    <script src='js/code.js'></script>
</body>

</html>