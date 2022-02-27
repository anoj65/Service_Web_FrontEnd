<!DOCTYPE html>
<html lang="en">
<?php require './include/header.php' ?>

<body>
  <div class="main-wrapper">

    <!-- partial:../../partials/_sidebar.html -->
    <?php require './include/sidebar.php' ?>
    <?php require './include/settingbar.php' ?>
    <!-- partial -->

    <div class="page-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <?php require './include/navbar.php' ?>
      <!-- partial -->

      <div class="page-content">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title mb-3">Processing Orders</h6>
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
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr class="myText">
                    <th>#0001</th>
                    <td>12/01/2021</td>
                    <td>Rs. 1,500</td>
                    <td>Bronze Package</td>
                    <td>Youtube Shorts Channel</td>
                    <td><span class="badge bg-success">Processing</span></td>
                    <td class="text-center">
                      <a href="#" class="text-warning mx-2"><i data-feather="eye" class="icon" data-bs-toggle="modal" data-bs-target="#orderdetailesmodel"></i></a>
                      <a href="#" class="text-success processing" onclick="showSwal('devil')"><i data-feather="truck" class="icon"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th>#0001</th>
                    <td>12/01/2021</td>
                    <td>Rs. 1,500</td>
                    <td>Bronze Package</td>
                    <td>Youtube Shorts Channel</td>
                    <td><span class="badge bg-success">Processing</span></td>
                    <td class="text-center">
                      <a href="#" class="text-warning mx-2"><i data-feather="eye" class="icon" data-bs-toggle="modal" data-bs-target="#orderdetailesmodel"></i></a>
                      <a href="#" class="text-success" onclick="showSwal('devil')"><i data-feather="truck" class="icon"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- Modal Order Detailes -->
              <div class="modal fade" id="orderdetailesmodel" tabindex="-1" aria-labelledby="orderdetailesmodelTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="orderdetailesmodellTitle">Order Details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="name" class="form-label">User Name</label>
                        <input id="name" class="form-control" name="name" type="text" value="T Shirt" readonly />
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label">Email Address</label>
                        <input id="name" class="form-control" name="name" type="text" value="exsample@gmail.com" readonly />
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label">Phone Number</label>
                        <input id="name" class="form-control" name="name" type="text" value="+947xxxxxxx" readonly />
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label">Service Category</label>
                        <input id="name" class="form-control" name="name" type="text" value="Motivation Videos" readonly />
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label">Package</label>
                        <input id="name" class="form-control" name="name" type="text" value="Bronze Package" readonly />
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Order Detailes -->
            </div>
          </div>
        </div>

      </div>

      <!-- partial:../../partials/_footer.html -->
      <?php require './include/footer.php' ?>
      <!-- partial -->

    </div>
  </div>

  <!-- core:js -->
  <script src="./assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="./assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <!-- End plugin js for this page -->


  <!-- inject:js -->
  <script src="./assets/vendors/feather-icons/feather.min.js"></script>
  <script src="./assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="./assets/js/sweet-alert.js"></script>
  <!-- End custom js for this page -->

  <script>
    $(".processing").click(function() {

      var lable = $(".processing").text().trim();

      if (lable == "Hide") {
        $(".processing").text("Show");
        $(".myText").hide();
      } else {
        $(".processing").text("Show");
        $(".myText").hide();
      }

    });
  </script>
</body>

</html>