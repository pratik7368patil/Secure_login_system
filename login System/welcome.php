<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="css/index.css" >
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top drop-shadow" id="custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" id="brand"><b>Pro Test</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li><a href="reset-password.php" class="#">Reset Your Password</a></li>
                    <li><a href="logout.php" class="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
  
                      </ul>
                      </div>
                </div>
        </nav>

  <div class="container">
    <div class="page-header" style="text-align: left;">
        <h2><span class="glyphicon glyphicon-user"></span> Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to portal.</h2>
    </div>
  </div>
<div class="container">
  <a href="#" class="btn btn-default">+ ADD</a>
</div>
</body>
</html>
