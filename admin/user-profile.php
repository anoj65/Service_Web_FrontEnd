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

        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="position-relative">
                <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                  <img src="https://via.placeholder.com/1560x370" width="1560" height="370" class="rounded-top" alt="profile cover">
                </figure>
                <div class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                  <div>
                    <img class="wd-70 rounded-circle" src="https://via.placeholder.com/100x100" alt="profile">
                    <span class="h4 ms-3 text-dark">HelaScript</span>
                  </div>
                  <div class="d-none d-md-block">
                    <button class="btn btn-primary btn-icon-text">
                      <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="card-title mb-0">Profile</h6>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="settings" data-bs-toggle="modal" data-bs-target="#profileeditmodel"></i>
                    </button>
                  </div>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                  <p class="text-muted">HelaScript</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                  <p class="text-muted">January 18, 2022</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
                  <p class="text-muted">No : xx, xxxxxxxxxxxxxx, xxxxxxx</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">IP:</label>
                  <p class="text-muted">xxx.xxx.xxx.xxx</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">xxxxxxx@gmail.com</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone Number:</label>
                  <p class="text-muted">07x-xxxxxxx</p>
                </div>
                <div class="mt-3 d-flex social-links">
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="facebook"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="youtube"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="linkedin"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Profile Edit Modal -->
          <div class="modal fade bd-example-modal-lg" id="profileeditmodel" tabindex="-1" aria-labelledby="profileeditmodel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title h4" id="profileeditmodel">Edit Profile</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close">
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" placeholder="Enter first name" value="xxxxxxxxxxxx">
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" placeholder="Enter last name" value="xxxxxxxxxxx">
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" placeholder="Enter first name" value="No xxx, xxxxxxx xxxxxxx, xxxxx">
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" placeholder="Enter city" value="xxxxxxxxxxxx">
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">State</label>
                          <input type="text" class="form-control" placeholder="Enter city" value="xxxxxxxxxxxx">
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Zip</label>
                          <input type="text" class="form-control" placeholder="Enter state" value="xxxxx">
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Phone Number</label>
                          <input type="text" class="form-control" placeholder="Enter first name" value="07x-xxxxxxx">
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Email address</label>
                          <input type="email" class="form-control" placeholder="Enter email" value="xxxxxx@gmail.com">
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="mb-3 mt-4">
                      <div class="form-check ">
                        <label class="form-check-label" for="passwordChange">
                          Want to change your current password?
                        </label>
                        <input type="checkbox" class="form-check-input" id="passwordChange" onclick="myFunction()">
                      </div>
                    </div>
                    <div class="row" id="text" style="display:none">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">New Password</label>
                          <input type="password" class="form-control" placeholder="Enter New Password">
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Confirm New Password</label>
                          <input type="password" class="form-control" placeholder="Confirm Your Password">
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->
                  </form>
                  <div class="row mt-4">
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <input id="CurrentPassword" type="password" onkeyup="EnableDisable(this)" class="form-control" placeholder="Confirm Current Password">
                      </div>
                    </div><!-- Col -->
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <button type="button" class="btn btn-primary submit" id="UpdateBtn" disabled="disabled">Update</button>
                      </div>
                    </div><!-- Col -->
                  </div><!-- Row -->
                </div>
              </div>
            </div>
          </div>
          <!-- Profile Edit Modal -->
          <div class="d-none d-xl-block col-xl-9">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-body">
                    <h6 class="card-title">Notifications</h6>
                    <div class="row ">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Some Alert!</strong> You should check
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                      </div>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Some Alert!</strong> You should check
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                      </div>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Some Alert!</strong> You should check
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                      </div>
                      <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Some Alert!</strong> You should check
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                      </div>
                      <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        <strong>Some Alert!</strong> You should check
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                      </div>
                      <div class="alert alert-light alert-dismissible fade show" role="alert">
                        <strong>Some Alert!</strong> You should check
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- right wrapper end -->
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

  <script>
    function myFunction() {

      var checkBox = document.getElementById("passwordChange");
      var text = document.getElementById("text");

      if (checkBox.checked == true) {
        text.style.display = "";
      } else {
        text.style.display = "none";
      }
    }
  </script>

  <script type="text/javascript">
    function EnableDisable(CurrentPassword) {
      var UpdateBtn = document.getElementById("UpdateBtn");

      if (CurrentPassword.value.trim() != "") {
        UpdateBtn.disabled = false;
      } else {
        UpdateBtn.disabled = true;
      }
    };
  </script>

</body>

</html>