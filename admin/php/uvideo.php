<?php
include('../../include/db.php');
include('checkupload2.php');
$id=$_POST['id'];
$query="SELECT * FROM video WHERE id='$id'";

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
$query="UPDATE video SET ";
$query.="projectpic='$projectpic',";
$query.="projectname='$projectname',";
$query.="projectlink='$projectlink' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editvideo=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM video WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editvideo=true#done");
}
}


if(isset($_POST['addtovideo'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}
    
    
$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
  
 
if($pdone=="error"){
    header("location:../?editvideo=true&msg=error");
}else{
$query="INSERT INTO video (projectname,projectpic,projectlink) ";
$query.="VALUES ('$projectname','$projectpic','$projectlink')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editvideo=true&msg=updated");
}    

}    
    
}