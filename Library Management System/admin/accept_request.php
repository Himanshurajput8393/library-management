


	<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "update request_book set status = 'Accepted' where S_No = $_GET[S_No]";
		$query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Request Accepted...");
	window.location.href = "requested_book.php";
</script>