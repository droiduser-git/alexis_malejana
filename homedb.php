<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "image_upload";

	$conn = mysqli_connect($servername,$username, $password,$dbname);

	$sql = "SELECT * FROM `image` WHERE `image_id` = 3;";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);

	if ($resultCheck > 0) {
		$row_image = $row['image_name'];
	}
?>

<img src="<?php echo $row_image; ?>"/>
</body>
</html>