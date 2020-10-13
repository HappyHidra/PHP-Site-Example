<?php
if (isset($_POST["username"]) && isset($_POST["password"]) ) { 
//isset — Определяет, была ли установлена переменная значением, отличным от NULL
//&& является логическим И 
   // $query1 = mysqli_query($connect,"SELECT email" FROM "usertbl");
	// Формируем массив для JSON ответа
    $result = array(
    	'username' => $_POST["username"],
        'password' => $_POST["password"]
     //   'email' => $query1
    ); 
    // Переводим массив в JSON
    echo json_encode($result); 
}

else
    {
        $result = array(
            'username' => ["Не введены"],
            'password' => ["логин и пароль"]
        ); 
        echo json_encode($result);
    }
?>