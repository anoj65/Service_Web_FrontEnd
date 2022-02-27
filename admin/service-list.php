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
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              All Products
            </li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#001</td>
                        <td>Motivation Videos</td>
                        <td>Bronze Package</td>
                        <td>Youtube Shorts Channel</td>
                        <td>$ 12.99</td>
                        <td>02/22/2022</td>
                        <td class="text-center">
                          <a href="./add-new-service-package.php" class="text-secondary mx-2"><i data-feather="edit"></i></a>
                          <a href="#" class="text-danger"><i data-feather="trash" onclick="showSwal('passing-parameter-execute-cancel')"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>#001</td>
                        <td>Motivation Videos</td>
                        <td>Bronze Package</td>
                        <td>Youtube Shorts Channel</td>
                        <td>$ 12.99</td>
                        <td>02/22/2022</td>
                        <td class="text-center">
                          <a href="./add-new-service-package.php" class="text-secondary mx-2"><i data-feather="edit"></i></a>
                          <a href="#" class="text-danger"><i data-feather="trash" onclick="showSwal('passing-parameter-execute-cancel')"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>#001</td>
                        <td>Motivation Videos</td>
                        <td>Bronze Package</td>
                        <td>Youtube Shorts Channel</td>
                        <td>$ 12.99</td>
                        <td>02/22/2022</td>
                        <td class="text-center">
                          <a href="./add-new-service-package.php" class="text-secondary mx-2"><i data-feather="edit"></i></a>
                          <a href="#" class="text-danger"><i data-feather="trash" onclick="showSwal('passing-parameter-execute-cancel')"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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
    <script src="./assets/vendors/ace-builds/src-min/theme-chaos.js"></script>
    <script src="./assets/vendors/jquery-steps/jquery.steps.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="./assets/vendors/feather-icons/feather.min.js"></script>
    <script src="./assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="./assets/js/tinymce.js"></script>
    <script src="./assets/js/simplemde.js"></script>
    <script src="./assets/js/wizard.js"></script>
    <script src="./assets/js/tags-input.js"></script>
    <script src="./assets/js/dropify.js"></script>
    <script src="./assets/js/dropzone.js"></script>
    <script src="./assets/js/sweet-alert.js"></script>
    <!-- End custom js for this page -->
</body>

</html>