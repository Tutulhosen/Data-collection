<?php 
include_once "autoload.php";
?>

<?php 
$connector= new mysqli('localhost', 'root', '', 'profile');



?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>SignUp</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<?php 

if (isset($_POST['add'])) {
	$name= $_POST['name'];
	$class= $_POST['class'];
	$sector= $_POST['sector'];
	$subject= $_POST['subject'];
	if (empty($name) || empty($class)) {
		$mgs= validation('All fields are require!');
	} else {
		$msql= "INSERT INTO students (name, class, sector, subject) VALUES ('$name', '$class', '$sector', '$subject')";
		$connector-> query($msql);
		 

		$mgs=validation('Successfully Add', 'success');
	}
	
}


?>

			<!--form area-->

			<div class="wrap shadow">
				<div class="card">
					<div class="card-body">
						<h2>Student info</h2>
						<?php 
						if (isset($mgs)) {
							echo $mgs;
						}
						
						?>

						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Name</label>
								<input name="name" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">class</label>
								<input name="class" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">sector</label>
								<input name="sector" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">subject</label>
								<input name="subject" class="form-control" type="text">
							</div>

							<div class="form-group">
								
								<input name="add" class="btn btn-md btn-primary" type="submit" value="Add">

							</div>

						</form>
						
					</div>
					<div class="card-footer">
						<a href="index.php">back</a>
					</div>
				</div>
				
			</div>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>