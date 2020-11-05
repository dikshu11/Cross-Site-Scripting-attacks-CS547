<?php
	$con = mysqli_connect("db","user","test","myDb");
	if(mysqli_connect_errno())
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	if (isset($_POST['comment'])){
		$sql = "INSERT INTO comments (comment)
		VALUES ('".addslashes($_POST['comment'])."')";
		if ($con->query($sql) === TRUE)
			echo "<center> successfully added!!!</center>";
		else 
			echo "Error: Unable to Add comment". $conn->error;
	}
	$con->close();
?>


<html>
	<title> Persistent Attacks </title>
	<style>
		#bord td
		{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<style>
		body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
		a {color:blue;}
		h3 {color:blue;}
		h1 {color:blue;}
	</style>

	<body class="w3-light-grey">

		<h1 align="center"> Comment Website! </h1>
		<br>

		<table align="center">
			<tr><td>
				<form action="persistent_attacks.php" method="post">
					<textarea rows="6" cols="50" name="comment" placeholder="Leave a comment" maxlength="400"></textarea>
					<table align="center"><tr><td>
					<input type="submit" value="Comment" />
					</td></tr></table>
				</form>
			</td></tr>
		</table>

		<br />

		<table align="center" id="bord">
			<?php
				$con = mysqli_connect("db","user","test","myDb");
				$sql = "SELECT comment FROM comments";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    echo "<tr><th style='width:35%'>All Comments</th></tr>";
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td style='width:35%;padding:10px'>".$row["comment"]."<br /></td></tr>";
				    }
				} else {
				    echo "<tr><th style='width:35%'>No Comments!</th></tr>";
				}
				$con->close(); 
			?>
		</table>

		<br>

		<table align="center">
			<tr><td>
				<form action="clear_comments.php" method="post">
					Delete All comments: <input type="submit" name="clear" value="Clear Table" />
				</form>
			</td></tr>
		</table>

		<div class="w3-card-4 w3-margin w3-white" x>
		<div class="w3-container">
			<br>This is simple demonstration page for understanding persistent attacks which takes comments as input (POST Method ) and prints all the comments posted as the output. <br> <br>
			<b>Try adding the following comments:</b>
			<ul>
				<li><b>Hiii !!! </b>
					<p> It will simply add a new comment. </p>
				</li>
				<li><b> Creating an alert &lt;script&gt;alert(&quot;Attacked&quot;)&lt;/script&gt;</b>
					<p>Will create a simple alert.</p>
				</li>
				<li> <b> Redirecting &lt;script&gt; window.location='https://www.linkedin.com/feed/' &lt;/script&gt; </b>
					<p> Will redirect to <a href='https://www.linkedin.com/feed/'>https://www.linkedin.com/feed/</a>. You will need to delete all the comments from table again to stop redirecting. </p>
				</li>

			</ul>

			Persistent XSS generally occurs when user input is stored on the target server, such as in a database, in a message forum, visitor log, comment field, etc. A victim can then retrieve the stored data from the web application without that data being made safe to render in the browser. <br><br>
		</div>
	</div>

		<h3><p align="center"> <a href="index.php"> Go to Home </a></p></h3>
	</body>
</html>