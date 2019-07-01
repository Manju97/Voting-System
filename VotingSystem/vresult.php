<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BlueToolKit | Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 50px;
	font-weight: bold;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
body {
	background-image: url(images/pix2.jpg);
}
.style3 {font-size: 18px}
-->
</style></head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <p class="style1">ONLINE MCA FORUM ELECTION </p>
        <p class="style2">ADMIN LOGIN </p>
        <h1>&nbsp;</h1>
      </div>
      <div class="menu_nav">
        
        <ul>
          <li><a href="createele.html" target="_self"><strong>create election</strong></a></li>
          <li><a href="candreg.html" target="_self"><strong>candidate registration</strong></a></li>
          <li><a href="vote.html" target="_self"><strong>vote</strong></a></li>
          <li><a href="results.php" target="_self"><strong>view results</strong></a></li>
          <li><a href="adminlog.html" target="_self"><strong>logout</strong></a></li>
          <li></li>
          <li class="active"></li>
        </ul>
      </div>
      <div class="clr"></div>
      <img src="images/10.jpg" width="970" height="239" alt="" />
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <p>&nbsp;</p>
      <div class="mainbar">
        <div class="article">
          <h2>&nbsp;</h2>
        </div>
        <div class="article">
          <h2>Results </h2>
          <p><strong><span class="style3">secretary</span></strong></p>
          <?php
$conn = mysql_Connect('localhost','root','');
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('election');
$meghana=mysql_query("select count(*) as total from votelist where votename='meghana'");
$data=mysql_fetch_assoc($meghana);

?>
<table border=3>
<tr><th>Name</th><th>Vote Count</th></tr>
<tr><td>meghana</td><td><?php echo $data['total'] ?></td></tr>



<?php
$anand=mysql_query("select count(*) as total from votelist where votename='anand'");
$data1=mysql_fetch_assoc($anand);

?>

<tr>
  <td>anand</td>
  <td><?php echo $data1['total'] ?></td></tr>



</table>
<?php
mysql_close($conn);
?>


        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">&nbsp;</h2>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>&nbsp;</h2>
      </div>
      <div class="col c2">
        <h2>&nbsp;</h2>
      </div>
      <div class="col c3">
        <h2>&nbsp;</h2>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&nbsp;</p>
      <ul class="fmenu">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li class="active"></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div align=center></div>
</body>
</html>
