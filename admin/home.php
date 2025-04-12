<?php include 'includes/session.php'; ?>
<?php 
  include 'includes/timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <style>
        .banner
        {
          position: relative; width:90%;margin: 0 auto ;
        }
        .banner img{width:100%;}
        .heading {color: black;position:absolute; top:20%; left:20%;text-align: center;}
        .heading1 {color: black;position:absolute; top:20%; left:30%;text-align: center;}
        .heading2 {color: black;position:absolute; top:20%; left:40%;text-align: center;}
        .heading3 {color: black;position:absolute; top:20%; left:50%;text-align: center;}
      </style>
      <!-- Small boxes (Stat box) -->
    <div class="container"> 
        <div class="row">
        <div > 
            <img src="front.jpg" width="1050px" height="500px" alt="Snow" position="relative">
            
          </div>
        </div>
    </div>
      <div class="row">
        <div class="heading">
        <div>
          <!-- small box -->
          <div class="small-box">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);
                echo "<h3>".$query->num_rows."</h3>";
              ?>
              <p>Total Books</p>
            </div>
            <a href="book.php" class="small-box-footer">Book List</a>
          </div>
        </div>
      </div>
        <!-- ./col -->
        <div class="heading1">
        <div>
          <!-- small box -->
          <div class="small-box">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM students";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Total Students</p>
            </div>
            <a href="student.php" class="small-box-footer">Student List </a>
          </div>
        </div>
      </div>
        <!-- ./col -->
        <div class="heading2">
        <div >
          <!-- small box -->
          <div class="small-box">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM returns WHERE date_return = '$today'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
             
              <p>Returned Book</p>
            </div>
            <a href="return.php" class="small-box-footer">Returned List</a>
          </div>
        </div>
      </div>
      <div class="heading3"> 
        <!-- ./col -->
        <div >
          <!-- small box -->
          <div class="small-box">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM borrow WHERE date_borrow = '$today'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Borrowed Today</p>
            </div>
            <a href="borrow.php" class="small-box-footer">Borrowed List</a>
          </div>
        </div>
      </div>
        <!-- ./col -->
      </div>
      
      </section>
      <!-- right col -->
    </div>

</div>

<!-- End Chart Data -->
<?php include 'includes/scripts.php'; ?>


</body>
</html>
