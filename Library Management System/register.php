<?php
	$connection = mysqli_connect("localhost","root","","lms");
	//$db = mysqli_select_db($connection,"lms");
	$id=NULL;
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$Mobile=$_POST['mobile'];
	$Address=$_POST['address'];
	$query = "INSERT INTO `users`(`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES ('$id','$Name','$Email','$Password','$Mobile','$Address')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>