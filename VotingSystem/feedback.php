<?php
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $subject=$_POST['subject'];
	mysql_connect("localhost","root","");
	mysql_select_db("resume");
	mysql_query("insert into feedback values('$name','$email','$mobile','$subject')") or die(mysql_error()); 
	echo '<script type="text/javascript">'; 
	echo 'alert("FeedBack Sent Successfully!!!");'; 
	echo 'window.location.href="Feedback.html"';
	echo '</script>';
?>

