<?php
    $connectHeroDataBase = new mysqli('localhost', 'deepreap_admin','Fisher123','deepreap_game');
    if ($connectHeroDataBase->connect_error) {
        die('Error : ('. $connectHeroDataBase->connect_errno .') '. $connectHeroDataBase->connect_error);
    }

    $userportrait= htmlspecialchars($_POST['chosenHero']);
    $strenghtResult= htmlspecialchars($_POST['strenghtResult']);
    $agilityResult= htmlspecialchars($_POST['agilityResult']);
    $intResult= htmlspecialchars($_POST['intResult']);

    session_start();
    $_SESSION["session_userPortrait"] = $userportrait;
    $_SESSION["session_strenghtResult"] = $strenghtResult;
    $_SESSION["session_agilityResult"] = $agilityResult;
    $_SESSION["session_intResult"] = $intResult;

    mysqli_autocommit($connectHeroDataBase, TRUE);

    mysqli_query($connectHeroDataBase, "INSERT IGNORE INTO user_heroes (user_name) SELECT username FROM users WHERE username = '".$_SESSION['session_username']."'");
    mysqli_query($connectHeroDataBase, "UPDATE user_heroes SET hero_portrait = '$userportrait' WHERE user_name = '".$_SESSION['session_username']."'");
    mysqli_query($connectHeroDataBase, "UPDATE user_heroes SET hero_str = '$strenghtResult' WHERE user_name = '".$_SESSION['session_username']."'");
    mysqli_query($connectHeroDataBase, "UPDATE user_heroes SET hero_agility = '$agilityResult' WHERE user_name = '".$_SESSION['session_username']."'");
    mysqli_query($connectHeroDataBase, "UPDATE user_heroes SET hero_int = '$intResult' WHERE user_name = '".$_SESSION['session_username']."'");

    $connectHeroDataBase->close();
    session_write_close(); 
    echo json_encode("$userportrait");
?>