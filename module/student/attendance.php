<?php
include_once('main.php');

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
		
	</style>
</head>
	<body  onload="ajaxRequestToGetAttendancePresentThisMonth();">
		
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
			<div class="container mt-5">
			<div class="text-center ">
					<h5>Select Attendance that you are present: Current Month:</h5>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" id="present-this-month" name="present" value="thismonth" checked>
						<label class="form-check-label" for="present-this-month">This Month</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" id="present-all" name="present" value="all">
						<label class="form-check-label" for="present-all">ALL</label>
					</div>
				</div>

				<div class="text-center">
					<table id="mypresent" class="table table-bordered"></table>
				</div>

				<div class="text-center ">
					<h5>Select Attendance that you are absent: Current Month:</h5>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" id="absent-this-month" name="absent" value="thismonth" checked>
						<label class="form-check-label" for="absent-this-month">This Month</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" id="absent-all" name="absent" value="all">
						<label class="form-check-label" for="absent-all">ALL</label>
					</div>
				</div>

				<div class="text-center">
					<table id="myabsent" class="table table-bordered"></table>
			</div>
			</div>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentAttendance.js"></script>
			<script src = "JS/login_logout.js"></script>
										
							
		</body>
</html>





			