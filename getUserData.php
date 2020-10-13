<?php
        
        $connect = new mysqli('localhost', 'deepreap_admin','Fisher123','deepreap_game');
        $connect->set_charset("utf8");

        session_start();

        $result  = mysqli_query($connect, "SELECT * FROM users WHERE username='".$_SESSION['session_username']."'");

        while ($row = $result->fetch_object())
        $obj = $row; 

        session_write_close();
        echo json_encode($obj);

?>