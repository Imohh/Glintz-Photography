<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
// $headings=mysqli_real_escape_string($db,$_POST['ptitles']);
// $subheadings=mysqli_real_escape_string($db,$_POST['psubtitles']);
// $shortdescs=mysqli_real_escape_string($db,$_POST['shortdescs']);
// $longdescs=mysqli_real_escape_string($db,$_POST['longdescs']);
$campaignsfour=mysqli_real_escape_string($db,$_POST['campaignsfour']);
$campaignsfours=mysqli_real_escape_string($db,$_POST['campaignsfours']);
$query="UPDATE headers SET ";
// $query.="shortdescs='$shortdescs',";
$query.="campaignsfour='$campaignsfour',";
$query.="campaignsfours='$campaignsfours',";
// $query.="headings='$headings',";
// $query.="subheadings='$subheadings',";
$query.="longdescs='$longdescs' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editwork=true&msg=updated");
}    

}
    

