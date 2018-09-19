<?php


$user = 'root';
$password = '';
$db = 'finalproject';

$conn = mysqli_connect('localhost','root','',$db);

//Crime

if(array_key_exists('crime_update',$_POST)){
        $place = $_POST['place'];
        $date = $_POST['crime_date'];
        $type = $_POST['crime_type'];
        
		$number = $_POST['investigation_no'];

        $query ="UPDATE crime SET place='$place', crime_date = '$date', crime_type = '$type' WHERE investigation_no=$number";
        $result = mysqli_query($conn,$query);
    }

//investigation	
if(array_key_exists('investigation',$_POST)){
        $station = $_POST['police_station'];
        $place = $_POST['place'];
		
		$suspect = $_POST['suspect'];
        $number = $_POST['investigation_no'];

        $query ="UPDATE investigation SET police_station='$station', place = '$place' WHERE investigation_no=$number AND suspect = $suspect";
        $result = mysqli_query($conn,$query);
    }

//Parole	

if(array_key_exists('criminal_in_parole',$_POST)){
        $station = $_POST['police_station'];
        $release_date = $_POST['release_date'];
		$next_visit = $_POST['next_visit'];
        
		$SSN = $_POST['SSN'];

        $query ="UPDATE criminal_in_parole SET police_station='$station', release_date = '$release_date',next_court_visit = '$next_visit' WHERE SSN = $SSN";
        $result = mysqli_query($conn,$query);
    }

//Jail


if(array_key_exists('criminal_in_jail',$_POST)){
        $hour = $_POST['service_hour'];
        $release_date = $_POST['release_date'];
		$work = $_POST['work'];
        
		$SSN = $_POST['SSN'];

        $query ="UPDATE criminal_in_jail SET service_hour='$hour', release_date = '$release_date', work = '$work' WHERE SSN = $SSN";
        $result = mysqli_query($conn,$query);
    }	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
