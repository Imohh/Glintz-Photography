<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM campaigns_four WHERE id='$id'";

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
    header("location:../?editcampaign4=true&msg=error");
}else{
$query="UPDATE campaigns_four SET ";
$query.="projectpic='$projectpic',";
$query.="projectname='$projectname',";
$query.="projectlink='$projectlink' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcampaign4=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM campaigns_four WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcampaign4=true#done");
}
}


if(isset($_POST['addtocampaign4'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}
    
    
$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
  
 
if($pdone=="error"){
    header("location:../?editcampaign4=true&msg=error");
}else{
$query="INSERT INTO campaigns_four (projectname,projectpic,projectlink) ";
$query.="VALUES ('$projectname','$projectpic','$projectlink')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcampaign4=true&msg=updated");
}    

}    
    
}