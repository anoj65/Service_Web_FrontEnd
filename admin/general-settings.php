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
            <li class="breadcrumb-item"><a href="#">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              General Settings
            </li>
          </ol>
        </nav>
        <div class="col grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">General Settings</h6>
              <form class="forms-sample">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Site Title</label>
                  <div class="col-5">
                    <input type="text" class="form-control text-secondary" value="HelaScript">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Tagline</label>
                  <div class="col-5">
                    <input type="email" class="form-control text-secondary" value="Sri Lankan No 1">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Administration Email Address</label>
                  <div class="col-5">
                    <input type="email" class="form-control text-secondary" value="admin@helascript.com">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Site Language</label>
                  <div class="col-5">
                    <select class="form-control text-secondary">
                      <option selected>English</option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Save</button>
              </form>
            </div>
          </div>
        </div>



        <!-- partial:../../partials/_footer.html -->
        <?php require './include/footer.php' ?>
        <!-- partial -->
      </div>
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