<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');

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
    <h1 class="text-center">Teacher Information</h1>
    <div class="container mt-5">
        <div class="mx-auto" style="max-width: 400px;">
            <?php
            $sql = "SELECT * FROM teachers WHERE id='$check';";
            $res = mysql_query($sql);

            while ($row = mysql_fetch_array($res)) {
                echo '<div class="card">';
                echo '<img src="../images/' . $check . '.jpg" class="card-img-top" alt="' . $check . ' photo">';
                echo '<div class="card-body">';
                echo '<ul class="list-group list-group-flush">';
                echo '<li class="list-group-item"><strong>Teacher ID:</strong> ' . $row['id'] . '</li>';
                echo '<li class="list-group-item"><strong>Teacher Name:</strong> ' . $row['name'] . '</li>';
                echo '<li class="list-group-item"><strong>Teacher Phone:</strong> ' . $row['phone'] . '</li>';
                echo '<li class="list-group-item"><strong>Teacher Email:</strong> ' . $row['email'] . '</li>';
                echo '<li class="list-group-item"><strong>Teacher Gender:</strong> ' . $row['sex'] . '</li>';
                echo '<li class="list-group-item"><strong>Teacher DOB:</strong> ' . $row['dob'] . '</li>';
                echo '<li class="list-group-item"><strong>Teacher Hire Date:</strong> ' . $row['hiredate'] . '</li>';
                echo '<li class="list-group-item"><strong>Teacher Salary:</strong> ' . $row['salary'] . '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>


                
            
    		</main>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>

