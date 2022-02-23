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

    <style>
        body { 
            background-image: url('./assets/images/backound/background-dots.svg');
        }
    </style>

  </head>
  <body>
    <div class="main">
      <?php require ("./include/header.php")?>

      <div class="main-content">
        <div class="container">
          <div class="services-section-cards">
              <div class="row text-center">
                  <div class=" col-md-4 col-lg-3 col-sm-6">
                      <div id="service-card" class="card mt-4">
                          <div class="card-body">
                              <div class="services-card-title">
                                  <p>Motivation videos</p>
                              </div>
                              <div >
                                  <img src="./assets/images/services/motivation.png" class="services-card-img" alt="">
                              </div>
                              <div>
                                  <a href="/motivation-videos-pkgs.php"><button class="btn btn-primary service-card-button">Show All Packages </button></a> 
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class=" col-md-4 col-lg-3 col-sm-6">
                      <div id="service-card" class="card mt-4">
                          <div class="card-body">
                              <div class="services-card-title">
                                  <p>Meditation Videos</p>
                              </div>
                              <div >
                                  <img src="./assets/images/services/meditation.png" class="services-card-img" alt="">
                              </div>
                              <div>
                                  <a href="/meditation-videos-pkgs.php"><button class="btn btn-primary service-card-button">Show All Packages </button></a> 
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class=" col-md-4 col-lg-3 col-sm-6">
                      <div id="service-card" class="card mt-4">
                          <div class="card-body">
                              <div class="services-card-title">
                                  <p>Luxury Videos</p>
                              </div>
                              <div >
                                  <img src="./assets/images/services/luxury.png" class="services-card-img" alt="">
                              </div>
                              <div>
                                  <a href="/luxry-videos-pkgs.php"><button class="btn btn-primary service-card-button">Show All Packages </button></a> 
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class=" col-md-4 col-lg-3 col-sm-6">
                      <div id="service-card" class="card mt-4">
                          <div class="card-body">
                              <div class="services-card-title">
                                  <p>Cooking Videos</p>
                              </div>
                              <div >
                                  <img src="./assets/images/services/cooking.png" class="services-card-img" alt="">
                              </div>
                              <div>
                                  <a href="/cooking-videos-pkgs.php"><button class="btn btn-primary service-card-button">Show All Packages </button></a> 
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class=" col-md-4 col-lg-3 col-sm-6">
                      <div id="service-card" class="card mt-4">
                          <div class="card-body">
                              <div class="services-card-title">
                                  <p>Cashcow videos</p>
                              </div>
                              <div >
                                  <img src="./assets/images/services/cow.png" class="services-card-img" alt="">
                              </div>
                              <div>
                                  <a href="/cashcow-videos-pkgs.php"><button class="btn btn-primary service-card-button">Show All Packages </button></a> 
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
        </div>
      </div>

      <?php require ("./include/footer.php")?>
    </div>

    <!-- Scripts -->
    <?php require ("./include/scripts.php")?>\

  </body>
</html>
