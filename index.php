<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Xpertsfacility.com</title>

    <!-- Css file -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  </head>
  <body>
    <div class="main">

      <?php require ("./include/header.php")?> 
     <!-- <h4 class="text-center mt-3">We are Working With Them </h4> -->
      <div class="partner">

          <div class="partner__logos">
            <img src="./assets/images/logo/partners/logo-3.png" alt="" />
          </div>

          <div class="partner__logos">
            <img  src="./assets/images/logo/partners/logo-2.png" alt="" />
          </div>

          <div class="partner__logos">
            <img src="./assets/images/logo/partners/logo.png" alt="" />
          </div>

          <div class="partner__logos">
            <img src="./assets/images/logo/partners/logo-1.png" alt="" />
          </div>

          <div class="partner__logos">
            <img src="./assets/images/logo/partners/youtube-logo.png" alt="" /> 
          </div>

          <div class="partner__logos">
            <img src="./assets/images/logo/partners/hdlogo-sports.png" alt="" />
          </div>

          <div class="partner__logos">
            <img src="./assets/images/logo/partners/fiverr-logo.png" alt=""/>
          </div>
          
          <div class="partner__logos">
            <img src="./assets/images/logo/partners/upwor.png" alt="" />
          </div>

      </div>
      <div class="main-content">
       <!--  this is main content --> 
       <div class="m-5"></div>
          <div class="services-section">
            <?php require ("./include/home-page-sections/service-section.php") ?>
          </div>
          <div class="about-us-section">
          <!-- this is about us section -->  
          </div>
          <div class="container">
            <?php require ("./include/home-page-sections/fqa-section.php") ?>
          </div>
          <div class="container">
            <?php require("./include/home-page-sections/review-section.php") ?>
          </div>      
          <div class="contact-section">
            <?php require ("./include/home-page-sections/contact-us-section.php")?>
          </div>
        </div>
      </div>

      <?php require ("./include/footer.php")?>
    </div>



    <!-- Scripts -->
    <?php require ("./include/scripts.php")?>
  </body>
</html>
