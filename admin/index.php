<!-- kaj kore
-->
<?php
    session_start();
    if(isset($_SESSION['admin'])){
      header('location:home.php');
    }
?>
<head>
    <title>user login and registration</title>
  <link rel="stylesheet" type="text/css" href="styll.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<?php include 'includes/header.php'; ?>
<body class="st">
<div class="login-box">
    <div class="row">
      <div class="col-md-10 login-left">
            <h1 style="text-align: center;color:green">AUTOMATED LIBRARY</h1>
        <h2 style="text-align:center"> Login here</h2>
      <form action="login.php" method="POST">
         <div class="form-group">
          <label>User Id</label>
            <input type="text" class="form-control" name="username" placeholder="" required autofocus>
        </div>
            <div class="form-group">
          <label>password</label>
            <input type="password" class="form-control" name="password" placeholder="" required>
        </div>

          <div class="row">
          <div class="col-xs-4">
                 <button type="submit" class="btn btn-success" name="login" style="width:295px"> Login </button>
          </div>
          </div>
      </form>
      <form action="//localhost/lms" method="POST">
         <div class="row">
          <div class="col-xs-4">
                 <button type="submit" class="btn btn-primary" name="home" style="width:295px"> home </button>
          </div>
          </div>
        </form>
    </div>
    </div>
    </div>
    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center mt20'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
    ?>
</div>
  
<?php include 'includes/scripts.php' ?>
</body>
</html>