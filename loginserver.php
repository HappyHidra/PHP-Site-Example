<?php 

    $connect = new mysqli('localhost', 'deepreap_admin','Fisher123','deepreap_game');

	if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: intropage.php");
	}

    if(isset($_POST["username"]))
    {
        if(!empty($_POST['username']) && !empty($_POST['password'])) 
        {
            $username=htmlspecialchars($_POST['username']);
            $password=htmlspecialchars($_POST['password']);
 
            $query  = mysqli_query($connect,"SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ");
            
            $numrows = mysqli_num_rows($query);

            if($numrows!=0)
                {
                    while($row=mysqli_fetch_assoc($query))
                        {
                            $dbusername=$row['username'];
                            $dbpassword=$row['password'];
                        }
                        if($username == $dbusername && $password == $dbpassword)
                        {
                            session_start();
                            $_SESSION['session_username'] = $username;	
                            session_write_close(); 
                            echo json_encode("ok"); //то что посылается сервером в ответ
                        }
                } 
            else{
                    $sendback =  "Неправильный логин или пароль!";
                    echo json_encode($sendback);
                }
        } 
            else{
                    $sendback = "Заполните поля логин и пароль!";
                    echo json_encode($sendback);
                }
    }
?>