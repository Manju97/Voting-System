<?php
		$pwd = $id = "";
		
		mysql_connect("localhost","root","");
		mysql_select_db ("vote");
		if(isset($_POST['id']))
		{
		$id = $_POST['id'];
		$pwd =$_POST['pwd'];
		$sql = "SELECT * FROM student WHERE usn='".$id."' AND pwd='".$pwd."'LIMIT 1";
		
		$res=mysql_query($sql);
		if(mysql_num_rows($res) == 1)
		{
			setcookie("id",$_POST['id'],time()+60*60*24*365);
			echo '<script type="text/javascript">'; 
			echo 'alert("Log-In Successfully!!!");'; 
			echo 'window.location.href="StudentPage.html"';
			echo '</script>';
			
			
						exit();
		} 
		else 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Log-In failed. Enter Correct Username & Password.!!!");'; 
			echo 'window.location.href="StudentLogin.html"';
			echo '</script>';
		}
		}
?>
