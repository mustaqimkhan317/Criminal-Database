<body>
<form action= "" method="post">
				<input type = "Submit" name = "showCriminal" value = "Show Criminal">
</form>				
<table align="center" width="700" border="2" cellpadding="1" cellspacing="1">
	<tr>
		<th>Place</th>
		<th>Crime Date</th>
		<th>Crime Type</th>
		<th>Investigation Number</th>
		<th>Police Station</th>
		<th>Place</th>
		<th>Suspect</th>
<?php

$user = 'root';
$password ='';
$db = 'finalproject';

$con = mysqli_connect('localhost','root','',$db);

if(isset($_POST['showCriminal'])){
		header('Location: criminal.php');
}

$query = "SELECT crime.place,crime.crime_date,crime.crime_type,crime.investigation_no,investigation.police_station,investigation.place,investigation.suspect
FROM crime
INNER JOIN investigation ON crime.investigation_no=investigation.investigation_no";

	  
$save = mysqli_query($con,$query);
	  
	  while($row = mysqli_fetch_array($save)){
		  
		  echo "<tr>";
		  echo"<td>".$row['place']."</td>";;
		  echo"<td>".$row['crime_date']."</td>";
		  echo"<td>".$row['crime_type']."</td>";
		  echo"<td>".$row['investigation_no']."</td>";
		  echo"<td>".$row['police_station']."</td>";
		  echo"<td>".$row['place']."</td>";
		  echo"<td>".$row['suspect']."</td>";
		}

?>
</table>
</body>