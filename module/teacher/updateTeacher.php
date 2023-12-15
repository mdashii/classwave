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
    


    
</head>
<body>
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
                    <div class="text-center">
                        <h2>Update your profile!!!</h2>
                        <form action="#" method="post" onsubmit="return newTeacherValidation();">
                        <div class="table-responsive">
                            <table class="table table-bordered " cellpadding="6" id="updateTeacherData">
                                <?php include('searchForUpdateTeacher.php'); ?>
                            </table>
                        </div>
                        </form>
                    </div>
                </div>
                
            
    		</main>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "JS/searchForUpdateTeacher.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $teaId = $_POST['id'];
    $teaName = $_POST['name'];
    $teaPassword = $_POST['password'];
    $teaPhone = $_POST['phone'];
    $teaEmail = $_POST['email'];
    $teagender = $_POST['gender'];
    $teaDOB = $_POST['dob'];
    $teaAddress = $_POST['address'];
    $sql = "UPDATE teachers SET id='$teaId', name='$teaName', password='$teaPassword', phone='$teaPhone', email='$teaEmail', sex='$teagender', dob='$teaDOB',address='$teaAddress' WHERE id='$teaId'";
	$sql1="UPDATE users SET password='$teaPassword' where userid='$teaId'";
	
    $success = mysql_query( $sql,$link );
	$success1=mysql_query( $sql1,$link );
    if(!$success||!$success1) {
        die('Could not Update data: '.mysql_error());
    }
    // echo "Update data successfully\n";
	echo '<script>alert("Update data successfully")</script>'; 
}
?>
