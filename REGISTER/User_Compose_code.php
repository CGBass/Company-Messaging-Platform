<?php
session_start();

$id=$_SESSION["loginid"];
$uname=$_POST["uname"];
$date=$_POST["date"];
$msg=$_POST["msg"];

$sno=0;
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"optimus_db");
$result=mysqli_query($db,"select count(sno) from msg_detail");
while($row=mysqli_fetch_array($result))
{
  $sno=$row[0];
}
mysqli_close($db);
$sno++;
  
     $db=mysqli_connect("localhost","root","");
	 mysqli_select_db($db,"optimus_db");
	 mysqli_query($db,"insert into msg_detail values('$sno','$date','$id','$uname','$msg')");
	 $a=mysqli_affected_rows($db);
     mysqli_close($db);
	 if($a==0)
		header("location: User_Compose.php?flag=0");
	else
		header("location: User_Compose.php?flag=1");
?>
		