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
	<h4>Portfolio</h4>
	<div class="row">
		<div class="col-md-4">
			<form action="dash-portfoliodb.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="image_upload">Upload Image:</label>
			  		<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
				</div>
			  	<div class="form-group">
			  		<label for="name">Design Name:</label>
			  		<input type="text" name="name" id="name" placeholder="Name" class="form-control">
			  	</div>
          <div class="form-group">
            <label for="name">Design:</label>
            <select name="design" id="design" class="form-control">
              <option value="">Please design type...</option>
              <option value="logo">Logo</option>
              <option value="store">Store</option>
              <option value="mockup">mockup</option>
            </select>
          </div>
			  	<div class="form-group">
			  		<label for="name">Link:</label>
			  		<input type="text" name="link" id="name" placeholder="Subtitle" class="form-control">
			  	</div>
			  	<div class="form-group py-3">
				  	<button type="submit" name="submit" class="btn btn-primary ">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>