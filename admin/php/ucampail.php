<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
// $headings=mysqli_real_escape_string($db,$_POST['ptitles']);
// $subheadings=mysqli_real_escape_string($db,$_POST['psubtitles']);
$shortdescs=mysqli_real_escape_string($db,$_POST['shortdescs']);
// $longdescs=mysqli_real_escape_string($db,$_POST['longdescs']);
$scrapbook_head=mysqli_real_escape_string($db,$_POST['scrapbook_head']);
$query="UPDATE headers SET ";
$query.="shortdescs='$shortdescs',";
$query.="scrapbook_head='$scrapbook_head',";
// $query.="headings='$headings',";
// $query.="subheadings='$subheadings',";
$query.="longdescs='$longdescs' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editnotification=true&msg=updated");
}    

}
    

