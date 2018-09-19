<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="resources/style.css">
		<style>
			body {
				font-family: sans-serif;
				font-size: 11pt;
				background-image: url(htdocs/Untitled13.jpg);
				background-size: cover;
			}

			table{
				border: 1px black;
			}
			th,td{
				padding: 10px;
				text-align: center;
			}
			tr:nth-child(even){
				background-color: #e8e8e8;
			}
			tr:nth-child(odd){
				background-color: white;
			}
		
		</style>

</head>
<body>
<h1>User Page</h1>
			<form action= "" align="center" method="post">
				<input type = "Submit" name = "showCriminal" value = "Show Criminal">
				<input type = "Submit" name = "showParole" value = "Criminal in Parole">
				<input type = "Submit" name = "showJail" value = "Criminal in Jail">
				<br>
			</form>
	

<table align="center" width = "700" border="2" cellpadding="1" cellspacing="1">
	
	<tr>
		<th>Full Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>SSN</th>
		<th>Birthdate</th>
		<th>Crime Level</th>
		<th>Investigation Number</th>
			
	

<?php

$user = 'root';
$password ='';
$db = 'finalproject';

$con = mysqli_connect('localhost','root','',$db);

if(isset($_POST['showCriminal'])){
	header('Location: criminal.php');
}
if(isset($_POST['showParole'])){
		header('Location: criminal_in_parole.php');
}
if(isset($_POST['showJail'])){
		header('Location: criminal_in_jail.php');
}
$query = "SELECT criminal.Fname,criminal.Mname,criminal.Lname,criminal.SSN,criminal.birthdate,criminal.crime_level,convicted_for.investigation_no
FROM criminal
INNER JOIN convicted_for ON criminal.SSN=convicted_for.SSN";

	  
$save = mysqli_query($con,$query);
	  
	  while($row = mysqli_fetch_array($save)){
		  
		  echo "<tr>";
		  echo"<td>".$row['Fname']."</td>";;
		  echo"<td>".$row['Mname']."</td>";
		  echo"<td>".$row['Lname']."</td>";
		  echo"<td>".$row['SSN']."</td>";
		  echo"<td>".$row['birthdate']."</td>";
		  echo"<td>".$row['crime_level']."</td>";
		  echo"<td>".$row['investigation_no']."</td>";
		}


?>
</table>
</body>
</html>