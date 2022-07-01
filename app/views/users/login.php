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
<link rel="stylesheet" type="text/css" href="<?= URLROOT?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= URLROOT?>/assets/vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?= URLROOT?>/assets/css/stylesheet.css">
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="min-vh-100 d-flex flex-column">
  <!-- Login Form
  ============================================= -->
  <div class="container my-auto"> 
    <div class="row">
      <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 m-auto py-5 px-5 bg-light">
        <div class="logo text-center text-2"><P>LOGIN</P> </div>
        <?php echo flash('register_success'); ?>
        <form id="loginForm" action="<?=URLROOT?>/users/login" method="post">
            <div class="input-group mb-2">
              <input type="text" class="form-control <?= (!empty($data['accountid_err'])) ? 'is-invalid' : ''; ?>" id="accountid" name="accountid" value="<?php echo $data['accountid']; ?>" required="" placeholder="Email address">
              <span class="invalid-feedback"><?php echo $data['accountid_err']; ?></span>
            </div> 
            <div class="input-group">
              <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" id="password" name="password" required="" placeholder="Password">
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
          <div class="d-grid my-4"><button class="btn btn-primary shadow-none" type="submit">Login</button></div>
        </form>
        <p class="text-2 text-center text-muted mb-2">Not yet a customer? Click <a class="btn-link" href="<?=URLROOT?>/users/apply"> here</a> to Sign Up </p>
        <p class="text-center mb-0"><a class="btn-link" href="#">Forgot Password?</a></p>
      </div>
    </div>
  </div>
  <!-- Login Form End -->
  
  <!-- Footer
  ============================================= -->
  <div class="container-fluid bg-white py-2">
    <p class="text-center text-muted mb-0">Copyright &copy; 2022 <a href="#">Ykredi Finance</a>. All Rights Reserved.</p>
  </div>
  
  
</div>

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 


<!-- Script --> 
<script src="<?= URLROOT;?>/assets/vendor/jquery/jquery.min.js"></script> 
<script src="<?= URLROOT;?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Style Switcher --> 
<script src="<?= URLROOT;?>/assets/js/switcher.min.js"></script> 
<script src="<?= URLROOT;?>/assets/js/theme.js"></script>
</body>
</html>