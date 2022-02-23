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
            <div class="mt-5">
                <h3>Checkout</h3>
            </div>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Don't Have a Account?</strong> Click here to  <a href="#">Create a new account. </a>
                <button class="btn close text-end" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>

          <div class="mt-5">
              <div class="row">
                  <div class="col-8">
                        <h4>Billing Information</h4>
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="FirstName">First name <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control mt-2" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="LastName">Last name <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control mt-2">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group mt-4">
                                <label for="Address">Company name (optional)</label>
                                <input type="text" class="form-control mt-2" >
                            </div>
                            <div class="form-group mt-4">
                                <label for="Contry">Country / Region <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-2" >
                            </div>
                            <div class="form-group mt-4">
                                <label for="inputAddress">Address (optional)</label>
                                <input type="text" class="form-control mt-2">
                                <input type="text" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-4">
                                <label for="Contry">Town / City (optional)<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-2">
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Contry">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Contry">Email address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1">
                            
                            
                        </div>
                        </div>
                        
                  </div>
                  <div class="col-4">
                    <h4>Order Details</h4>
                    <div class="row mt-5">
                        <div class="col-6"> 
                            <div>
                                <h6>PRODUCT</h6>
                            </div>
                        </div>
                        <div class="col-6 text-end"> 
                            <div>
                                <h6>SUBTOTAL</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            <div>
                                <p>Youtube Monetization x 1</p>
                            </div>
                        </div>
                        <div class="col-6 text-end"> 
                            <div>
                                <p>$90.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            <div>
                                <p>Subtotal</p>
                            </div>
                        </div>
                        <div class="col-6 text-end"> 
                            <div>
                                <p>$90.99</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6"> 
                            <div>
                                <h5>Total: </h5>
                            </div>
                        </div>
                        <div class="col-6 text-end"> 
                            <div>
                                <h5>$90.99</h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <hr>

                    <div class="mt-5">
                        <form class="pb-3">
                            <div class="d-flex flex-row pb-3">
                            <div class="d-flex align-items-center pe-2">
                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="..." checked/>
                            </div>
                            <div class="rounded border d-flex w-100 p-3 align-items-center">
                                <p class="mb-0">
                                    <img class="img-payneeor" src="./assets/images/icon/paypal.png"></img>
                                </p>
                            </div>
                            </div>

                            <div class="d-flex flex-row">
                            <div class="d-flex align-items-center pe-2">
                                <input class="form-check-input" type="radio" name="radioNoLabel"  id="radioNoLabel2" value="" aria-label="..."/>
                            </div>
                            <div class="rounded border d-flex w-100 p-3 align-items-center">
                                <p class="mb-0">
                                    <img class="img-payneeor" src="./assets/images/icon/payoneer.png"></img>
                                </p>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class=" mt-5">
                        <div>
                            <p class="payment-policy">
                            Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy.</a>
                            </p>
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <button class="btn btn-dark">Process</button>
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
    <?php require ("./include/scripts.php")?>

  </body>
</html>
