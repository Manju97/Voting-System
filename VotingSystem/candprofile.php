<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Online Voting System| Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src='js/jquery-1.8.1.min.js' type='text/javascript'></script>
<script src='js/jquery.kwicks.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() {
	$('.kwicks').kwicks({
		maxSize : 250,
		spacing : 5,
		behavior: 'menu'
		});
	});
</script>
<link rel="stylesheet" href="css/table.css" type="text/css"/>
</head>
<body class="bg">
<div class="header-bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
		  		<a href="index.html"><img src="images/logo1.jpg"> </a>
		 </div>
		<div class="menu">
			<ul class='kwicks kwicks-horizontal'>
				<li><a href="index.html">Logout and Go to Homepage</a></li>
			</ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>

<center>

 <center><font>
<div class="CSSTableGenerator" style="width:1300px;height:150px;">
     
<?php
	$id=$_COOKIE['id'];
	mysql_connect("localhost","root","");
	mysql_select_db("vote");
	$rid=mysql_query("select * from candidate where usn=$id") or die(mysql_error());
	
	
	While($row=mysql_fetch_row($rid))
	{
		print "<table>";
		print "<tr><td colspan=2>My Profile Details</center></td></tr>";
		print "<tr><td>USN</td><td>$row[0]</td></tr>";
		print "<tr><td>First Name</td><td>$row[1]</td></tr>";
		print "<tr><td>Last Name</td><td>$row[2]</td></tr>";
		print "<tr><td>Semester</td><td>$row[3]</td></tr>";
		print "<tr><td>E-Mail Address</td><td>$row[4]</td></tr>";
		print "<tr><td>Date Of Birth</td><td>$row[5]</td></tr>";
		print "<tr><td>Password</td><td>$row[6]</td></tr>";
		print "<tr><td colspan=2><a href=CandidatePage.html><img src=images/back.png height=75 width=75></a></p></td></tr>";
                print "</table>";
	}
	
?>
</font></center>



</div>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer-bg">
<div class="wrap">
<div class="footer">
		<div class="f_grid">
		<div class="social">
				<ul class="follow_icon">
					<li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/pinterest.png" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="f_grid1">
		<br>
			<div class="copy">
				<p class="w3-link">� All Rights Reserved </p>
	
			</div>
			<div class="clear"></div>
		</div>
		<div class="f_logo">
			<a href=""><img src="images/logo2.png" alt=""></a>
 		</div>
		<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>