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
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Employee Details</h6>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">User Name</label>
                                                <input type="text" class="form-control" placeholder="Enter first name" value="xxxxxxx">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control" placeholder="Enter email" value="xxxxxx@gmail.com">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
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
                                                <label class="form-label">User Role</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Administrator</option>
                                                    <option>Editor</option>
                                                    <option>Contributor</option>
                                                </select>
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->

                                </form>
                                <button type="button" class="btn btn-primary submit">Update</button>
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
    <script src="./assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->


    <!-- inject:js -->
    <script src="./assets/vendors/feather-icons/feather.min.js"></script>
    <script src="./assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="./assets/js/sweet-alert.js"></script>
    <!-- End custom js for this page -->
</body>

</html>