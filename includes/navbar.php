<!-- 
  current
-->
<header class="main-header">
    <div class="login-box">
      <div class="row">
        <div class="col-md-10 login-left">
        <h1 style="color:green;text-align: center;margin-top: 50px"> AUTOMATED LIBRARY</h1>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>

      <!-- Collect the nav links, forms, and other content for toggling -->
  
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div style="text-align:center">
        <h1 >
          <?php
            if(isset($_SESSION['student'])){
              echo "
                <li class='user user-menu'>
                  <a href='#'>
                    <span class='hidden-xs'>".$student['firstname'].' '.$student['lastname']."</span>
                  </a>
                </li>
                <li><a href='logout.php'><i class='fa fa-sign-out'></i> LOGOUT</a></li>
              ";
            }
            else{
              print "
              <h2>
                <a href='#login' data-toggle='modal' style='color:black'>Student</a>
              </h2>
              <h2>
                <a href='admin/index.php' style='color:black'>Admin</a>
              </h2>
              ";
            } 
          ?>
        </h1>
      </div>
    </div>
  </div>
</div>
      <!-- /.navbar-custom-menu -->
    <!-- /.container-fluid -->
</header>
<?php include 'includes/login_modal.php'; ?>