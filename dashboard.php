<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard - <?php echo $_SESSION["user"]["name"] ?></title>
    </head>

    <body>
        <h1>Welcome, <?php echo $_SESSION["user"]["name"]; ?>,</h1>
        <p>
            Your email is <?php echo $_SESSION["user"]["email"] ?>
        </p>
        <a href="logout.php">Logout</a>
    </body>

</html>