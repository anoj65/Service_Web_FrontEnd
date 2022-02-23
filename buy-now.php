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

      <div class="main-content">
        <div class="container">
          <div class="card mt-5">
              <div class="row card-body">
                  <div class="col-md-5">
                      <h4 class="mb-3">Video Editing Requirments</h4>
                      <div>
                          <ul>
                              <li>If you have the logo please update it in the PNG form. Please note that PDF or JPEG format will not be accepted <br>
                                <div class="form-group mt-4 mb-3">
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                              </li>
                                <br>
                              <li>If you have animated Subscribe and Outro please provide us in advance. Don't worry if you doesn't have we will add that for you</li>
                                <br>
                              <li>Please feel to free state any requirement you need for the project</li>
                                <br>
                              <li>Please acknowledge all the given information's are correct and there won't be any addition information's after order has been started.</li>
                          </ul>
                      </div>
                        <div class="mt-5">
                            <h6>Need More Infomations?</h6>
                            <h5>Contact Us : <i class="fab fa-facebook-messenger"></i> <i class="fab fa-whatsapp"></i> </h5>
                        </div>
                  </div>
                  <div class="col-2"></div>
                  <div class="col-md-5 ">
                    <h4 class="mb-3">Order Details</h4>
                      <div>
                        <div>
                            <h5 class="order-detailes-title">Service : Youtube Monetization</h5>
                        </div>
                        <br>
                        <div>
                            <h5 class="order-detailes-title">Package : Silver</h5>
                        </div>
                        <br>
                        <div>
                            <h5 class="order-detailes-title">Package Details :
                                <ul class="package-detiles-list mt-3">
                                    <li class="package-detailes-list-item">1 Video</li>	
                                    <li class="package-detailes-list-item">Top Quality</li>	
                                    <li class="package-detailes-list-item">3 - 5 Min Video</li>	
                                    <li class="package-detailes-list-item">Thumbnail</li>
                                    <li class="package-detailes-list-item">Subtitles</li>
                                    <li class="package-detailes-list-item">According to Requirment</li>	
                                    <li class="package-detailes-list-item">24/7 Services</li>	
                                    <li class="package-detailes-list-item">1 Revision</li>
                                </ul>
                            </h5>
                        </div>
                        <br>
                        <div>
                            <h5>Total : $90.99</h5>
                        </div>
                      </div>
                      <div class="order-detailes-button">
                        <a href="./checkout.php"> 
                          <button type="button" class="btn btn-outline-dark">Continue</button> 
                        </a>
                      </div>
                  </div>
              </div>    
          </div>
        </div>
      </div>

      <?php require ("./include/footer.php")?>
    </div>

    <!-- Scripts -->
    <?php require ("./include/scripts.php")?>

  </body>
</html>
