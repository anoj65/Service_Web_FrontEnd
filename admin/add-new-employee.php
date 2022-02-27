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
                        <li class="breadcrumb-item"><a href="#">Employees</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add New Employee
                        </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Employee Details</h6>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">User Name</label>
                                                <input type="text" class="form-control" placeholder="Enter User Name">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control" placeholder="Enter Email">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="Enter First Name">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Last Name">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="Enter Address">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" placeholder="Enter City">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">State</label>
                                                <input type="text" class="form-control" placeholder="Enter State">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Zip</label>
                                                <input type="text" class="form-control" placeholder="Enter Zip Code">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" placeholder="Enter Phone Number">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">User Role</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Select User Role</option>
                                                    <option>Administrator</option>
                                                    <option>Editor</option>
                                                    <option>Contributor</option>
                                                </select>
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Enter New Password">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" placeholder="Confirm Your Password">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                </form>
                                <button type="button" class="btn btn-primary submit">Add New Employee</button>
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