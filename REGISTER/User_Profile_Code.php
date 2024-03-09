 <?php
 session_start();
		
		$id=$_SESSION["loginid"];
		$uname=$_POST["uname"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		
		$db=mysqli_connect("localhost","root","");
		mysqli_select_db($db,"optimus_db");
		mysqli_query($db,"update user_detail set username='$uname',Phonenumber='$phone',Email='$email' where id='$id'");
		$a=mysqli_affected_rows($db);
		mysqli_close($db);
		
		if($a==0)
		header("location: User_Profile.php?flag=0");
		else
		header("location: User_Profile.php?flag=1");
 ?>