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
    <title>Hyperpost - Dashboard</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        .dashmain {
            margin-left: 40px;
        }
    </style>
</head>
<body>
        <?php include 'nav.php';?>
    <div class="dashmain"><h1 class="my-5">Hi <b>@<?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-dark">Change Password</a>
        <br>
        <br>
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
        <br>
        <h3>User settings are in the works, stay tuned.</h3>
    </p>
    </div>
</body>
</html>