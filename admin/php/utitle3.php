<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
$header_uidesign=mysqli_real_escape_string($db,$_POST['header_uidesign']);
$query="UPDATE headers SET ";
$query.="header_uidesign='$header_uidesign' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?edituidesign=true&msg=updated");
}    

}
    

