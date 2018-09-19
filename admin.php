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
        if($row["password"] != $userPassword || $row["user_type"]!='admin'){
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
    <title>Admin Page</title>
    

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
                        <li><a href="priviledged_user.php">Go to priviledged User</a></li>
                        <li><a href="config.php">SQL command page</a></li>
                        <li><button id='logout' class='button_option' name='logout'>Logout</button></li>
                    </ul>
                </form>
                <br>
                <h2>Database Options</h2>
                <ul>
                    <li><button id="b_insert" class='button_option'>Insert Data</button></li>
                    <li><button id="b_delete" class='button_option'>Delete Data</button></li>
                    <li><button id="b_update" class='button_option'>Update Data</button></li>
                </ul>
                <br>
                <h2>Database</h2>
                <ul>
                    <li><button id='b1' class='button_option'>Criminal database</button></li>
                    <li><button id='b2' class='button_option'>Crime database</button></li>
                    <li><button id='b3' class='button_option'>Investigation database</button></li>
                    <li><button id='b4' class='button_option'>Convicted for database</button></li>
                    <li><button id='b5' class='button_option'>Criminal (Parole) database</button></li>
                    <li><button id='b6' class='button_option'>Criminal (Jail) database</button></li>
                    
                </ul>


            </div>

            <div id="body">

                <div class="entry">
                    <div class="entrybody">
                        <form action="" method="post">
                            <div class="options_panel_main_body">
                                <div class="boolean_line">Please choose a action from Database Options.</div>


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
        var i = 0;
        
        $("#b_insert").click(function(){
            $(".options_panel_main_body").html("Please select a option from the database at the left side panel.");
                i = 1;
            });
        $("#b_delete").click(function(){
            $(".options_panel_main_body").html("Please select a option from the database at the left side panel.");
                i = 2;
            });
        $("#b_update").click(function(){
            $(".options_panel_main_body").html("Please select a option from the database at the left side panel.");
                i = 3;
            });
        
        $("#b1").click(function(){
            if(i == 1)
                {
                    $(".options_panel_main_body").html("First Name :<br>"+
                                                        "<input type = 'text' name = 'Fname'><br>"+
                                                        "Middle Name :<br>"+
                                                        "<input type = 'text' name = 'Mname'><br>"+
                                                        "Last Name :<br>"+
                                                        "<input type = 'text' name = 'Lname'><br>"+
                                                        "SSN : <br>"+
                                                        "<input type = 'text' name = 'SSN'><br>"+
                                                        "Birthdate : <br>"+
                                                        "<input type = 'tex' name = 'birth_date'><br>"+
                                                        "Crime Level :<br>"+
                                                        "<input type = 'text' name = 'crime_no'><br>"+
                                                        "<input type = 'submit' name = 'criminal_insert' value = 'Insert'><br>");
                }
            
            
            if(i == 2)
                {
                    $(".options_panel_main_body").html("Please enter SSN  "+
                                                        "<input type = 'text' name = 'SSN'><br>"+
                                                        
                                                        "<input type = 'submit' name = 'criminal_delete' value = 'Delete'><br>");
                }
            
            if(i == 3)
                {
                    $(".options_panel_main_body").html("Please enter SSN first:<br>"+
                                                        "<input type = 'text' name = 'SSN' placeholder='Enter SSN here'><br>"+
                                                        "Please only choose filed/s you want to update:<br><br>"+
                                                       
                                                       "<input type = 'text' name = 'Fname' placeholder='First name'><br>"+
                                                       "<input type = 'text' name = 'Mname' placeholder='Middle name'><br>"+
                                                       "<input type = 'text' name = 'Lname' placeholder='Last name'><br>"+
                                                       "<input type = 'tex' name = 'birth_date' placeholder='birth date'><br>"+
                                                       "<input type = 'text' name = 'crime_no' placeholder='Crime Number'><br><br>"+
                                                       
                                                        "<input type = 'submit' name = 'criminal_update' value = 'Update'><br>");
                }
            
            });
        
        $("#b2").click(function(){
            if(i == 1)
                {
                    $(".options_panel_main_body").html(""+
                                                        "Investigation Number :<br>"+
                                                        "<input type = 'text' name = 'investigation_no'><br>"+
                                                        "Place : <br>"+
                                                        "<input type = 'text' name = 'place'><br>"+
                                                        "Crime Date : <br>"+
                                                        "<input type = 'text' name = 'crime_date'><br>"+
                                                        "Crime Type : <br>"+
                                                        "<input type = 'text' name = 'crime_type'><br>"+
                                                        "<input type = 'submit' name = 'crime_insert' value = 'Insert'><br>");
                }
            
            
            if(i == 2)
                {
                    $(".options_panel_main_body").html("Please enter Investigation Number  "+
                                                        "<input type = 'text' name = 'investigation_no'><br>"+
                                                        
                                                        "<input type = 'submit' name = 'crime_delete' value = 'delete'><br>");
                }
            
            if(i == 3)
                {
                    $(".options_panel_main_body").html("Please enter Investigation Number first:<br>"+
                                                        "<input type = 'text' name = 'investigation_no' placeholder='Investigation No'><br>"+
                                                        "Please only choose filed/s you want to update:<br><br>"+
                                                       
                                                        "<input type = 'text' name = 'place' placeholder='Place'><br>"+
                                                        "<input type = 'text' name = 'crime_date' placeholder='Date'><br>"+
                                                        "<input type = 'text' name = 'crime_type' placeholder='Crime type'><br>"+
                                                        "<input type = 'submit' name = 'crime_update' value = 'Update'><br>");
                }
            
            });
        $("#b3").click(function(){
            if(i == 1)
                {
                    $(".options_panel_main_body").html(""+
                                                        "Policae Station :<br>"+
                                                        "<input type = 'text' name = 'polce_station'><br>"+
                                                        "Investigation Number : <br>"+
                                                        "<input type = 'text' name = 'investigation_no'><br>"+
                                                        "Place : <br>"+
                                                        "<input type = 'text' name = 'place'><br>"+
                                                        "Suspect : <br>"+
                                                        "<input type = 'txt' name = 'suspect'><br>"+
                                                        "<input type = 'Submit' name = 'investigation_insert' value = 'Insert'><br>");
                }
            
            
            if(i == 2)
                {
                    $(".options_panel_main_body").html("Please enter Investigation Number and Suspect :<br>"+
                                                        "<input type = 'text' name = 'investigation_no' placeholder='investigation No'><br>"+
                                                       "<input type = 'text' name = 'suspect' placeholder='suspect'><br>"+
                                                        
                                                        "<input type = 'submit' name = 'investigation_delete' value = 'delete'><br>");
                }
            
            if(i == 3)
                {
                    $(".options_panel_main_body").html("Please enter Investigation Number and suspect first:<br>"+
                                                        "<input type = 'text' name = 'investigation_insert' placeholder='Investigation No'><br>"+
                                                       "<input type = 'text' name = 'suspect' placeholder='Suspect'><br>"+
                                                        "Please only choose filed/s you want to update:<br><br>"+
                                                       
                                                        "<input type = 'text' name = 'police_station' placeholder='Ploce Station'><br>"+
                                                        "<input type = 'text' name = 'place' placeholder='Place'><br>"+
                                                        "<input type = 'submit' name = 'investigation_update' value = 'Update'><br>");
                }
            
            });
        
        
        $("#b4").click(function(){
            if(i == 1)
                {
                    $(".options_panel_main_body").html(""+
                                                        "SSN :<br>"+
                                                        "<input type = 'text' name = 'SSN'><br>"+
                                                        "Investigation Number: <br>"+
                                                        "<input type = 'text' name = 'investigation_no'><br>"+
                                                        "<input type = 'Submit' name = 'convicted_insert' value = 'Insert'><br>");
                }
            
            
            if(i == 2)
                {
                    $(".options_panel_main_body").html("Please enter SSN and Investigation Number:<br> "+
                                                        "<input type = 'text' name = 'SSN' placeholder='SSN'><br>"+
                                                        "<input type = 'text' name = 'investigation_no' placeholder='Investigation Number'><br>"+
                                                        
                                                        "<input type = 'submit' name = 'convicted_delete' value = 'delete'><br>");
                }
            
            if(i == 3)
                {
                    $(".options_panel_main_body").html("No data for this table");
                }
            
            });
        
        $("#b5").click(function(){
            if(i == 1)
                {
                    $(".options_panel_main_body").html(""+
                                                        "SSN :<br>"+
                                                        "<input type = 'text' name = 'SSN'><br>"+
                                                        "Police Station :<br>"+
                                                        "<input type = 'text' name = 'police_station'><br>"+
                                                        "Release date :<br>"+
                                                        "<input type = 'text' name = 'release_date'><br>"+
                                                        "Next court visit :<br>"+
                                                        "<input type = 'text' name = 'next_court_visit'><br>"+

                                                        "<input type = 'Submit' name = 'criminal_parole_insert' value = 'Insert'><br>");
                }
            
            
            if(i == 2)
                {
                    $(".options_panel_main_body").html("Please enter SSN :<br> "+
                                                        "<input type = 'text' name = 'SSN' placeholder='SSN'><br>"+
                                                        
                                                        "<input type = 'submit' name = 'criminal_parole_delete' value = 'delete'><br>");
                }
            
            if(i == 3)
                {
                    $(".options_panel_main_body").html(""+
                                                        "Please enter SSN first:<br>"+
                                                        "<input type = 'text' name = 'SSN' placeholder='SSN'><br>"+
                                                        "Please only choose filed/s you want to update:<br><br>"+
                                                       
                                                        "<input type = 'text' name = 'police_station' placeholder='Ploce Station'><br>"+
                                                        "<input type = 'text' name = 'release_date' placeholder='Release date'><br>"+
                                                       "<input type = 'text' name = 'next_court_visit' placeholder='Next court visit'><br>"+
                                                        "<input type = 'submit' name = 'criminal_parole_update' value = 'Update'><br>");
                }
            
            });
        
        
        $("#b6").click(function(){
            if(i == 1)
                {
                    $(".options_panel_main_body").html(""+
                                                        "SSN :<br>"+
                                                        "<input type = 'text' name = 'SSN'><br>"+
                                                        "Service Hour :<br>"+
                                                        "<input type = 'text' name = 'service_hour'><br>"+
                                                        "Release date :<br>"+
                                                        "<input type = 'text' name = 'release_date'><br>"+
                                                        "Work :<br>"+
                                                        "<input type = 'text' name = 'work'><br>"+

                                                        "<input type = 'Submit' name = 'criminal_jail_insert' value = 'Insert'><br>");
                }
            
            
            if(i == 2)
                {
                    $(".options_panel_main_body").html("Please enter SSN :<br> "+
                                                        "<input type = 'text' name = 'SSN' placeholder='SSN'><br>"+
                                                        
                                                        "<input type = 'submit' name = 'criminal_jail_delete' value = 'delete'><br>");
                }
            
            if(i == 3)
                {
                    $(".options_panel_main_body").html(""+
                                                        "Please enter SSN first:<br>"+
                                                        "<input type = 'text' name = 'SSN' placeholder='SSN'><br>"+
                                                        "Please only choose filed/s you want to update:<br><br>"+
                                                       
                                                        "<input type = 'text' name = 'service_hour' placeholder='Service hour'><br>"+
                                                        "<input type = 'text' name = 'release_date' placeholder='Release date'><br>"+
                                                       "<input type = 'text' name = 'work' placeholder='work'><br>"+
                                                        "<input type = 'submit' name = 'criminal_jail_update' value = 'Update'><br>");
                }
            
            });
    });
        
    </script>
