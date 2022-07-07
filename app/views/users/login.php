<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<title>QuickHire || Login</title>
<meta name="description" content="Ykredi Finance || Private | Commercial | Private Banking | Financial Consultants">
<link href="<?= URLROOT;?>/assets/images/favicon.png" rel="icon">


<!-- Web Fonts
============================================= -->
<link rel="stylesheet" href="<?= URLROOT;?>/assets/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="<?= URLROOT?>/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= URLROOT?>/assets/css/fontawesome.css">
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

  <div id="main-wrapper" class="d-flex flex-column mb">
    <div class="container-fluid px-0 bg-primary">
    <!-- Login Form
      ============================================= -->
      <div class="col d-flex align-items-center p-5">
        <div class="container-fluid my-3 bg-white shadow" style="width: 40%">
          <div class="row g-0">
            <div class="col-12 col-lg-10 col-xl-9 mx-auto py-5">
              <h3 class="text-center mt-3 mb-4">Login</h3>
              <?php echo flash('register_success'); ?>
              <form id="loginForm" action="<?=URLROOT?>/users/login" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <input type="email" class="form-control <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $data['email']; ?>" placeholder="Enter Your Email address" required>
                  <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                </div>
                
                <div class="mb-3">
                  <input type="password" class="form-control <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" name="password" required>
                  <span class="invalid-feedback"><?= $data['password_err']; ?></span>
                </div>
                
                <div class="d-grid my-3">
                  <button class="btn btn-primary" type="submit">Login</button>
                </div>
              </form>
              <p class="text-2 text-center text-muted mb-2">Not yet a customer? Click <a class="btn-link" href="<?=URLROOT?>/users/apply"> here</a> to Sign Up </p>
              <p class="text-center mb-0"><a class="btn-link" href="#">Forgot Password?</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End --> 
    </div>
    <!-- Footer
    ============================================= -->
    <div class="container-fluid py-2  mt-auto">
      <p class="text-center text-muted mb-0">Copyright &copy; 2022 <a href="#">Ykredi Finance</a>. All Rights Reserved.</p>
    </div>
  
  
  </div>

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="#" class="position-fixed fixed-bottom outline-primary"><i class="fa fa-chevron-up"></i></a>


<!-- Bootstrap core JavaScript -->
<script src="<?= URLROOT?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= URLROOT?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?= URLROOT?>/assets/js/custom.js"></script>
    <script src="<?= URLROOT?>/assets/js/owl.js"></script>
    <script src="<?= URLROOT?>/assets/js/slick.js"></script>
    <script src="<?= URLROOT?>/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

</body>
</html>