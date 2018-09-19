
<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
    echo "There was an error!";
    }
    session_start();


//
    if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$userName = $_POST["username_field"];
		$userPassword = $_POST["password_field"];
		$sql = "SELECT * FROM login WHERE username='".$userName."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        if ($result->num_rows > 0) {
            if($row["password"] == $userPassword)
            {
                
                $_SESSION["user"] = $userName;
                $_SESSION["pass"] = $userPassword;
                //If admin redirect to admin page
                if($row["user_type"]=='admin')
                {
                    header('Location: admin.php');
                    exit;
                }
                
                //If admin redirect to Priviledged admin page
                if($row["user_type"] =='p_admin');
                {
                    header('Location: config.php');
                    exit;
                }
                
                //If admin redirect to Priviledged user page
                if($row["user_type"]=='p_user')
                {
                    header('Location: priviledged_user.php');
                    exit;
                }
                
                //If admin redirect to user page
                if($row["user_type"]=='user')
                {
                    header('Location: user.php');
                    exit;
                }
                
                
            }
            else
            {
                //echo "Wrong username or password!";
                header('Location: wrong_info.html');
                exit;
            }
        }
	}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="resources/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <title>Information database</title>
        <meta http-equiv="refresh" content="100" >
        
        
        
    </head>
    <body>
        
        <header>
            <form method="POST" enctype="multipart/form-data" action="index.php">
                <div class="login-panel">
                    <br>
                    Username<br>
                    <input type="text" name="username_field"><br>
                    <br>
                    Password<br>
                    <input type="password" name="password_field"><br>
                    <br>
                    <button type="submit" value="Submit">Sign in</button>
                </div>
            </form>
        </header>
        
    </body>