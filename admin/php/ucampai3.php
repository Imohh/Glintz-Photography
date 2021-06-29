<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
// $headings=mysqli_real_escape_string($db,$_POST['ptitles']);
// $subheadings=mysqli_real_escape_string($db,$_POST['psubtitles']);
// $shortdescs=mysqli_real_escape_string($db,$_POST['shortdescs']);
// $longdescs=mysqli_real_escape_string($db,$_POST['longdescs']);
$campaignsthree=mysqli_real_escape_string($db,$_POST['campaignsthree']);
$campaignsthrees=mysqli_real_escape_string($db,$_POST['campaignsthrees']);
$query="UPDATE headers SET ";
// $query.="shortdescs='$shortdescs',";
$query.="campaignsthree='$campaignsthree',";
$query.="campaignsthrees='$campaignsthrees',";
// $query.="headings='$headings',";
// $query.="subheadings='$subheadings',";
$query.="longdescs='$longdescs' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?edituidesign=true&msg=updated");
}    

}
    

