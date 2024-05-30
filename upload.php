<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "image_upload";

	$conn = mysqli_connect($servername,$username, $password,$dbname);

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $target_dir = "image/";
	  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    $sql = "INSERT INTO `image`(`image_name`) VALUES ('$target_file')";
	    $result = mysqli_query($conn,$sql);
	    header("Location: index.php");
	    exit();
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	  
	}

?>