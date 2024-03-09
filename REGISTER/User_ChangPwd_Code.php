<?php
 session_start();
		
		$id=$_SESSION["loginid"];
		$opwd=$_POST["opwd"];
		$npwd=$_POST["npwd"];
		$cpwd=$_POST["cpwd"];
		
		$dbpwd="";
		$db=mysqli_connect("localhost","root","");
		mysqli_select_db($db,"optimus_db");
		$result=mysqli_query($db,"select password from login_tb where loginid='$id'");
		while($row=mysqli_fetch_array($result))
		{
			$dbpwd=$row[0];
		}
		
		
		mysqli_close($db);
		
		if($dbpwd==$opwd)
		{
			if($npwd==$cpwd)
			{
			$db=mysqli_connect("localhost","root","");
			mysqli_select_db($db,"optimus_db");
			mysqli_query($db,"update login_tb set password='$npwd' where loginid='$id'");
			$a=mysqli_affected_rows($db);
			mysqli_close($db);
			
			
			if($a==0)
			header("location: User_ChangPwd.php?flag=0");
			else
			header("location: User_ChangPwd.php?flag=1"); 
			}
			else
			{
				header("location: User_ChangPwd.php?flag=3");
			}
		}
		else
		{
			header("location: User_ChangPwd.php?flag=2");
		}
?>	