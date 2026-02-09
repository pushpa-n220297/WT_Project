<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2{
            color: #333;
        }
        p{
            font-size: 18px;
            color: #666;
        }
        a{
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Welcome to e governance website</h2>
    <p>login successful</p>
    <a href="#">Logout</a>
</body>
</html>