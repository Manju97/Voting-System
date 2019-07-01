<?php
		$uname ="admin";
		$pass ="admin"; 
		$name=$_POST['Username'];
		$pwd=$_POST['Password'];
		
		if($name==$uname && $pwd==$pass)
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Log-In Successfully!!!");'; 
			echo 'window.location.href="AdminPage.html"';
			echo '</script>';
			
			
						exit();
		} 
		else 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Log-In failed. Enter Correct Username & Password.!!!");'; 
			echo 'window.location.href="AdminLogin.html"';
			echo '</script>';
			
		}
		
?>