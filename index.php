<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Login Page</title>
    </head>

    <body>
        <h2>Login Form</h2>
        <form action="connect.php" method="post">
            <label for="Email">Email</label>
            <input type="email" name="email" id="Email" placeholder="Enter your email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="login" value="Login">
        </form>
        <hr>
        <h2>Signup Form</h2>
        <form action="connect.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="Email">Email</label>
            <input type="email" name="email" id="Email" placeholder="Enter your email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="signup" value="Sign up">
        </form>
    </body>

</html>