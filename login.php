<!DOCTYPE html>
<html>
    <head>
        <title>PROFILE</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header id="hr">
            <a href="/"><img src="OIP.jpg" alt="emblem logo" class="corner-logo"> </a>
            <div>
            <h1 id="h1">E-GOVERNANCE</h1>
            <p id="p1"><b>Government of India</b></p>
        </div>
        </header>
        <nav>
          <ul>
            <li><a href="index.html" target="_self" >HOME</a></li>
            <li><a href="services.html">SERVICES & SCHEMES</a></li>
            <li><a href="apply.html">ONLINE APPLICATIONS </a></li>
            <li><a href="online.html">ONLINE SERVICES</a></li>
            <li><a href="notice.html">NOTICES&CIRCULARS</a></li>
            <li><a href="login.php" target="_self">LOGIN/REGISTER<img src="icon.jpg" class="icon"></a></li>
            </ul>
        </nav>
        <div>
            <h2 style="text-align:center; font-size:40px; margin-top:30px;">USER LOGIN</h2>
            <div class="login-form">
                <form action="login.php" method="post" class="form-login">
                    <div class="label-login">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    </div>
                    <div  class="label-login">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" value="submit" class="btn-login">Login</button>
                </form>
                <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
            </div>
        </div>
    </body>
</html>
<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
session_start();
include"test.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    echo"Email:$username<br>";
    $sql="SELECT * FROM user_details WHERE name='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$username;
        header("Location: profile.php");
        exit();
    }
    else{
        echo"invalid username or password";
    }
}
?>