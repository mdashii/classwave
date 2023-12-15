<?php
include_once('main.php');

$st=mysql_query("SELECT password  FROM students WHERE id='$check' ");
$stinfo=mysql_fetch_array($st);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
	<style>
		
		.form-control{
			width : 300px;
			margin-left: 390px;
		}
	</style>
</head>
    <body>
		
	<nav class="navbar navbar-expand-lg top-nav sticky-top">
			<div class="brand-logo"> 
                <img src="My_college.jpg" alt="Logo"  class="logo rounded-pill">
            </div>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="modify.php">Change Password</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="course.php">My Course And Result</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="exam.php">My Exam Schedule</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="attendance.php">My Attendance</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
			</ul>
    </nav>
	<div class="container mt-5 text-center">
        <h1>Change Password</h1>
        <form onsubmit="return modifyValidate();" action="modifysave.php" method="post">
			
				<div class="justify-content-center">
					<form class="col-12 col-md-4" onsubmit="return modifyValidate();" action="modifysave.php" method="post">
						<div class="form-group">
							<label for="password">New Password:</label>
							<input type="text" class="form-control" id="password" name="password" value="<?php echo $stinfo['password']; ?>">
						</div>
						<button type="submit" class="btn btn-primary">Change Password</button>
					</form>
				</div>
			
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="JS/login_logout.js"></script>
    <script src = "JS/modifyValidate.js"></script>
</body>
</html>

