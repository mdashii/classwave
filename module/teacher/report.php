<?php
include_once('main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    

	<style>
		.form-select, .form-control{
			width: 300px;
            margin: 0 auto; 
            text-align: center;
		}
		.form-label{
			font-weight : bold ;
		}
	</style>
    
</head>
<body onload="ajaxRequestToGetMyCourse();">
    <nav class="navbar navbar-expand-lg top-nav sticky-top">
        <div class="container-fluid">
            <div class="brand-logo"> 
                <img src="My_college.jpg" alt="Logo"  class="logo rounded-pill">
            </div>
            <ul class="nav ml-auto">
			    <button type="button" class="btn btn-light btn-sm">
                    <a class="nav-link" href="logout.php">Logout</a>
				</button>
            </ul>
        </div>
    </nav>
	<div class="container-fluid">
		<div class="row">
			<nav id="sidebar " class="col-md-3 col-lg-2 col-4  sidebar ">
				<div class="position-sticky">
					<ul class="navbar-nav flex-column menu">
						<li class="nav-item" >
                            <a class="nav-link" href="updateTeacher.php">Update Profile</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="viewProfile.php">View Profile</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="course.php">Students Grade</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
						<li class="nav-item" >
                             <a class="nav-link" href="attendance.php" >Attendance</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="exam.php">Exam Schedule</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="salary.php">Salary</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="report.php">Report</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="searchStudent.php">Search Portal</a>
                        </li>
					</ul>
				</div>
			</nav>
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main col-8 ">
                
			<div class="container mt-5">
					<form action="reportupdate.php" method="POST">
						<div class="text-center">
							<label for="myclass" class="form-label">Select Class:</label>
							<select id="myclass" name="myclass" onchange="ajaxRequestToGetMyCourse();" class="form-select">
								<?php
								$classget = "SELECT * FROM class WHERE id IN (SELECT DISTINCT classid FROM course WHERE teacherid = '$check')";
								$res = mysql_query($classget);
								while ($cln = mysql_fetch_array($res)) {
									echo '<option value="' . $cln['id'] . '">' . $cln['name'] . '</option>';
								}
								?>
							</select>
							
							<label for="mycourse" class="form-label">Select Course:</label>
							<select id="mycourse" name="mycourse" onchange="ajaxRequestToGetCourseStudent();" class="form-select">
								<!-- Options for courses will be populated via AJAX -->
							</select>
							
							<label for="mystudent" class="form-label">Select Student:</label>
							<select id="mystudent" name="mystudent" class="form-select">
								<!-- Options for students will be populated via AJAX -->
							</select>
							
							<label for="report" class="form-label">Report:</label>
							<textarea name="report" class="form-control"></textarea>
							<br />
							<input type="submit" class="btn btn-primary" value="Report Submit" name="submit">
							<li class="btn btn-danger"><a href="deleterep.php" class="nav-link">Delete Report</a></li>
						</div>
					</form>
				</div>
            
    		</main>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	</body>

</html>