<?php

$target_dir = dirname(__FILE__) . "/uploads/";
$target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// check if file is an image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
	echo "File is an image - " . $check["mime"] . ".<br />";
	$uploadOk = 1;
} else {
	echo "File is not an image.<br />";
	$uploadOk = 0;
}

// check file size
if($_FILES["fileToUpload"]["size"] > 1000000) {
	echo "your image is too large ...<br />";
	$uploadOk = 0;
} else {
	echo "image size reasonable ^_^<br />";
	$uploadOk = 1;
}

if($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.<br />";
} else {
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.<br />";
		// execute the check_equal.py Python script
		if($_POST['which'] == "dilation") {
			$myFileName = "assets/img/Dilation.bmp";
		} else if($_POST['which'] == "erosion") {
			$myFileName = "assets/img/Erosion.bmp";
		} else if($_POST['which'] == "opening") {
			$myFileName = "assets/img/Opening.bmp";
		} else {
			$myFileName = "assets/img/Closing.bmp";
		}
		exec("./check_equal.py " . $myFileName . " " . $target_file, $output, $return_val);
		echo "output: ".$output[0]."<br />";
		echo "return value: " . $return_val . "<br />";
	} else {
		echo "Sorry, there was an error uploading your file.<br />";
	}
}

echo "<a href='' id='goBackLink'>Go Back</a><br />";
echo "<script> document.getElementById('goBackLink').setAttribute('href', 'http://' + window.location.host + '/cvHW5/'); </script>";
echo "<script>alert('" . $output[0] . "');</script>";

?>
