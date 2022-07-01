<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<title>Ykredi Finance || Dashboard </title>
<meta name="description" content="Ykredi Finance || Private | Commercial | Private Banking | Financial Consultants">
<meta prefix="og:http://ogp.me/ns#" property="og:image" content="static.wixstatic.com/media/dcfcb9_2352176162754f898350deda842b77b1_mv2.jpg" />
<meta prefix="og:http://ogp.me/ns#" property="og:url" content="index.html" />
<meta name="og:title" content="Ykredi Finance || Private | Commercial | Private Banking | Financial Consultants" />
<meta name="og:type" content="Ykredi Finance" />
<meta name="og:site_name" content="Ykredi Finance" />
<meta name="og:description" content="Ykredi Finance || Private | Commercial | Private Banking | Financial Consultants" />
<meta name="twitter:title" content="Ykredi Finance || Private | Commercial | Private Banking | Financial Consultants">
<meta name="twitter:description" content="Ykredi Finance || Private | Commercial | Private Banking | Financial Consultants">
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

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo me-3 title"> <a class="d-flex title" href="../index.html" title="Logo">Ykredi Finance</a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"> <span></span> <span></span> <span></span> </button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav me-auto">
                <li class="active"><a href="<?=URLROOT?>/pages/dashboard">Dashboard</a></li>
                <li><a href="<?=URLROOT?>/transfers">Transactions</a></li>
                <li><a href="<?=URLROOT?>/transfers/fund">Fund New Transfer</a></li>
          
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- My Profile
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li class="dropdown language"> <a class="dropdown-toggle" href="#">En</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">English</a></li>
                  <li><a class="dropdown-item" href="#">French</a></li>
                  <li><a class="dropdown-item" href="#">Русский</a></li>
                  <li><a class="dropdown-item" href="#">简体中文</a></li>
                  <li><a class="dropdown-item" href="#">Türkçe</a></li>
                </ul>
              </li>
              <li class="dropdown notifications"> <a class="dropdown-toggle" href="#"><span class="text-5"><i class="far fa-bell"></i></span><span class="count">3</span></a>
                <ul class="dropdown-menu">
                  <li class="text-center text-3 py-2">Notifications (3)</li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>A new digital FIRC document is available for you to download<span class="text-1 text-muted d-block">22 Jul 2021</span></a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Updates to our privacy policy. Please read.<span class="text-1 text-muted d-block">04 March 2021</span></a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update about Payyed fees<span class="text-1 text-muted d-block">18 Feb 2021</span></a></li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item text-center text-primary px-0" href="notifications.html">See all Notifications</a></li>
                </ul>
              </li>
              <li class="dropdown profile ms-2"> <a class="px-0 dropdown-toggle" href="#"><img class="rounded-circle" src="<?=URLROOT?>/assets/images/profile-thumb-sm.jpg" alt=""></a>
                <ul class="dropdown-menu">
                  <li class="text-center text-3 py-2">Hi, <?=$data['user']->fullname?></li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item" href="settings-profile.html"><i class="fas fa-user"></i>My Profile</a></li>
                  <li><a class="dropdown-item" href="settings-security.html"><i class="fas fa-shield-alt"></i>Security</a></li>
                  <li><a class="dropdown-item" href="settings-payment-methods.html"><i class="fas fa-credit-card"></i>Payment Methods</a></li>
                  
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item" href="<?=URLROOT?>/users/logout"><i class="fas fa-sign-out-alt"></i>Sign Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- My Profile end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <div class="row"> 
        
      <!-- Left Panel
        ============================================= -->
        <aside class="col-lg-3"> 
          
          <!-- Profile Details
          =============================== -->
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="<?=URLROOT?>/assets/images/profile-thumb.jpg" alt="">
              <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                <input type="file" class="custom-file-input" id="customFile">
              </div>
            </div>
            <br><span class="text-3 fw-500 mb-2">Hello, <?=$data['user']->fullname?> </span> <br> <span class="small bold">Status: <a href="#" class="btn btn-info text-white btn-sm"> Active</a></span><br><span class="small bold">Account Type:<?=$data['user']->type?></span></p>
            <p class="mb-2"><a href="<?=URLROOT?>/pages/profile" class="btn btn-primary btn-sm">Account Details </a></p>
          </div>
          <!-- Profile Details End --> 
          
          <!-- Available Balance
          =============================== -->
          
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
            <h3 class="text-9 fw-400">$<?=$data['user']->balance?></h3>
            <p class="text-4 mb-2 text-muted opacity-8">Available Balance</p>
            <hr class="mx-n3">
            <div class="d-flex"><a href="<?=URLROOT?>/transfers/fund" class="btn-link me-auto">Fund Transfer</a> <a href="<?=URLROOT?>/transfers" class="btn-link ms-auto">View Transfers</a></div>
          </div>
          
          <!-- Available Balance End -->           

          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fas fa-credit-card"></i></div>
              <p class="text-4 mb-2 text-muted opacity-8">Cards</p>
              <hr class="mx-n3">
              <div class="d-flex"><a href="<?=URLROOT?>/cards/request" class="btn-link me-auto">Enroll for Card</a> <a href="<?=URLROOT?>/cards" class="btn-link ms-auto">View Cards</a>
            </div>
          </div>

          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-university"></i></div>
              <p class="text-4 mb-2 text-muted opacity-10">Loans</p>
              <hr class="mx-n3">
              <div class="d-flex"><a href="<?=URLROOT?>/loans/request" class="btn-link me-auto">Apply for Loan</a> <a href="<?=URLROOT?>/loans" class="btn-link ms-auto">View Loans</a>
            </div>
          </div>

        </aside>
        <!-- Left Panel End -->

        <!-- Middle Panel
        ============================================= -->
        <div class="col-lg-9"> 
          
          <!-- Profile Completeness
          =============================== -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
              <p class="text-center text-primary text-4"><b>Change password</b></p>
            <form id="loginForm" action="<?=URLROOT?>/users/update/<?=$data['user']->id?>" method="post">
                <div class="input-group">
                <input type="password" class="form-control <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){echo (!empty($data['password_err'])) ? 'is-invalid' : '';} ?>" id="password" name="password" placeholder="Enter new Password">
              <span class="invalid-feedback"><?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){echo $data['password_err'];} ?></span>
                </div>
                <div class="d-grid my-4"><button class="btn btn-primary shadow-none" type="submit">Update</button></div>
            </form>
          </div>
          <!-- Profile Completeness End --> 
            
            
          </div>
          <!-- Recent Activity End --> 
        </div>
        <!-- Middle Panel End --> 
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg d-lg-flex align-items-center">
          <ul class="nav justify-content-center justify-content-lg-start text-3">
            <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
          </ul>
        </div>
        <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
          <ul class="social-icons justify-content-center">
            <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-google"><a data-bs-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
            <li class="social-icons-youtube"><a data-bs-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright pt-3 pt-lg-2 mt-2">
        <div class="row">
          <div class="col-lg">
            <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a href="#">Payyed</a>. All Rights Reserved.</p>
          </div>
          <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
            <ul class="nav justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<script src="<?= URLROOT?>/assets/vendor/jquery/jquery.min.js"></script> 
<script src="<?= URLROOT?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Style Switcher --> 
<script src="<?= URLROOT?>/assets/js/switcher.min.js"></script> 
<script src="<?= URLROOT?>/assets/js/theme.js"></script>
</body>
</html>