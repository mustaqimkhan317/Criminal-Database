<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
    echo "There was an error!";
    }
/*
    if (session_status() == PHP_SESSION_NONE) {
        header('Location: index.php');
        exit;
    }

    session_start();
    $userName = $_SESSION["user"];
    $userPass = $_SESSION["pass"];
    $sql = "SELECT * FROM login WHERE username='".$userName."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        if($row["password"] != $userPassword && ($row["user_type"]!='admin'||$row["user_type"]!='p_user'){
            header('Location: index.php');
            exit;
        }
    }
    else{
        header('Location: index.php');
        exit;
    }
*/


if(array_key_exists('logout',$_POST)){
    session_destroy();
    header('Location: index.php');
    exit;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="resources/css_admin.css">
    <title>Priviledged user Page</title>
    

</head>
<body>
	
    <div id="wrapper">

            <div id="header">
                <h3><a href="#">Bangladesh Security Agency</a></h3>
            </div>

            <div id="sidebar">
                <h2>Navigation</h2>
                <form action="" method="post">
                    <ul>
                        <li><a href="user.php">Go to User</a></li>
                        <li><button id='logout' class='button_option' name='logout'>Logout</button></li>
                    </ul>
                </form>
                <br>
                <h2>Search Option using</h2>
                <ul>
                    
                    <li><button id='b1' class='button_option'>Criminal SSN</button></li>
                    <li><button id='b2' class='button_option'>Criminal name</button></li>
                    <li><button id='b3' class='button_option'>Investigation Number</button></li>
                    <li><button id='b4' class='button_option'>Criminal in Parole</button></li>
                    <li><button id='b5' class='button_option'>Criminal in Jail</button></li>
                    
                </ul>
                <br>
                <h2>Show users</h2>
                <ul>
                    <form action="" method="post">
                        <li><button name='login_table' class='button_option'>Show users</button></li>
                    </form>
                    
                </ul>

            </div>

            <div id="body">

                <div class="entry">
                    <div class="entrybody">
                        <form action="" method="post">
                            <div class="options_panel_main_body">
                                Please choose a action from the left panel.
                                <?php 
                                    //=========================================================data tables go here===============================================================
                                    if(array_key_exists('login_table',$_POST)){
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "test";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        
                                        $sql = "SELECT id, username, user_type FROM login order by id";
                                        
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            echo "<br> <table cellspacing='0'> <tr>  <th> username </th><th>User type</th>  </tr>";
                                            while($row = $result->fetch_assoc()) 
                                            {
                                                echo "<tr>  <td>".$row['username']."</td>  <td>".$row['user_type']."</td> </tr>";
                                            }
                                            echo "</table>";
                                        } 
                                        else 
                                        {
                                            echo "0 results";
                                        } 
                                    }
                                    if(array_key_exists('login_table',$_POST)){
                                        
                                    }
                                
                                
                                
                                //===============================================================the end===========================================================================
                                ?>

                            </div>  
                        </form>
                    </div>
                </div>
            </div>


            <div id="footer">
                <div id="footer-nav">
                </div>
                <div id="copyright">
                    This site is designed for CSE370 course of BRAC University.<br />
                    Design by Ony Hoque
                </div>
            </div>

    </div>

</body>

<script>
        
    $(document).ready(function(){
        
        $("#b1").click(function(){
            $(".options_panel_main_body").html("Please insert the value for information:<br>"+
                                              "<input type = 'text' name = 'SSN' placeholder='Enter SSN here'><br>"+
                                              "<input type = 'submit' name = 'selelct_SSN' value = 'Search'><br>");
            
            
            });
        
        $("#b2").click(function(){
            $(".options_panel_main_body").html("Please insert the values for information:<br>"+
                                               "<input type = 'text' name = 'fname' placeholder='Enter First name here'><br>"+
                                               "<input type = 'text' name = 'mname' placeholder='Enter Middle name here'><br>"+
                                               "<input type = 'text' name = 'lname' placeholder='Enter Last name here'><br>"+
                                               "<input type = 'submit' name = 'selelct_name' value = 'Search'><br>");
            
            
            });
        
        $("#b3").click(function(){
            $(".options_panel_main_body").html("Please insert the value for information:<br>"+
                                               "<input type = 'text' name = 'investigationNo' placeholder='Enter Investigation No here'><br>"+
                                               "<input type = 'submit' name = 'selelct_investigationNo' value = 'Search'><br>");
            
            
            });
        
        $("#b4").click(function(){
            $(".options_panel_main_body").html("Please insert the value for information:<br>"+
                                               "<input type = 'text' name = 'SSN' placeholder='Enter SSN here'><br>"+
                                               "<input type = 'submit' name = 'selelct_SSN_parole' value = 'Search'><br>");
            
            
            });
        
        $("#b5").click(function(){
            $(".options_panel_main_body").html("Please insert the value for information:<br>"+
                                               "<input type = 'text' name = 'SSN' placeholder='Enter SSN here'><br>"+
                                               "<input type = 'submit' name = 'selelct_SSN_jail' value = 'Search'><br>");
            
            
            });
        });
</script>    
    
</html>









<?php
        
    
?>
