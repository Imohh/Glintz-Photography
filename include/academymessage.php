<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$sex = $_POST['sex'];
$phototraining = $_POST['phototraining'];
$location = $_POST['location'];
$photocategory = $_POST['photocategory'];
$newsession = $_POST['newsession'];
$health = $_POST['health'];
$message = $_POST['message'];

$query="INSERT INTO contact (cname,cemail,cphoto_training,cmessage,cnumber,clocation,csex,cphoto_category,cnew_session,chealth) "; 
$query.="VALUES('$name','$email','$subject','$message')";
$run = mysqli_query($db,$query);
if($run){
    echo 'Your message has been sent. Thank you!';
}

header("Location: ../contact.php");
exit();
