<?php include 'includes/session.php'; ?>
<?php
	$where = '';
	if(isset($_GET['category'])){
		$catid = $_GET['category'];
		$where = 'WHERE category_id = '.$catid;
	}
?>
<head>
    <title>Automated library</title>
  <link rel="stylesheet" type="text/css" href="styll.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<?php include 'includes/header.php'; ?>
<body class="st">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
  
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>