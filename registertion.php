<?php
include "index.php";
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['mail'];
$phone=$_POST['number'];
$service=$_POST['services'];
$details=$_POST['details'];

$sql = "INSERT INTO user_data(sno, name, email_address, mobile_number, service, request_details) VALUES ('$name', '$email', '$phone', '$service', '$details')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: ";
}
mysqli_close($conn);
}
?>