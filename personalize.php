<?php 
            $connect = new mysqli('localhost', 'deepreap_admin','Fisher123','deepreap_game');
            // $usernumber= htmlspecialchars($_POST['usernumber']);
            // $usercolor= htmlspecialchars($_POST['usercolor']);

            session_start();
            // $_SESSION['session_usernumber'] = $usernumber;
            // $_SESSION['session_usercolor'] = $usercolor;

            // mysqli_query($connect,"UPDATE usertbl SET user_value = '$usernumber' WHERE username='".$_SESSION['session_username']."'");
            // mysqli_query($connect,"UPDATE usertbl SET user_color = '$usercolor' WHERE username='".$_SESSION['session_username']."'");

            session_write_close(); 
            echo json_encode("ok");
?>