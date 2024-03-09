 <?php
 session_start();
	$id=$_SESSION["loginid"];
 ?>
<head>
  <title>Collapsible Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
  <script src="jquery/jquery-3.3.1.js"></script>
  <script src="bootstrap3/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Optimus Infotech</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="User_Profile.php">Profile</a></li>  
        <li class="active"><a href="User_ChangPwd.php">ChangePwd</a></li>
		<li><a href="User_Inbox.php">Inbox</a></li>
		<li><a href="User_Compose.php">Compose</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<hr>
<span style="color:green;font-size:18px">welcome <?php echo $id;?></span>
<hr>
<div class="container">
<h2>Chang Password Page</h2>
<hr>
 <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
  <form action="User_ChangPwd_Code.php" method="post">    
	<div class="form-group">
      <label for="login">Old Password</label>
      <input type="Password" class="form-control"  name="opwd">
    </div>
	<div class="form-group">
      <label for="login">New Password</label>
      <input type="Password" class="form-control"  name="npwd">
    </div>
	<div class="form-group">
      <label for="login">Confirm Password</label>
      <input type="Password" class="form-control"  name="cpwd">
    </div>
        <input type="submit" class="btn btn-success" name="submit" value="Change Password">
  </form>
  <?php
  if(isset($_GET["flag"]))
  {
	$flag=$_GET["flag"];
	if($flag==0)
	echo "Password Updatation Failed! Try Again";
	else if($flag==1)
	echo "Password Updated Successfully..";
	else if($flag==2)
	echo "Old Password Not Matched..";
	else if($flag==3)
	echo "Both Password Not Matched..";
  }
  ?>
</div>

  
 </div>
 <br><br> 
</div>
