<?php
require('admin/functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System(LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>

<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>

<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<label>Book Name:</label>
					<input type="text" name="book_name" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book Author:</label>
					<input type="text" name="book_author" class="form-control" required="">
					</div>
				<div class="form-group">
					<label>Student Name:</label>
					<input type="text" name="student_name" class="form-control" value="<?php echo $_SESSION['name'];?>" required="">
				</div>
				<div class="form-group">
					<label>Student ID:</label>
					<input type="text" name="student_id" class="form-control" value="<?php echo $_SESSION['id'];?>" required="">
				</div>
				<div class="form-group">
					<label>Request Date:</label>
					<input type="text" name="request_date" class="form-control" value="<?php echo date("Y-d-m");?>" required="">
				</div>	
				
				<button class="btn btn-primary" name="request_book">Make a request</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['request_book'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$id=NULL;
	$book_name=$_POST['book_name'];
	$book_author=$_POST['book_author'];
	$student_name=$_POST['student_name'];
	$student_id=$_POST['student_id'];
	$request_date=$_POST['request_date'];
		
		$query= "INSERT INTO `request_book`(`S_No`, `book_name`, `book_author`, `student_name`, `student_id`, `date`) VALUES ('$id','$book_name','$book_author','$student_name','$student_id','$request_date')";
		$query_run = mysqli_query($connection,$query);
	}
?>