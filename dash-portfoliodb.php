<?php

  if(isset($_POST["submit"])) {
    require 'includes/connectdb.php';

    $design = $_POST['design'];
    $logo = $_POST['logo'];
    $store = $_POST['store'];
    $mockup = $_POST['mockup'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  
            
          if (empty($target_file) || empty($design) || empty($name) || empty($link)) {
            header("Location: dash-portfolio.php?error=some_field_is_empty");
            exit();
          } else {
            switch ($design) {
              case 'logo':
                $target_dir = "image/logo/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                  $sql = "INSERT INTO `logo`(`logo_image`, `logo_name`, `logo_link`) VALUES ('$target_file',' $name','$link');";
                  $result = mysqli_query($conn,$sql);
                  header("Location: dash-portfolio.php?success=upload_success");
                  exit();
                } else {
                  header("Location: dash-portfolio.php?error=upload_failed");
                  exit();
                }
                break;

              case 'store':
                $target_dir = "image/store/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                  $sql = "INSERT INTO `store`(`store_image`, `store_name`, `store_link`) VALUES ('$target_file',' $name','$link');";
                  $result = mysqli_query($conn,$sql);
                  header("Location: dash-portfolio.php?success=upload_success");
                  exit();
                } else {
                  header("Location: dash-portfolio.php?error=upload_failed");
                  exit();
                }
                break;
              case 'mockup':
                $target_dir = "image/mockup/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                  $sql = "INSERT INTO `mockup`(`mockup_image`, `mockup_name`, `mockup_link`) VALUES ('$target_file',' $name','$link');";
                  $result = mysqli_query($conn,$sql);
                  header("Location: dash-portfolio.php?success=upload_success");
                  exit();
                } else {
                  header("Location: dash-portfolio.php?error=upload_failed");
                  exit();
                }
                break;
            }
            
          }
    
  }