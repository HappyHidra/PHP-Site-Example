<?php
        
        $connect = new mysqli('localhost', 'deepreap_admin','Fisher123','deepreap_game');
        $connect->set_charset("utf8");

        session_start();

        $result  = mysqli_query($connect, "SELECT * FROM user_heroes WHERE user_name='".$_SESSION['session_username']."'");

        while ($row = $result->fetch_object())
        $obj = $row; 

        session_write_close();
        echo json_encode($obj);

?>