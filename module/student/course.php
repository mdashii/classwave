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
    <body onload="ajaxRequestToGetCourse();">
		
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
				<div class="text-center">
					<h1>Select Class:</h1>
					<select class="form-select" id="myclass" name="myclass" onchange="ajaxRequestToGetCourse();">
						<?php
						$classget = "SELECT name FROM class WHERE id IN (SELECT DISTINCT classid FROM course WHERE studentid='$check')";
						$res = mysql_query($classget);
						while ($cln = mysql_fetch_array($res)) {
							echo '<option value="', $cln['name'], '">', $cln['name'], '</option>';
						}
						?>
					</select>
					<h1>Select Course:</h1>
					<select class="form-select" id="mycourse" onchange="ajaxRequestToGetCourseInfo();" name="mycourse"></select>
					<h4>Course Information:</h4>
					<hr />
					<label id="mycourseteacher"></label><br />
					<div class="table-responsive" style="max-width: 400px; margin: 0 auto; margin-left:420px">
						<table id="mycourseinfo" class="table table-bordered">
						</table>
					</div>
					<hr />
				</div>
			</div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>

		</body>
</html>

			