<?php

   $id=$_GET["id"];
   $status=$_GET["status"];
   
   $db=mysqli_connect("localhost","root","");
   mysqli_select_db($db,"optimus_db");
   if($status=="Active")
   {
	   mysqli_query($db,"update user_detail set status='Block' where loginid='$id'");
	   mysqli_query($db,"update login_tb set status='Block' where loginid='$id'");	   
   }
   else
   {
	   mysqli_query($db,"update user_detail set status='Active' where loginid='$id'");
	   mysqli_query($db,"update login_tb set status='Active' where loginid='$id'");
   }
   mysqli_close($db);
   header("location: Admin_User.php");

?>