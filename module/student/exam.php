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
	<body  onload="ajaxRequestToGetCourseCurrentExamSchedule();">
		
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
				<div class="text-center" >
					<h1>Select Running Course Exam Schedule:</h1>
					<select class="form-select" id="curcourse" onchange="ajaxRequestToGetCourseCurrentExamSchedule();" name="curcourse">
						<?php
						$classget = "SELECT DISTINCT id, name FROM course WHERE classid IN (SELECT DISTINCT classid FROM students WHERE id='$check') AND studentid='$check'";
						$res = mysql_query($classget);
						while ($clnn = mysql_fetch_array($res)) {
							echo '<option value="', $clnn['id'], '">', $clnn['name'], '</option>';
						}
						?>
					</select>
				</div>
				<hr/>
				<div class="text-center">
					<table id="mycourseexamschedule" class="table table-bordered">
					</table>
				</div>
			</div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
										
							
		</body>
</html>


