<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Here's the latest design of my work.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <!--All Design-->
              <?php
                  require 'includes/connectdb.php';
                  $sql = "SELECT * FROM `logo`;";
                  $result = mysqli_query($conn,$sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                  if ($resultCheck > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                      ?> 
                      <div class="col-md-3 col-md-3 portfolio-item filter-active">
                          <div class="portfolio-wrap">
                            <img src="<?php echo $row['logo_image'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4><?php echo $row['logo_name'] ?></h4>
                              <div class="portfolio-links">
                                <a href="<?php echo $row['logo_image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['logo_name'] ?>"><i class="bx bx-plus"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  }
              ?>

              <?php
                  require 'includes/connectdb.php';
                  $sql = "SELECT * FROM `store`;";
                  $result = mysqli_query($conn,$sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                  if ($resultCheck > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                      ?> 
                      <div class="col-md-3 col-md-3 portfolio-item filter-active">
                          <div class="portfolio-wrap">
                            <img src="<?php echo $row['store_image'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4><a href="<?php echo $row['store_link'] ?>"><?php echo $row['store_name'] ?></a></h4>
                              <div class="portfolio-links">
                                <a href="<?php echo $row['store_image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['store_name'] ?>"><i class="bx bx-plus"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  }
            ?>

            <?php
                  require 'includes/connectdb.php';
                  $sql = "SELECT * FROM `mockup`;";
                  $result = mysqli_query($conn,$sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                  if ($resultCheck > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                      ?> 
                      <div class="col-md-3 col-md-3 portfolio-item filter-active">
                          <div class="portfolio-wrap">
                            <img src="<?php echo $row['mockup_image'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4><?php echo $row['mockup_name'] ?></h4>
                              <div class="portfolio-links">
                                <a href="<?php echo $row['mockup_image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['mockup_name'] ?>"><i class="bx bx-plus"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  }
            ?>
        </div>
        <div class="col-md-12 text-center">
            <a href="index.php" class="btn btn-primary">Go back to Homepage</a>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="index.php" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>