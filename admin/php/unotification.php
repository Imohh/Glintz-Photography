<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM notification WHERE id='$id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['pupdate'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}

$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);

if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE notification SET ";
$query.="projectpic='$projectpic',";
$query.="projectname='$projectname',";
$query.="projectlink='$projectlink' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editnotification=true#done");
}    

}    

}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM notification WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editnotification=true#done");
}
}

if(isset($_POST['addtonotification'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}

$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);

if($pdone=="error"){
    header("location:../?editnotification=true&msg=error");
}else{
$query="INSERT INTO notification (projectname,projectpic,projectlink) ";
$query.="VALUES ('$projectname','$projectpic','$projectlink')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editnotification=true&msg=updated");
}    

}    

}