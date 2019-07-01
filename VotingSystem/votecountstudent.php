<?php
$votename=$_POST['radiobutton'];
$conn = mysql_Connect('localhost','root','');
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
$sql = '';
mysql_select_db('vote');
$retval = mysql_query( "insert into votename values ('$votename')", $conn );
if(! $retval ) {
die('Could not enter data: ' . mysql_error());
}
echo '<script type="text/javascript">';
echo 'alert("Thank you for voting");';
echo 'window.location.href="StudentLogin.html"';
echo '</script>';
mysql_close($conn);
?>