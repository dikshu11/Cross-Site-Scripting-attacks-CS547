
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
	  <h3><b>XSS Prevention Strategies</b></h3>
	  <hr>
	  <p>
	  		Application built should be robust against all forms of input data, whether obtained from the user, infrastructure, external entities or database systems. Data from the client may be tampered and should never be trusted. <br>

	  		<b><h4>Following checks must be done:</h4></b>
			<ol>
				<li><b> Validation: </b>
					<p>Ensure that the data is strongly typed, correct syntax, within length boundaries, contains only permitted characters, or that numbers are correctly signed and within range boundaries. For example,  Name should not contain &#x3C; character. </p>
				</li>
				<li><b>Business rules: </b>
					<p>Ensure that data is not only validated, but business rule correct. For example, interest rates fall within permitted boundaries</p>
				</li>
			</ol>
			Basically, Data should be:
			<ul>
				<li> Strongly typed at all times. </li>
				<li> Length checked and fields length minimized. </li>
				<li> Range checked if a numeric. </li>
				<li>Unsigned unless required to be signed. </li>
				<li>Syntax or grammar should be checked prior to first use or inspection. </li>
			</ul>
	  </p>
	  <br>
	  <p>
	  	<b><h4> Basics Rules to be followed: </h4></b>
	  	<ol>
	  		<li>
	  			<h5>Don’t Insert Untrusted Data Except in Allowed Locations:</h4>
	  			<p>
	  				The list of encoding rules gets very complicated because there are so many strange contexts within HTML. We can't think of any good reason to put untrusted data in these contexts. This includes "nested contexts" like a URL inside a JavaScript -- the encoding rules for those locations are tricky and dangerous.
	  			</p>
	  			<hr>
	  		</li>
	  		<li><h5>HTML Encode Before Inserting Untrusted Data into HTML Element Content:</h5>
	  			<p>
	  				Encode the following characters with HTML entity encoding to prevent switching into any execution context, such as script, style, or event handlers. Using hex entities is recommended in the spec. The 5 characters significant in XML (&#x26;, &#x3C;, &#x3E;, &#x22;, &#x27;).
	  			</p>
	  			<hr>
	  		</li>
	  		<li><h5>Attribute Encode Before Inserting Untrusted Data into HTML Common Attributes:</h5>
	  			<p>
	  				All characters with ASCII values less than 256 should be encoded (except alphanumeric) with the "&#xHH;" format (or a named entity if available) to prevent switching out of the attribute.<br>
	  				Attributes are generally left unquoted. Properly quoted attributes can only be escaped with the corresponding quote. Unquoted attributes can be broken out of with many characters, including [space] % * + , - / ; &#x3C; = &#x3E; ^ and |.
	  			</p>
	  			<hr>
	  		</li>
	  		<li><h5> JavaScript Encode Before Inserting Untrusted Data into JavaScript Data Values:</h5>
	  			<p>
	  				The only safe place to put untrusted data into this code is inside a quoted &#x22;data value.&#x22; Including untrusted data inside any other JavaScript context is quite dangerous, as it is extremely easy to switch into an execution context with characters including (but not limited to) semi-colon, equals, space, plus, and many more, so use with caution.
	  			</p>
	  			<hr>
	  		</li>
	  		<li><h5> CSS Encode And Strictly Validate Before Inserting Untrusted Data into HTML Style Property Values:</h5>
	  			<p>
	  				CSS is surprisingly powerful, and can be used for numerous attacks. Therefore, it's important that we only use untrusted data in a property value and not into other places in style data. We should stay away from putting untrusted data into complex properties like url, behavior.
	  			</p>
	  			<hr>
	  		</li>
	  		<li><h5>Avoid JavaScript URLs:</h5>
	  			<p>
	  				Untrusted URLs that include the protocol javascript: will execute JavaScript code when used in URL DOM locations such as anchor tag HREF attributes or iFrame src locations. We should validate all untrusted URLs to ensure they only contain safe schemes such as HTTPS.<br>
	  				Data sent via the URL, which is strongly discouraged, should be URL encoded and decoded. This reduces the likelihood of cross-site scripting attacks from working. <br>In general, do not send data via GET request unless for navigational purposes.
	  			</p>
	  			<hr>
	  		</li>
	  	</ol>
	  </p>

	</div>

	<div class="w3-container">
	  <h3><b>HTML Filtering/Encoding</b></h3>
	  <hr>
	  	<p> 
	  		<b>Validate, escape and sanitize user input.</b>:
	  		<ol>
	  			<li>Encode HTML before inserting untrusted data into HTML element content.</li>
	  			<li> Make sure input data, as well as HTML, URLs and JavaScript, is benign and contains no unexpected characters or malicious values that might otherwise comprise an XSS attack. </li>
	  			<li> Encode the following characters with HTML entity encoding to prevent switching into any execution context, such as script, style, or event handlers.</li>
	  		</ol>
	  		 Using hex entities is recommended in the spec. The 5 characters significant in XML (&#x26;, &#x3C;, &#x3E;, &#x22;, &#x27;). 

	  		<br>
	  		<div style="background-color: grey; width: 25%; margin-left: auto; margin-right: auto; text-align: center;" >
	  			<p>
	  			<code>
		  			 &#x26; --&#x3E; &#x26;amp;<br>
					 &#x3C; --&#x3E; &#x26;lt;<br>
					 &#x3E; --&#x3E; &#x26;gt;<br>
					 &#x22; --&#x3E; &#x26;quot;<br>
					 &#x27; --&#x3E; &#x26;#x27;<br>
	  			</code>
	  		</div>
	  		<br>
	  	</p>
	  	<p>
	  		Here, we have done HTML encoding on user's data before saving it to database or displaying on the browser. Try Attacking here.
		  	<ul>
		  		<li>
		  			<a  href="prevent_persistent_attacks.php"> Try out persistent attack here </a>
		  		</li>
		  		<li> 
		  			<a  href="prevent_non_persistent_attacks.php"> Try out non persistent attack here </a>
		  		</li>
		  		<li> 
		  			<a  href="prevent_steal_cookies.php"> Try out stealing cookies here </a>
		  		</li>
		  	</ul>
	  	</p>
	</div>

	

	

	<!-- <div class="w3-container">
			
		  <h3><b>Project Updates</b></h3>
		  <hr>
		  <ol>
			<li><a href="https://docs.google.com/document/d/12wyFlyAv80M8y0cC64LQbpG3Pu-yjBdJBtgMCF8uPxI/edit#"> Find Project update1 here. </a></li>
			<li> We are planning to analyse existing ways of preventing and testing XSS attacks in update 2. </li>
		 </ol>
	</div>
 -->
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
