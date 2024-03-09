<?php    
		$id=$_POST["id"];    
		$Password=$_POST["password"];    
		$username=$_POST["uname"];
		$DateofBirth=$_POST["bdy"];
		$PhoneNumber=$_POST["phone"];
		$Email=$_POST["email"];
		
		$db=mysqli_connect("localhost","root","");
		mysqli_select_db($db,"optimus_db");
		mysqli_query($db,"insert into login_tb values('$id','$Password','user','Active')");
		mysqli_query($db,"insert into user_detail values('$id','$username','$DateofBirth','$PhoneNumber','$Email','Active')");
		$a=mysqli_affected_rows($db);
		mysqli_close($db);
		
		if($a==0)
		header("location: Registration_Page.php?flag=0");
		else
		header("location: Registration_Page.php?flag=1");
?>


			