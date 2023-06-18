<?php
require('notification.php');
// require('admin/functions.php');
	session_start();
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","","lms");
		//$db = mysqli_select_db($connection,"lms");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
	}
	return($user_issue_book_count);
}
?>
<?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
	$query = "select 
	request_book.book_name,request_book.book_author,request_book.Status ,request_book.date
	from request_book where student_id = $_SESSION[id]";
	?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <meta http-equiv="refresh" content="60">
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
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
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
	</nav><br>
	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-2"></div>                                       
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Books:</div>
				<div class="card-body">
					<p class="card-text">No. of Issued Books: <?php echo get_user_issue_book_count();?> </p>
					<a href="view_issued_book.php" class="btn btn-danger" target="_blank">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
				<div class="card bg-light" style="width: 300px">
				<div class="card-header">Request Books:</div>
				<div class="card-body">
					<p class="card-text">Make a request for a book: </p>
					<a href="request_book.php" class="btn btn-danger" target="_blank">Make a request</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
				<div class="card bg-light" style="width: 300px">
				<div class="card-header">Status Of Books Request:</div>
				<div class="card-body">
					<p class="card-text">Request accepted/pending/cancel: </p>
					<a href="book_request_status.php" class="btn btn-danger" target="_blank">View book request status</a>
				</div>
			</div>
		</div>

		<div class="col-md-2"></div>
	</div>
				
				<?php
				$coun = 0;
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						
						$Status = $row['Status'];
						if ($Status=="Accepted") {
							$coun = $coun + 1;
						}}
				?>
						
	<script>
	var up_count = document.querySelector(".Notification_bell");
	up_count.setAttribute("current_count", <?php echo $coun;?>)
</script>
</body>
</html>




