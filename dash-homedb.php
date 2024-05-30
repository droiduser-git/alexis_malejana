<?php

  if(isset($_POST["submit"])) {
    require 'includes/connectdb.php';
    $target_dir = "image/logo/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $name = $_POST['name'];
    $sub = $_POST['sub'];
    $facebook = $_POST['facebook'];
    $skype = $_POST['skype'];
    $linkedin = $_POST['linkedin'];

    if (empty($target_file) || empty($name) || empty($sub) || empty($facebook) || empty($skype) || empty($linkedin)) {
      header("Location: dash-home.php?error=some_field_is_empty");
      exit();
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO `home`(`home_image`, `home_name`, `home_sub`, `home_fb`, `home_skype`, `home_linked`) VALUES ('$target_file','$name','$sub','$facebook','$skype','$linkedin');";
        $result = mysqli_query($conn,$sql);
        header("Location: dash-home.php?success=upload_success");
        exit();
      } else {
        header("Location: dash-home.php?error=upload_failed");
        exit();
      }
    }

    
  }