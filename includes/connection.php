<?php
	//require("constants.php");

    $connect = new mysqli('localhost', 'deepreap_admin','Fisher123','deepreap_game');
    if ($connect->connect_error) {
        die('Error : ('. $connect->connect_errno .') '. $connect->connect_error);
    }
        else{
           // echo "Подключились к БД успешно!";
        }
        /* изменение набора символов на utf8 */
        $connect->set_charset("utf8");
?>