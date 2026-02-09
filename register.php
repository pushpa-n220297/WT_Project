<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>REGISTERATION FORM</title>
    </head>
    <body>
        <div class="login-form">
        <form action="register.php" method="post">
            <div class="label-login">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            </div>
            <div class="label-login">
            <label for="email" >Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            </div>
            <div class="label-login">
            <label for="password" >Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            </div>
            <div>
            <button type="submit" name='login' value='login'>Register</button>
            </div>
        </form>
        </div>
    </body>

</html>

<?php
include "test.php";
if(isset($_POST['login'])){
      $name=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql="insert into user_details(name,email,password) 
      values('$name','$email','$password')";

if (mysqli_query($conn,$sql)){
    echo"<h2>registered successfully</h2>";
}
else{
    echo"error".
    mysqli_error($conn);
}
}
?>