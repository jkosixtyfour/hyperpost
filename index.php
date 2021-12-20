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
    <title>Hyperpost</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        .main {
            margin-left: 40px;
        }
    </style>
</head>
<body>
        <?php include 'nav.php';?>
        <div class="alert alert-dismissible alert-primary">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">Discord!</h4>
  <p class="mb-0">Want updates on our development? Possibly even contribute? Then <a class="alert-link" href="https://discord.gg/rfPwdYaY5m">join our Discord server</a> today!</p>
</div>
    <div class="main"><h1 class="my-5"><b>@<?php echo htmlspecialchars($_SESSION["username"]); ?></b>'s Feed</h1>
    <p>
        <h3>Feed is under maintenance</h3>
    </p>
    </div>
</body>
</html>