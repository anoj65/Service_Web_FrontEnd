<?php

  session_start();
  require_once("../include/connection.php");

  $error_unexpected = false;
  $error_name = false;
  $error_parent = false;
  $error_image = false;

  $input_name = "";
  $input_parent = "";
  $input_image = "";

  function validateinput_semi($input){
		$variable = htmlspecialchars(trim(stripslashes($input)));
		return($variable);
	}

  function uploadImage($uploaded_Image,$image_location){
    $allowTypes = array('jpg','png','jpeg','gif','webp');

    $fileName = basename($uploaded_Image["name"]); 
		$fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    if(in_array($fileType, $allowTypes)){
        $imageTemp = $uploaded_Image["tmp_name"]; 

				$imgInfo = getimagesize($imageTemp); 
				$mime = $imgInfo['mime'];

				switch($mime){
					case 'image/jpeg': 
						$image = imagecreatefromjpeg($imageTemp); 
						break;
					case 'image/jpg': 
						$image = imagecreatefromjpeg($imageTemp); 
						break;
					case 'image/png': 
						$image = imagecreatefrompng($imageTemp); 
						break; 
					case 'image/gif': 
						$image = imagecreatefromgif($imageTemp); 
						break; 
					case 'image/webp':
						$image = imagecreatefromwebp($imageTemp);
						break; 
					default: 
						$image = imagecreatefromjpeg($imageTemp); 
				}

				$compressedImage = imagewebp($image,$image_location, 100);

        return $compressedImage;
    } else {
      return false;
    }
    
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$input_name = validateinput_semi($_POST['name']);
    if(strlen($input_name) < 2){
			$error_name = true; echo("Name Error");
		}
		$input_parent = (int)validateinput_semi($_POST['parent']);
    if(strlen($input_name) < 1){
			$error_parent = true; echo("Parent Error");
		}
    
    $imageName = time();
    $input_file = uploadImage($_FILES['customFile'],"../assets/images/uploads/categories/$imageName.webp");
    if($input_file){
      //image uploaded
      $conn = mysqli_connect($db[0], $db[1], $db[2], $db[3]);
      $sql = "INSERT INTO `category`(`name`, `image`, `parent`) VALUES ( '$input_name', '$imageName', '$input_parent')";

			if (mysqli_query($conn, $sql)) {
				mysqli_close($conn);
			} else {
        $error_unexpected = true;
			}

    } else {
      $error_image = true; echo("Image Error");
    }

  } elseif($_SERVER["REQUEST_METHOD"] == "DELETE"){
    //handle delete
  }

?>
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
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Add New Service Category
            </li>
          </ol>
        </nav>

        <div class="row">
          <!-- Left Side -->
          <div class="col-lg-4 grid-margin">
            <form class="card" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input id="name" class="form-control" name="name" type="text" />
                </div>
                <div class="mb-3">
                  <label for="customFile" class="form-label">Image</label>
                  <input type="file" name="customFile" class="form-control" id="customFile" accept="image/*" />
                </div>
                <div class="mb-3">
                  <label for="parent" class="form-label">Parent category</label>
                  <select id="parent" name="parent" class="form-select mb-3">
                    <option selected value="0">This is Parent Category</option>
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
                <div class="d-flex justify-content-start">
                  <button type="submit" class="btn btn-outline-primary">
                    Add new category
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- Left Side -->

          <!-- Right Side -->
          <div class="col-lg-8 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Parent</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>T shirts</td>
                        <td>-</td>
                        <td class="text-center">
                          <a href="#" class="text-dark mx-2" data-bs-toggle="modal" data-bs-target="#categoryeditmodel"><i data-feather="edit"></i></a>
                          <a href="#" class="text-danger"><i data-feather="trash"></i></a>
                        </td>
                      </tr>
                      <!-- Modal Category Edit -->
                      <div class="modal fade" id="categoryeditmodel" tabindex="-1" aria-labelledby="categoryeditmodelTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="categoryeditmodelTitle">Edit Attribute</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" class="form-control" name="name" type="text" value="T Shirt" />
                              </div>
                              <div class="mb-3">
                                <label for="name" class="form-label">Parent category</label>
                                <select class="form-select mb-3">
                                  <option selected>This is Parent Category</option>
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
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal Category Edit -->
                    </tbody>
                  </table>
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
</body>

</html>