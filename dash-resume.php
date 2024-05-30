<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Alexis Malejana</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="nav-item"><a class="nav-link" href="dash-home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="dash-about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="dash-resume.php">Resume</a></li>
        <li class="nav-item"><a class="nav-link" href="dash-portfolio.php">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="dash-contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
	<h4>Resume</h4>
	<div class="row">
		<div class="col-md-4">
			<form action="dash-homedb.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="image_upload">Upload Image:</label>
			  		<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
				</div>
			  	<div class="form-group">
			  		<label for="name">Name:</label>
			  		<input type="text" name="name" id="name" placeholder="Name" class="form-control">
			  	</div>
			  	<div class="form-group">
			  		<label for="name">Work:</label>
			  		<input type="text" name="sub" id="name" placeholder="Subtitle" class="form-control">
			  	</div>
			  	<div class="form-group">
			  		<label for="name">Facebook:</label>
			  		<input type="text" name="facebook" id="name" placeholder="Facebook" class="form-control">
			  	</div>
			  	<div class="form-group">
			  		<label for="name">Skype:</label>
			  		<input type="text" name="skype" id="name" placeholder="Skype Id" class="form-control">
			  	</div>
			  	<div class="form-group">
			  		<label for="linkedin">LinkedIn:</label>
			  		<input type="text" name="linkedin" id="name" placeholder="Name" class="form-control">
			  	</div>
			  	<div class="form-group py-3">
				  	<button type="submit" name="submit" class="btn btn-primary ">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php

	require 'config/connectdb.php';

	$sql = "SELECT * FROM `home`";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);

	if ($resultCheck > 0) {
		$row_image = $row['home_image'];
	}

?>

<img src="<?php echo $row_image; ?>"/>

</body>
</html>