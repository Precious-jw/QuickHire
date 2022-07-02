<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<title>QuickHire || Apply Now </title>
<meta name="description" content="QuickHire">
<link href="<?= URLROOT;?>/assets/images/favicon.png" rel="icon">


<!-- Web Fonts
============================================= -->


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

<div id="main-wrapper">
  <div class="container-fluid px-0 bg-primary">
      
      <!-- Login Form
      ============================================= -->
      <div class="col d-flex align-items-center p-5">
        <div class="container my-3 bg-white shadow w-50">
          <div class="row g-0">
            <div class="col-12 col-lg-10 col-xl-9 mx-auto py-3">
              <h3 class="text-center mt-3 mb-4">Apply Now</h3>
              <?php echo flash('register_success'); ?>
              <form id="loginForm" action="<?=URLROOT?>/users/apply" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <input type="text" class="form-control <?= (!empty($data['fullname_err'])) ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" value="<?= $data['fullname']; ?>"  placeholder="Enter Your Full Name" required>
                  <span class="invalid-feedback"><?= $data['fullname_err']; ?></span>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $data['email']; ?>" placeholder="Enter Your Email address" required>
                  <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                </div>
                <div class="mb-3">
                  <select id="gender" name="gender" class="form-control <?= (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['gender']; ?>" required>
                    <option>-- Select Gender --</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <span class="invalid-feedback"><?= $data['gender_err']; ?></span>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Date of Birth</span>
                  </div>
                  <input type="date" class="form-control <?= (!empty($data['dob_err'])) ? 'is-invalid' : ''; ?>" id="dob" name="dob" value="<?= $data['dob']; ?>" required>
                  <span class="invalid-feedback"><?= $data['dob_err']; ?></span>
                </div>
                <div class="mb-3">
                  <select id="type" name="type" class="form-control <?= (!empty($data['type_err'])) ? 'is-invalid' : ''; ?>" required>
                    <option>-- Select Account Type --</option>
                    <option value="worker">I want to Work</option>
                    <option value="employer">I want to Hire</option>
                  </select>
                  <span class="invalid-feedback"><?= $data['type_err']; ?></span>
                </div>
                
                <div class="mb-3">
                  <input type="password" class="form-control <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" name="password" required>
                  <span class="invalid-feedback"><?= $data['password_err']; ?></span>
                </div>

                <div class="mb-3">
                  <input type="password" class="form-control <?= (!empty($data['confirm_pass_err'])) ? 'is-invalid' : ''; ?>" id="confirm_password" placeholder="Confirm Password" name="confirm_pass" required>
                  <span class="invalid-feedback"><?= $data['confirm_pass_err']; ?></span>
                </div>
               
                <div class="checkbox checkbox-css m-b-30">
                    <input type="checkbox" id="agreement_checkbox" value="" checked required>
                    <span class="agreement_checkbox" style="font-size: 14px;">
                      By clicking Submit Application, you agree to our <a href="../terms-and-conditions.html">Terms</a> and <a href="../privacy-policy.html">Privacy Policy</a>, including our Cookie Use.
                    </span>
                </div>
                
                <div class="d-grid my-3"><button class="btn btn-primary" type="submit">Submit Application</button></div>
              </form>
              <p class="text-3 text-center text-muted">Already a customer? Click <a class="btn-link" href="<?=URLROOT?>/users/login">here</a> to login</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End --> 
  </div>
</div>

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