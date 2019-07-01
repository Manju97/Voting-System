<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Online Voting System| View Student</title>
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
<center><b><font size=24>Results</font></b></center>
<div class="CSSTableGenerator" style="width:1300px;height:150px;">

 <center><font>     
          
          <?php
$conn = mysql_Connect('localhost','root','');
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('vote');
?>

<?php
print "<table><tr><td>name</td><td>vote count</td></tr>";

?>


<?php	
$meghana=mysql_query("select count(*) as total from votename where votename='meghana'");
$data=mysql_fetch_assoc($meghana);
?>
<tr><td>meghana</td><td><?php echo $data['total'] ?></td></tr>






<?php
$anand=mysql_query("select count(*) as total from votename where votename='anand'");
$data1=mysql_fetch_assoc($anand);

?>

<tr>
  <td>anand</td>
  <td><?php echo $data1['total'] ?></td></tr>

<?php
$manjunath=mysql_query("select count(*) as total from votename where votename='manjunath'");
$data1=mysql_fetch_assoc($manjunath);

?>

<tr>
  <td>manjunath</td>
  <td><?php echo $data1['total'] ?></td></tr>
  
  
  <?php
  print "</tr><td colspan=8><a href=StudentPage.html><img src=images/back.png height=75 width=75></a></p></td></tr>";
	print "</table>";
?>


</table>
<?php
mysql_close($conn);
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