</html>









<?php
        
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
//======================= Criminal database =====================================================
    if(array_key_exists('criminal_insert',$_POST)){
        $fname = $_POST['Fname'];
        $mname = $_POST['Mname'];
        $lname = $_POST['Lname'];
        $SSN = $_POST['SSN'];
        $birthdate = $_POST['birth_date'];
        $crime_no = $_POST['crime_no'];
        $query ="INSERT INTO criminal VALUES('$fname','$mname','$lname','$SSN','$birthdate','$crime_no');";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('criminal_delete',$_POST)){
        $SSN = $_POST['SSN'];
        $query ="delete from criminal where SSN = '$SSN';";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('criminal_update',$_POST)){
        $fname = $_POST['Fname'];
        $mname = $_POST['Mname'];
        $lname = $_POST['Lname'];
        $SSN = $_POST['SSN'];
        $birthdate = $_POST['birth_date'];
        $crime_no = $_POST['crime_no'];

        
        $query ="update criminal set fname='$fname', mname = '$mname', lname = '$lname', birth_date = '$birth_date', crime_no='$crime_no' where SSN='$SSN';";
        $result = mysqli_query($con,$query);
    }


//======================= Crime database =====================================================
    if(array_key_exists('crime_insert',$_POST)){
        $invest = $_POST['investigation_no'];
        $place = $_POST['place'];
        $crimeDate = $_POST['crime_date'];
        $crimeType = $_POST['crime_type'];
        
        
        $query ="INSERT INTO crime VALUES('$invest','$place','$crimeDate','$crimeType');";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('crime_delete',$_POST)){
        $invest = $_POST['investigation_no'];
        
        
        $query ="delete from crime where investigation_no = '$invest';";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('crime_update',$_POST)){
        $invest = $_POST['investigation_no'];
        $place = $_POST['place'];
        $crimeDate = $_POST['crime_date'];
        $crimeType = $_POST['crime_type'];

        
        $query ="update crime set investigation_no='$invest', place = '$place', crime_date = '$crimeDate', crime_type = '$crimeType';";
        $result = mysqli_query($con,$query);
    }


    //======================= Investigation database =====================================================
    if(array_key_exists('investigation_insert',$_POST)){
        $pstation = $_POST['police_station'];
        $investNo = $_POST['investigation_no'];
        $place = $_POST['place'];
        $suspect = $_POST['suspect'];
        
        
        $query ="INSERT INTO investigation VALUES('$pstation','$investNo','$place','$suspect');";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('investigation_delete',$_POST)){
        $investNo = $_POST['investigation_no'];
        $suspect = $_POST['suspect'];
        
        
        $query ="delete from investigation where investigation_no = '$investNo' and suspect='$suspect';";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('investigation_update',$_POST)){
        $pstation = $_POST['police_station'];
        $investNo = $_POST['investigation_no'];
        $place = $_POST['place'];
        $suspect = $_POST['suspect'];

        $query ="update investigation set police_station = '$pstation', place = '$place' where investigation_no='$investNo' and suspect = '$suspect';";
        $result = mysqli_query($con,$query);
    }


    //======================= Convicted_for database =====================================================
    if(array_key_exists('convicted_insert',$_POST)){
        $SSN = $_POST['SSN'];
        $invest = $_POST['investigation_no'];
        
        
        $query ="INSERT INTO convicted_for VALUES('$SSN','$invest');";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('convicted_delete',$_POST)){
        $SSN = $_POST['SSN'];
        $invest = $_POST['investigation_no'];
        
        
        $query ="delete from convicted_for where SSN = '$SSN' and investigation_no='$invest';";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('convicted_update',$_POST)){
        $SSN = $_POST['SSN'];
        $invest = $_POST['investigation_no'];

        
        $query ="update convicted_for set investigation_no = '$invest' where SSN='$SSN';";
        $result = mysqli_query($con,$query);
    }


