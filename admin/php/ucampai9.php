<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
// $headings=mysqli_real_escape_string($db,$_POST['ptitles']);
// $subheadings=mysqli_real_escape_string($db,$_POST['psubtitles']);
// $shortdescs=mysqli_real_escape_string($db,$_POST['shortdescs']);
// $longdescs=mysqli_real_escape_string($db,$_POST['longdescs']);
$campaignsnine=mysqli_real_escape_string($db,$_POST['campaignsnine']);
$campaignsnines=mysqli_real_escape_string($db,$_POST['campaignsnines']);
$query="UPDATE headers SET ";
// $query.="shortdescs='$shortdescs',";
$query.="campaignsnine='$campaignsnine',";
$query.="campaignsnines='$campaignsnines',";
// $query.="headings='$headings',";
// $query.="subheadings='$subheadings',";
$query.="longdescs='$longdescs' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcampaign=true&msg=updated");
}    

}
    

