<aside class="main-sidebar" style="background-color: black;">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="uBYTELIGHT">
			 <a href="<?=URLROOT;?>/dashboard">
			  <!-- BYTELIGHT for regular state and mobile devices -->
		 <img width="70%" src="<?=URLROOT;?>/assets/img/BYTELIGHT.png" alt="BYTELIGHT" class="dark-BYTELIGHT ">
			</a>
		</div>
        <div class="image">
          <img src="<?= URLROOT;?>/props/user-male.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p><?= $_SESSION['fullname'];?></p>
		
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree" >
		<li class="nav-devider"></li>
        <li class="active" style="background-color: black;">
          <a href="<?=URLROOT;?>/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active">
          <a href="<?=URLROOT;?>/dashboard/depositStart">
            <i class="fa fa-money"></i> <span>Deposit</span>
          </a>
        </li>
        <li class="active">
          <a href="<?=URLROOT;?>/dashboard/withdraw">
            <i class="fa fa-bank"></i> <span>Withdraw</span>
          </a>
        </li>
        
        <style>
          .active{
            background-color: black;
          }
        </style>
      </ul>
    </section>
  </aside>