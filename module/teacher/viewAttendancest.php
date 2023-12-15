<?php
include('main.php');
?>
<?php
include('main.php');


?>
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
		.table, .form-select{
			width: 300px;
            margin: 0 auto;
			margin-top : 10px ; 
            text-align: center;
		}
		p{
			font-weight: bold;
			margin-top: 4px;
			text-decoration: underline;
		}
		
	</style>


    
</head>
<body onload="ajaxRequestToGetAttendancePresentThisMonth();">
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
                
					<nav class="nav nav-pills nav-justified">
						<a class="nav-link nali"  href="updateAttendence.php">Update Attendence</a>
						<a class="nav-link nali" href="deleteatt.php">Delete Attendende</a>
						<a class="nav-link nali" href="viewAttendance.php">view my Attendende</a>
						<a class="nav-link nali" href="viewAttendancest.php">view students Attendende</a>
					</nav>
					<div class="container-fluid">
					<div class="container mt-5">
							<div class="text-center" >
								<label for="mystudent" class="form-label">Select Student:</label>
								<select id="mystudent" name="mystudent" onchange="ajaxRequestToGetAttendancePresentThisMonth();" class="form-select">
									<?php
									$sql = "SELECT DISTINCT(students.id), students.name FROM students INNER JOIN course ON students.classid = course.classid AND course.teacherid = '$check'";
									$res = mysql_query($sql);
									while ($cln = mysql_fetch_array($res)) {
										echo '<option value="' . $cln['id'] . '">' . $cln['name'] . '</option>';
									}
									?>
								</select>
								<div class="mt-3">
									<label class="form-check-label"><b>Select Month:</b></label>
									<div class="form-check form-check-inline">
										<input type="radio" onclick="ajaxRequestToGetAttendancePresentThisMonth();" value="thismonth" id="present" name="present" checked="checked" class="form-check-input">
										<label class="form-check-label" for="present">Current Month</label>
									</div>
									<div class="form-check form-check-inline">
										<input type="radio" onclick="ajaxRequestToGetAttendancePresentAll();" value="all" id="present" name="present" class="form-check-input">
										<label class="form-check-label" for="present">ALL</label>
									</div>
								</div>
							</div>
							
							<div class="text-center">
								<table id="mypresent" class="table table-bordered">
									<!-- Table content for present attendance goes here -->
								</table>
							</div>
							
							<div class="text-center">
								<label class="form-check-label"><b>Select Month:</b></label>
								<div class="form-check form-check-inline">
									<input type="radio" onclick="ajaxRequestToGetAttendanceAbsentThisMonth();" value="thismonth" id="absent" name="absent" checked="checked" class="form-check-input">
									<label class="form-check-label" for="absent">Current Month</label>
								</div>
								<div class="form-check form-check-inline">
									<input type="radio" onclick="ajaxRequestToGetAttendanceAbsentAll();" value="all" id="absent" name="absent" class="form-check-input">
									<label class="form-check-label" for="absent">ALL</label>
								</div>
							</div>
							
							<div class="text-center">
								<table id="myabsent" class="table table-bordered">
									<!-- Table content for absent attendance goes here -->
								</table>
							</div>
						</div>
					</div>           
    		</main>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-1.12.3.js"></script>
	<script type="text/javascript" src="stdatt.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>


