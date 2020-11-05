<!DOCTYPE html>
<html>
<title> Non-persistent attacks </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
	body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	a {color:blue;}
	h3 {color:blue;}
	h1 {color:blue;}
</style>
<body class="w3-light-grey">
<h1 align="center"> Search Feature! </h1>

<table align="center">
<tr><td>
<form action="non_persistent_attacks.php" method="get">
	<input type="text" name="search" placeholder="search" />
	<input type="submit" value="Search" />
</form>
</td></tr>
</table>

<p align="center">
<?php
	if(isset($_GET["search"]))
	{
		echo "The results of your search for: <b>".$_GET["search"]."</b>";
		echo "<br /><br /> Sorry No Results Found! ";
	}
?>
</p>

<div class="w3-card-4 w3-margin w3-white" x>
	<div class="w3-container">
		<br>This is simple demonstration page for understanding non-persistent attacks which takes search keyword as input (GET Method ) and prints the keyword and &quot;Sorry No Results Found&quot; as the output. <br> <br>
		<b>Try doing following searches:</b>
		<ul>
			<li><b>Hiii !!! </b>
				<p> It will simply show no results found. </p>
			</li>
			<li><b>Yaayy &lt;i&gt; </b>
				<p> It will turn text to italic. </p>
			</li>
			<li> <b> Great &lt;font color=&quot;blue&quot;&gt; </b>
				<p> color of text will be changed to blue. </p>
			</li>
			<li><b> &lt;script&gt;alert(&quot;XSS Attack&quot;)&lt;/script&gt;</b>
				<p>Will create a simple alert.</p>
			</li>

		</ul>

		Note that with non-persistent cross-site scripting, malicious code is executed by the victim’s browser, and the payload is not stored anywhere; instead, it is returned as part of the response HTML that the server sends.<br><br>
	</div>
</div>

<h3><p align="center"> <a href="index.php"> Go to Home </a></p></h3>
 
</body>
</html> 