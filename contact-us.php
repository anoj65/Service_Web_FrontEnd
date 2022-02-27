<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Xpertsfacility.com</title>

  <!-- Css file -->
  <link rel="stylesheet" href="./assets/css/style.css" />

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
  <div class="main">

    <?php require("./include/header.php") ?>
    <div class="main-content">
      <div class="container">
        <div>
          <div class="text-center">
            <h1 style="padding-top:50px !important;" class="contact-header text-center">Got some questions?</h1>
            <div style="padding-bottom: 50px !important;" class="contact-discription">We can help you</div>
          </div>
          <form>
            <div class="row">
              <div class="col">
                <label class="mb-2 mt-4">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label class="mb-2 mt-4">Last Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label class="mb-2 mt-4">Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label class="mb-2 mt-4">Phone Number <span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label class="mt-4 mb-2">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
            </div>
            <div class="text-center mt-4">
              <button type="button" class="btn btn-outline-dark ">Send Us a Email</button>
            </div>
          </form>
        </div>
      </div>
      <div class="contact-section">
        <?php require("./include/home-page-sections/contact-us-section.php") ?>
      </div>
    </div>


    <?php require("./include/footer.php") ?>
  </div>

  <!-- Scripts -->
  <?php require("./include/scripts.php") ?>

</body>

</html>