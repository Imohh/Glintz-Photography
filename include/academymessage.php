<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$sex = $_POST['sex'];
$phototraining = $_POST['phototraining'];
$locate = $_POST['locate'];
$photocategory = $_POST['photocategory'];
$newsession = $_POST['newsession'];
$health = $_POST['health'];
$message = $_POST['message'];

$query="INSERT INTO academy_form (cname,cemail,cmessage,cnumber,csex,cphoto_training,clocate,cphoto_category,cnew_session,chealth) "; 
$query.="VALUES('$name','$email','$message','$number','$sex','$phototraining','$locate','$photocategory','$newsession','$health')";
$run = mysqli_query($db,$query);
if($run){
    echo 'Your message has been sent. Thank you!';
}

header("Location: ../academy.php");
exit();
