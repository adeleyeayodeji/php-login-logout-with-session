# More details

Developing a simple authentication in PHP using procedure method along with user session and data sharing within pages.

Watch till end to understand the basic of PHP Authentication System

#PHP_LOGIN_SYSTEM
#PHP_AUTH

# Youtube URL

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/e3L8NFUMHEE/0.jpg)](https://www.youtube.com/watch?v=e3L8NFUMHEE)

# php-login-logout-with-session

```php
    <?php
// enable session
session_start();

$connection = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_login"
);

// if($connection){
//     echo "Connection is good";
// }else{
//     echo "Wrong connection";
// }

if(isset($_POST["signup"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_encrypt = md5($password);
    //Make query
    $query = mysqli_query($connection, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_encrypt')");
    if($query){
        echo "User successfully register";
    }else{
        echo "Error making registration";
    }
}

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_encrypt = md5($password);
    //Make login possible
    $query = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email' AND password = '$password_encrypt'");
    if($user = mysqli_fetch_assoc($query)){
        $_SESSION["user"] = $user;
        header("location: dashboard.php");
    }else{
        echo "User not found";
    }

}
?>
```
