<?php
include('../../include/db.php');
if(isset($_POST['save'])){
$campaignstwo=mysqli_real_escape_string($db,$_POST['campaignstwo']);
$campaignstwos=mysqli_real_escape_string($db,$_POST['campaignstwos']);
$query="UPDATE headers SET ";
$query.="campaignstwo='$campaignstwo',";
$query.="campaignstwos='$campaignstwos',";
$query.="longdescs='$longdescs' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editportfolio=true&msg=updated");
}    

}
    

