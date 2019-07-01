<?php
        $usn=$_POST['id'];
        $fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$sem=$_POST['sem'];
	$email=$_POST['email'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $pwd=$_POST['pwd'];
        $add=$_POST['add'];
	mysql_connect("localhost","root","");
	mysql_select_db("vote");
	$rs=mysql_query("select * from student where usn='$usn'");
	if (mysql_num_rows($rs)>0)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Login Already Exists!!!");';
		echo 'window.location.href="StudentLogin.html"'; 
		echo '</script>';
	}
	else
	{
	mysql_query("insert into student values('$usn','$fname','$lname',$sem,'$email','$phone','$dob','$pwd','$add')") or die(mysql_error()); 
	echo '<script type="text/javascript">'; 
	echo 'alert("Registered Successfully!!!");'; 
	echo 'window.location.href="StudentLogin.html"';
	echo '</script>';
	}
	
?>

