<!-- Exercise 2-5 pages 119 - 121 

	Author: Lani Hurley
	Date: 12/17/2021
	Filename: cc_contact.php

	HTML webpage with PHP for Coast City Computers,  using include() function to link files of header and footer to both home and contact webpages. *MUST have cc_home.php, cc_inc_header.php, cc_inc_footer.php, cc_contact.php, and cc_background.jpg for program to run correctly.

-->
<!DOCTYPE html>
<html style = "background-image: linear-gradient(#010E1F, 60%, white);">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>	
</head>
<body style = "margin: 0px;">
	<?php include("cc_inc_header.php");?>
	<h2 style ="color: white; font-size: 2em; padding: 10px;">Contact Us</h2>
	<br/>
	<p style = "padding-left: 10px; font-size: 1em; color: #010E1F;"><strong style = "font-size: 1.5em;">Coast City Computers &#128187</strong></p>
	<address  style = "padding-left: 10px;">3601 Hempstead Turnpike<br/>
			 Levitown, NY 11756<br/>
			 (516) 796-1000</address>
	<br/>
	<br/>
	<a href ="cc_home.php" style = "padding-left: 10px;">Back to Homepage</a>
	<br/>
	<?php include("cc_inc_footer.php");?>
</body>
</html>