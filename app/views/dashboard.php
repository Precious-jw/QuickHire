<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>QuickHire | Hire and Get Hired</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= URLROOT?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= URLROOT?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= URLROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= URLROOT?>/assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <div class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?= URLROOT?>"><h2>QUICKHIRE</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.html">View Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.html">Post a Job</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>

              <?php if(isset($_SESSION['user_id'])) : ?>

                <li class="nav-item dropdown active">
                <a class="dropdown-toggle nav-link mt-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?= URLROOT?>/assets/images/map.jpg" class="rounded-circle" style="width: 5vh; height: 5vh;" alt="profile picture">  <b><?= $_SESSION['user_name'] ?></b></a>
                
                  <div class="dropdown-menu p-0 align-center">
                      <a class="dropdown-item py-2 active" href="<?= URLROOT?>/pages/dashboard">Dashboard</a>
                      <a class="dropdown-item py-2" href="<?= URLROOT?>/users/profile">View Profile</a>
                      <a class="dropdown-item py-2" href="<?= URLROOT?>/users/logout">Logout</a>
                  </div>
                </li>
                
              <?php else : ?>

                <li class="nav-item">
                  <a class="nav-link" href="<?= URLROOT?>/users/apply">Sign Up</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= URLROOT?>/users/login">Login</a>
                </li>

              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="row m-2 p-2">

      <div class="col-md-12 col-sm-12">
      
        <!-- Page Content -->
        <!-- Banner Starts Here -->
        <div class="header-text row">
          <p class="landing-text p-2 mb-3 text-info">Hello, <b><?= $_SESSION['user_name'] ?></b>. Please complete setting up your profile in order to post or apply for jobs.</p>
          <div class="col-md-9 col-sm-12 border border-secondary rounded">
            
            <div class="container py-3 text-center">
              <p class="my-2">Profile setup progress</p>

              <div class="row justify-content-center">
                <div class="col-md-3 step1 border border-success rounded p-2"><b>Step 1: Create your account and verify your email</b><br>
                <i class="fa fa-check-circle text-success mt-3" style="font-size: 50px;"></i>               
                </div> &nbsp;
                
                <?php if(isset($_SESSION['user_info'])) : ?>

                <div class="col-md-3 step2 border border-success rounded p-2">
                  <b>Step 2: Update your Personal Information</b>  <br>
                <i class="fa fa-check-circle text-success mt-5" style="font-size: 50px;"></i>    
                </div> &nbsp;

                <?php else : ?>

                  <div class="col-md-3 step2 border border-secondary rounded p-2">
                    <b>Step 2: Update your Personal Information</b>  <br><br>
                    <a class="btn btn-primary" href="<?= URLROOT?>/users/profile">Update</a>
                  </div> &nbsp;

                <?php endif; ?>

                <div class="col-md-3 step3 border border-secondary rounded p-2">
                  <b>Step 3: Submit your documents for verification</b>  <br><br> 
                  <a class="btn btn-primary" href="users/update-profile">Submit Documents</a>
                </div> &nbsp;

              </div>              
            </div>
            
          </div> <br>

          <div class="ads container col-md-2 col-sm-12 bg-secondary text-center pt-3 w-5" style="position: sticky; top: 12vh; z-index: 9999; height: 50vh;">
            Ads go here
          </div>
          

          <div class="services col-md-9">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-heading">
                    <h2>Featured <em>Jobs</em></h2>
                    <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="service-item">
                    <img src="<?= URLROOT?>/assets/images/product-1-720x480.jpg" alt="">
                    <div class="down-content">
                      <h4>Lorem ipsum dolor sit amet</h4>
                      <div style="margin-bottom:10px;">
                        <span> <sup>$</sup>70 000  </span>
                      </div>

                      <p>Medical  /  Health Jobs</p>

                      <a href="property-details.html" class="filled-button">View More</a>
                    </div>
                  </div>

                  <br>
                </div>
                <div class="col-md-4">
                  <div class="service-item">
                    <img src="<?= URLROOT?>/assets/images/product-2-720x480.jpg" alt="">
                    <div class="down-content">
                      <h4>Lorem ipsum dolor sit amet</h4>
                      <div style="margin-bottom:10px;">
                        <span> <sup>$</sup>70 000  </span>
                      </div>

                      <p>Medical  /  Health Jobs</p>

                      <a href="property-details.html" class="filled-button">View More</a>
                    </div>
                  </div>

                  <br>
                </div>
                <div class="col-md-4">
                  <div class="service-item">
                    <img src="<?= URLROOT?>/assets/images/product-3-720x480.jpg" alt="">
                    <div class="down-content">
                      <h4>Lorem ipsum dolor sit amet</h4>
                      <div style="margin-bottom:10px;">
                        <span> <sup>$</sup>70 000  </span>
                      </div>

                      <p>Medical  /  Health Jobs</p>

                      <a href="property-details.html" class="filled-button">View More</a>
                    </div>
                  </div>

                  <br>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Banner Ends Here -->

        <div id="contact"></div>

        <div class="callback-form">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-heading">
                  <h2>Request a <em>call back</em></h2>
                  <span>Etiam suscipit ante a odio consequat</span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="contact-form">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-lg-4 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-4 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-4 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="border-button">Send Message</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <br>
            <br>
          </div>
        </div>

    
      </div>

    </div>

    
    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Job Agency Website</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright ?? 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?= URLROOT?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= URLROOT?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?= URLROOT?>/assets/js/custom.js"></script>
    <script src="<?= URLROOT?>/assets/js/owl.js"></script>
    <script src="<?= URLROOT?>/assets/js/accordions.js"></script>

    <script src="<?=URLROOT?>/bundles/chartist.bundle.js"></script>
  <script src="<?=URLROOT?>/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
  <script src="<?=URLROOT?>/bundles/flotscripts.bundle.js"></script>
  <!-- flot charts Plugin Js -->
  <script src="<?=URLROOT?>/assets/vendor/flot-charts/jquery.flot.selection.js"></script>
  <script src="<?=URLROOT?>/bundles/mainscripts.bundle.js"></script>

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