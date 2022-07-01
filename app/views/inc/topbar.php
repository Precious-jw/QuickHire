<header class="main-header" >
    <!-- Logo -->

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" style="background-color: black;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
				
		  
          <!-- Messages -->
      
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= URLROOT;?>/props/user-male.png" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= URLROOT;?>/props/user-male.png" class="float-left rounded-circle" alt="User Image">

                <p>
                <?= $_SESSION['fullname'];?>
                  <small class="mb-5"><?= $_SESSION['user_name'];?></small>
                  <a href="<?= URLROOT;?>/dashboard/profile/<?=$_SESSION['user_id'];?>" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="<?= URLROOT;?>/dashboard/profile/<?=$_SESSION['user_id'];?>"><i class="ion ion-person"></i> My Profile</a>
                  </div>
             
				  <div class="col-12 text-left">
                    <a href="<?= URLROOT;?>/users/logout"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
          </li>
        </ul>
      </div>
    </nav>
  </header>