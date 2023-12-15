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
		.table{
			width: 300px;
            margin: 0 auto; 
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
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="modify.php" >Modify My Information</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="salary.php">My Salary</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="attendance.php">My Attendance</a>
				</li>
				<li class="brand-logo">
					<a class="navbar-brand" href="index.php"><img src="logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
				</li>
			</ul>
			
		</div>
    </nav>
	<div class="container mt-5">
			<div class="text-center p-3">
				<p>Select Attendance that you are present:</p>
				<div>
					<label for="presentThisMonth" class="mr-2">Current Month:</label>
					<input type="radio" id="presentThisMonth" name="present" value="thismonth" checked="checked" onclick="ajaxRequestToGetAttendancePresentThisMonth();" />
				</div>
				<div>
					<label for="presentAll" class="mr-2">ALL:</label>
					<input type="radio" id="presentAll" name="present" value="all" onclick="ajaxRequestToGetAttendancePresentAll();" />
				</div>
			</div>
			
			<div class="text-center">
				<table id="mypresent" class="table table-bordered"></table>
			</div>
			
			<div class="text-center  p-3">
				<p>Select Attendance that you are absent:</p>
				<div>
					<label for="absentThisMonth" class="mr-2">Current Month:</label>
					<input type="radio" id="absentThisMonth" name="absent" value="thismonth" checked="checked" onclick="ajaxRequestToGetAttendanceAbsentThisMonth();" />
				</div>
				<div>
					<label for="absentAll" class="mr-2">ALL:</label>
					<input type="radio" id="absentAll" name="absent" value="all" onclick="ajaxRequestToGetAttendanceAbsentAll();" />
				</div>
			</div>
			
			<div class="text-center">
				<table id="myabsent" class="table table-bordered"></table>
			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="jquery-1.12.3.js"></script>
		<script type="text/javascript" src="staffAttendance.js"></script>
		<script src="JS/login_logout.js"></script>

</body>
		
</html>


			  


							
							
