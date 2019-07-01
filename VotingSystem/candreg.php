<?php
        $usn=$_POST['id'];
        $fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$sem=$_POST['sem'];
	$email=$_POST['email'];
        $dob=$_POST['dob'];
		 $pwd=$_POST['pwd'];
        
	mysql_connect("localhost","root","");
	mysql_select_db("vote");
	$rs=mysql_query("select * from candidate where usn='$usn'");
	if (mysql_num_rows($rs)>0)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Login Already Exists!!!");';
		echo 'window.location.href="CandidateLogin.html"'; 
		echo '</script>';
	}
	else
	{
	mysql_query("insert into candidate values('$usn','$fname','$lname',$sem,'$email','$dob','$pwd')") or die(mysql_error()); 
	echo '<script type="text/javascript">'; 
	echo 'alert("Registered Successfully!!!");'; 
	echo 'window.location.href="Login.html"';
	echo '</script>';
	}
	
?>

