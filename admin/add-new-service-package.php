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
            <li class="breadcrumb-item"><a href="#">Service</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Add New Package
            </li>
          </ol>
        </nav>

        <div class="row">
          <!-- Left Side -->
          <div class="col-lg-8 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="mb-4">
                  <label class="form-label">Package Type</label>
                  <select class="form-select mb-3">
                    <option selected>Select</option>
                    <option>Bronze Package</option>
                    <option>Silver Package</option>
                    <option>Gold Package</option>
                    <option>Diamond Package</option>
                    <option>Platinum Package</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label">Package Price ( $ )</label>
                  <input type="number" min="0" class="form-control mb-3" placeholder="Enter Price">
                </div>
                <div class="mb-4">
                  <form action="" method="post">
                    <div class="input_fields_wrap">
                      <label class="form-label">Package Details</label>
                      <input type="text" class="form-control mb-3" name="mytext[]" placeholder="Enter Price">
                    </div>
                    <button class="btn btn-primary add_field_button">Add More Fields</button>
                  </form>
                </div>
                <div class="mb-4">
                  <label class="form-label">Service Category</label>
                  <select class="form-select mb-3">
                    <option selected>Select</option>
                    <option>Motivation Videos</option>
                    <option>Meditation Videos</option>
                    <option>Luxury Videos</option>
                    <option>Cooking Videos</option>
                    <option>Cashcow Videos</option>
                    <option>Youtube Monetization</option>
                    <option>Youtube Shorts Channel</option>
                    <option>Google Ads</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- Left Side -->

          <!-- Right Side -->
          <div class="col-lg-4 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Publish</h4>
                <hr />
                <div>
                  <div class="d-flex justify-content-between mt-4">
                    <p>Status : <b>Draft</b></p>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <p>Service Category : <b>Motivation Videos</b></p>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-outline-primary">
                  Publish
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Right Side -->
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

  <script type="text/javascript">
    $(document).ready(function() {
      var max_fields = 20; //maximum input boxes allowed
      var wrapper = $(".input_fields_wrap"); //Fields wrapper
      var add_button = $(".add_field_button"); //Add button ID

      var x = 1; //initlal text box count
      $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
          x++; //text box increment
          $(wrapper).append('<div class="input-group mb-3"><input type="text" name="mytext[]" class="form-control"><div class="input-group-append"><button class="btn btn-outline-danger remove_field" type="button">Remove</button></div></div>'); //add input box
        }
      });

      $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').parent('div').remove();
        x--;
      })
    });
  </script>
</body>

</html>