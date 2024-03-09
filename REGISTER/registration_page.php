

<head>
  
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
      <a class="navbar-brand" href="#">OPTIMUS INFOTECH</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">HOME</a></li>  
        <li><a href="#">CONTACT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Registration_Page.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
        <li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<h2><b>REGISTRATION PAGE</b></h2>
 <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
  <form action="Registration_code.php" method="post">
    <div class="form-group">
      <label for="login">Login ID</label>
      <input type="text" class="form-control"  placeholder="Enter Login ID" name="id">
    </div>
	<div class="form-group">
      <label for="login">Password</label>
      <input type="password" class="form-control"  placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label for="login">User Name</label>
      <input type="text" class="form-control"  placeholder="Enter User Name" name="uname">
    </div>
	<div class="form-group">
      <label for="login">Date of Birth</label>
      <input type="text" class="form-control"  placeholder="Enter Date of Birth" name="bdy">
    </div>
	<div class="form-group">
      <label for="login">Phone No</label>
      <input type="text" class="form-control"  placeholder="Enter Phone No" name="phone">
    </div>
	<div class="form-group">
      <label for="login">Email</label>
      <input type="text" class="form-control"  placeholder="Enter Email" name="email">
    </div>
	
        <input type="submit" class="btn btn-success" name="submit" value="REGISTER">
  </form>
  <?php
  if(isset($_GET["flag"]))
  {
	$flag=$_GET["flag"];
	if($flag==0)
	echo "Registration Failed!!! Try Again";
	else
	echo "Registration Successfull..";
  }
  ?>
</div>

  
 </div>
 <br><br> 
</div>
