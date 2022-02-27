<?php
  session_start();
  if(isset($_SESSION['user'])){
?>
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
                <h4 class="my-5"> My Account </h4>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">

                    <div class="card profile-card" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                      <div class="card-body text-center">
                        <div>
                          <i class="far fa-list-alt icon-box mb-2"></i>
                        </div>
                        <p class="icon-box-text">Orders</p>
                      </div>
                    </div>

                  </li>
                  <li class="nav-item" role="presentation">

                    <div class="card profile-card" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                      <div class="card-body text-center">
                        <div>
                          <i class="fas fa-user icon-box mb-2"></i>
                        </div>
                        <p class="icon-box-text">Details</p>
                      </div>
                    </div>

                  </li>
                  <li class="nav-item" role="presentation">

                    <a href="/logout.php" class="card profile-card">
                      <div class="card-body text-center">
                        <div>
                          <i class="fas fa-sign-out-alt icon-box mb-2"></i>
                        </div>
                        <p class="icon-box-text">Logout</p>
                      </div>
                    </a>

                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title mb-3">Order History</h6>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Order ID</th>
                                <th>Order Date</th>
                                <th>Total Amount</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>#0001</th>
                                <td>12/01/2021</td>
                                <td>Rs. 1,500</td>
                                <td>Bronze Package</td>
                                <td>Youtube Shorts Channel</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                              </tr>
                              <tr>
                                <th>#0001</th>
                                <td>12/01/2021</td>
                                <td>Rs. 1,500</td>
                                <td>Bronze Package</td>
                                <td>Youtube Shorts Channel</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                              </tr>
                              <tr>
                                <th>#0001</th>
                                <td>12/01/2021</td>
                                <td>Rs. 1,500</td>
                                <td>Bronze Package</td>
                                <td>Youtube Shorts Channel</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title mb-3">Account Details</h6>
                        <div class="row mt-4">
                          <div class="col-6">
                            <label>First Name</label>
                            <input type="email" class="form-control mt-2" value="HelaScript">
                          </div>
                          <div class="col-6">
                            <label >Last Name</label>
                            <input type="text" class="form-control mt-2" value="Some Text">
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col-6">
                            <label>Email</label>
                            <input type="email" class="form-control mt-2" value="HelaScript@gmail.com">
                          </div>
                          <div class="col-6">
                            <label >Phone Number</label>
                            <input type="text" class="form-control mt-2" value="+9471xxxxxx">
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col-6">
                            <label>New Password</label>
                            <input type="password" class="form-control mt-2">
                          </div>
                          <div class="col-6">
                            <label >Confirm Password</label>
                            <input type="password" class="form-control mt-2">
                          </div>
                        </div>
                        <div>
                          <div class="col-6 mt-5">
                            <label>Confirm Current Password</label>
                            <input type="email" class="form-control mt-2">
                          </div>
                          <button class="btn btn-primary mt-3">Save Changes</button>
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
<?php
  } else {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    die;
  }

?>

