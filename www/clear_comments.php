<html>
<title> Clear database </title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
	body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	a {color:blue;}
	h3 {color:blue;}
</style>

<?php
 
	$con = mysqli_connect("db","user","test","myDb");

	// Checking connection
	if(mysqli_connect_errno())
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	if (isset($_POST['clear'])){
		$sql = "TRUNCATE TABLE comments";
		if ($con->query($sql) === TRUE){
			echo "Table Cleared";
		} else {
			echo "Error: Unable to Clear Table". $conn->error;
		}
	}
?>


<p align="center"> <a href="index.php"> Go to Home </a></p>
</body>
</html>