//======================= Criminal in Parole database =====================================================
    if(array_key_exists('criminal_parole_insert',$_POST)){
        $SSN = $_POST['SSN'];
        $pstation = $_POST['police_station'];
        $date = $_POST['release_date'];
        $visit = $_POST['next_court_visit'];
        
        
        $query ="INSERT INTO criminal_in_parole VALUES('$SSN','$pstation','$date','$visit');";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('criminal_parole_delete',$_POST)){
        $SSN = $_POST['SSN'];
        
        
        $query ="delete from criminal_in_parole where SSN = '$SSN'';";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('criminal_parole_update',$_POST)){
        $SSN = $_POST['SSN'];
        $pstation = $_POST['police_station'];
        $date = $_POST['release_date'];
        $visit = $_POST['next_court_visit'];

        
        $query ="update criminal_in_parole set police_station = '$pstation', release_date='$date', next_court_visit='$visit' where SSN='$SSN';";
        $result = mysqli_query($con,$query);
    }


    //======================= Criminal in Jail database =====================================================
    if(array_key_exists('criminal_jail_insert',$_POST)){
        $SSN = $_POST['SSN'];
        $hour = $_POST['service_hour'];
        $date = $_POST['release_date'];
        $work = $_POST['work'];
        
        
        $query ="INSERT INTO criminal_in_jail VALUES('$SSN','$hour','$date','$work');";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('criminal_jail_delete',$_POST)){
        $SSN = $_POST['SSN'];
        
        
        $query ="delete from criminal_in_jail where SSN = '$SSN'';";
        $result = mysqli_query($con,$query);
    }
    if(array_key_exists('criminal_jail_update',$_POST)){
        $SSN = $_POST['SSN'];
        $hour = $_POST['service_hour'];
        $date = $_POST['release_date'];
        $work = $_POST['work'];

        
        $query ="update criminal_in_jail set service_hour = '$hour', release_date='$date', work='$work' where SSN='$SSN';";
        $result = mysqli_query($con,$query);
    }
?>
