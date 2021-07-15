<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
// $headings=mysqli_real_escape_string($db,$_POST['ptitles']);
// $subheadings=mysqli_real_escape_string($db,$_POST['psubtitles']);
// $shortdescs=mysqli_real_escape_string($db,$_POST['shortdescs']);
// $longdescs=mysqli_real_escape_string($db,$_POST['longdescs']);
$campaignsfive=mysqli_real_escape_string($db,$_POST['campaignsfive']);
$campaignsfives=mysqli_real_escape_string($db,$_POST['campaignsfives']);
$query="UPDATE headers SET ";
// $query.="shortdescs='$shortdescs',";
$query.="campaignsfive='$campaignsfive',";
$query.="campaignsfives='$campaignsfives',";
// $query.="headings='$headings',";
// $query.="subheadings='$subheadings',";
$query.="longdescs='$longdescs' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editforthblog=true&msg=updated");
}    

}
    

