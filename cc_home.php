<!-- Exercise 2-5 pages 119 - 121 

	Author: Lani Hurley
	Date: 12/17/2021
	Filename: cc_home.php

	HTML webpage with PHP for Coast City Computers,  using include() function to link files of header and footer to both home and contact webpages. ***MUST have cc_home.php, cc_inc_header.php, cc_inc_footer.php, cc_contact.php, and cc_background.jpg for program to run correctly.

-->
<!DOCTYPE html>
<html style = "background-image: linear-gradient(#010E1F, 60%, white);">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coast City Computers</title>
</head>
<body style = "margin: 0px;">
		<?php include("cc_inc_header.php");?>
		<div>
			<h2 style = "font-family: 'Brush Script MT'; color: #d90429; font-size: 3.5em; text-align: center; text-shadow: 1px 1px 1px white; margin-bottom: 30px;">&#9734  &#9733  Memorial Day Sale  &#9733  &#9734</h2>
				<div style = "text-align: center;">
					<ul style = "padding: 0px; text-align: center;">
						<ul style="padding: 0px;"><em style = "font-size: 2em;">&#9758 </em><mark> Compaq Presario m2007us Notebook: <strong>$799.99</strong></mark></ul>
						<ul style="padding: 0px;"><em style = "font-size: 2em;">&#9758 </em><mark> Epson Styles CX6600 Color Printer: <strong>$699.99</strong></mark></ul>
						<ul style="padding: 0px;"><em style = "font-size: 2em;">&#9758 </em><mark> Proview Technology 17-inch Monitor: <strong>$199.99</strong></mark></ul>
						<ul style="padding: 0px;"><em style = "font-size: 2em;">&#9758 </em><mark> Hawking Technology Wireless Card: <strong>$9.99</strong></mark></ul>
					</ul>
				</div>
		</div>
	<br/>
	<br/>
	<a href ="cc_contact.php" style = "padding-left: 10px;">Click to contact us!</a>
	<?php include("cc_inc_footer.php");?>
</body>
</html>