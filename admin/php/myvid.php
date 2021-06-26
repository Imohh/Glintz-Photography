<?php
$target = "../../assets/img/";
$target = $target . basement($_FILES['uploaded']['name']);
$Ok = 1;

if ($uploaded_size > 350000) {
	echo "your file size is too large.<br>";
	$ok = 0;
}

if ($uploaded_type == "text/php") {
	echo "No PHP files<br>";
	$ok = 0;
}

if ($ok = 0) {
	echo "Sorry your file was not uploaded";
} else {
	if (move_uploaded_file($_FILES['uploaded']['tmp_name'],$target)) {
		echo "the file has been uploaded";
	}else {
		echo "sorry, there was a problem uploading your file";
	}
}




