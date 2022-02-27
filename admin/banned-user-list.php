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
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              All Users
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
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>

                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#001</td>
                        <td>Hela Script</td>
                        <td>helascript@gmail.com</td>
                        <td>071-3656552</td>
                        <td class="text-center">
                          <a href="#" class="text-success mx-2"><i data-feather="check-circle"></i></a>
                          <a href="#" class="text-danger"><i data-feather="trash"></i></a>
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
    <script src="./assets/vendors/tinymce/tinymce.min.js"></script>
    <script src="./assets/vendors/simplemde/simplemde.min.js"></script>
    <script src="./assets/vendors/ace-builds/src-min/theme-chaos.js"></script>
    <script src="./assets/vendors/jquery-steps/jquery.steps.min.js"></script>
    <script src="./assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script src="./assets/vendors/dropify/dist/dropify.min.js"></script>
    <script src="./assets/vendors/dropzone/dropzone.min.js"></script>
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
    <!-- End custom js for this page -->
</body>

</html>