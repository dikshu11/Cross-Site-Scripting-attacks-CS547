
<!DOCTYPE html>
<html>
<title>Cross-Site scripting attacks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
	h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif, color:blue;}
	a {color:blue;}
	h3 {color:blue;}
</style>
<body class="w3-light-grey">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Cross-Site Scripting Attacks</b></h1>
</header>


<div class="w3-card-4 w3-margin w3-white">

	<div class="w3-container">
		<span display='inline-block' style="width:30%; float:left">
			<h3 ><b>Introduction</b></h3>
			<hr>
	  		<p>
	  			A web application is an application that uses a web browser as a client that can be as simple as a message board or a guest sign-in book on a website or as complex as a full database system used to run a large company. Web apps are becoming truly pervasive in all kinds of businesses, models, and organizations. <br> <br>
	  			Today, most critical systems such as healthcare, banking, or even emergency response rely on these applications. They must therefore include, in addition to the expected value offered to their users, reliable mechanisms to ensure their security.  We aim to explore Cross-Site Scripting (XSS) attacks, its types, vulnerabilities exploited, and impact on safety. <br><br>
	  			Cross-site Scripting (XSS) attacks are considered to be the most potential website risk. More than 60% of web apps are vulnerable to them, and they ultimately constitute over 30% of all web apps attacks. XSS attacks are complicated, and they often are used in conjunction with social engineering techniques to cause even more damage. Although prevention techniques exist, hackers still find points of vulnerability to launch their attacks. <br>
	  			<b>In this project, we will try to simulate different kinds of XSS attacks and prevent them.</b>
			</p>
	  </span>
	  <span display='inline-block'  style="width:55%; float:right" >
			<img src="https://miro.medium.com/max/860/1*WlIahD2A2DyEceQZxnAUhw.png" alt="Nature" width="100%">
	  </span>
	 
	</div>

	<div class="w3-container">
		<h3 ><b>Cross-Site Scripting Attacks</b></h3>
		<hr>
		<p>
			Cross-Site Scripting (XSS) attacks are a type of injection in which malicious scripts are injected into otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application to send malicious code, generally in a browser side script, to a different end-user. Flaws that allow these attacks to succeed are quite widespread and occur anywhere in a web application that uses input from a user within the output generated without validating or encoding it.<br><br>
			<b>Cross-Site Scripting (XSS) attacks occur when:</b><br>
			<ul>
				<li> Data enters a Web application through an untrusted source, most frequently a web request. </li>
				<li> The data is included in dynamic content sent to a web user without being validated for malicious content. </li>
			</ul> <br>
			The malicious content sent to the web browser often takes the form of a JavaScript segment but may also include HTML, Flash, or any other type of code that the browser may execute. The variety of attacks based on XSS is almost limitless, but they commonly include transmitting private data, like cookies or other session information, to the attacker, redirecting the victim to web content controlled by the attacker, or performing other malicious operations on the user’s machine under the guise of the vulnerable site.
		</p>
	</div>

	<div class="w3-container">
	  <h3><b>Types of Cross-Site Scripting Attacks</b></h3>
	  <hr>
	  <p>
		  	<ul>
		  		<li> Persistent Attacks:
		  			<p>Persistent XSS generally occurs when user input is stored on the target server, such as in a database, in a message forum, visitor log, comment field, etc. A victim can then retrieve the stored data from the web application without that data being made safe to render in the browser.</p>
		  			<a  href="persistent_attacks.php"> Try out persistent attack here </a>
		  		</li>
		  		<hr>
		  		<li> Non-Persistent Attacks or Reflected XSS attacks:
		  			<p>With Non-Persistent cross-site scripting, malicious code is executed by the victim’s browser, and the payload is not stored anywhere; instead, it is returned as part of the response HTML that the server sends. Therefore, the victim is being tricked into sending malicious code to the vulnerable web application, which is then reflected in the victim’s browser, where the XSS payload executes.</p>
		  			<a  href="non_persistent_attacks.php"> Try out non persistent attack here </a>
		  		</li>
		  		<hr>
		  		<li> Stealing Cookies XSS Attack:
		  			<p>A cookie is a tiny piece of information sent from a website and stored on the user’s computer by the web browser. Websites use cookies to remember specific details about a user and in other situations, such as adding items to a shopping cart. Attackers can maliciously use this data to steal sensitive information like credit card numbers, browsing history, and email information.  The attacker can view confidential information about a user and perform any actions for which the user has permissions.</p>
		  			<a  href="steal_cookies.php"> Try out stealing cookies here </a>
		  		</li>
		  		<hr>
		  	</ul>
	  	</p>
	</div>

	<div class="w3-container">
		<form align="center" action="clear_comments.php" method="post">
			<b> Delete All comments: <input type="submit" name="clear" value="Clear Table" /> </b>
		</form>
		<br>
	</div>

	<div class="w3-container">
			
		  <h3><b>Project Updates</b></h3>
		  <hr>
		  <ol>
			<li><a href="https://docs.google.com/document/d/12wyFlyAv80M8y0cC64LQbpG3Pu-yjBdJBtgMCF8uPxI/edit#"> Find Project update1 here. </a></li>
			<li> We are planning to analyse existing ways of preventing and testing XSS attacks in update 2. </li>
		 </ol>
	</div>

	<div class="w3-container">
			
		  <h3><b>Group details</b></h3>
		  <hr>
		  <ol>
			<li><b>Diksha Bansal</b> -1701CS19</li>
			<li><b>Rahul Grover</b> -1701CS36</li>

		 </ol>
	</div>

	<div class="w3-container">
		  <h3><b>References</b></h3>
		  <hr>
		  <ol>
			<li><a href="https://owasp.org/www-community/attacks/xss/">Cross Site Scripting (XSS)</a></li>
			<li><a href="https://www.researchgate.net/publication/45854027_A_Survey_on_Cross-Site_Scripting_Attacks">Cross-site scripting attacks</a></li>
			<li><a href="https://digitalcommons.odu.edu/cgi/viewcontent.cgi?article=1459&context=vjs">A Study of Existing Cross-Site Scripting Detection and Prevention Technique </a></li>
		 </ol>
		 <br>
		 <br>
	</div>

</div>
</body>
</html>
