<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
$projecttitle=mysqli_real_escape_string($db,$_POST['projecttitle']);
$query="UPDATE portfolio SET ";
$query.="projecttitle='$projecttitle' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editportfolio=true&msg=updated");
}    

}
    

