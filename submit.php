<?php
include "test.php";
$name=$_POST['name'];
$email=$_POST['mail'];
$mobile=$_POST['no'];
$service=$_POST['services'];
$details=$_POST['details'];
$sql="insert into service_req_info(name,email,mobile,service,details) 
      values('$name','$email','$mobile','$service','$details')";
if (mysqli_query($conn,$sql)){
    echo"form submitted succesfully";
}
else{
    echo"error".
mysqli_error($conn);
}
?>