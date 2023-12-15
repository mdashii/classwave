<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
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
        .form-control{
			width: 300px;
            margin: 0 auto; 
            text-align: center;
		}
    </style>

    
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
            <form action="#" method="GET">
                <div class="mb-3">
                    <label for="key" class="form-label"><b>Student Id</b></label>
                    <input type="text" name="key" class="form-control" placeholder="st-XXX-X">
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table table-bordered table-striped table-responsive text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Admission Date</th>
                    <th>Address</th>
                    <th>Parent ID</th>
                    <th>Class ID</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($_GET['submit'])) {
                    $searchKey = $_GET['key'];
                    $images_dir = "../images";
                    $sql = "SELECT * FROM students WHERE id LIKE '$searchKey%' OR name LIKE '$searchKey%' OR classid = '$searchKey';";
                    $res = mysql_query($sql);
                    while ($row = mysql_fetch_array($res)) {
                        $picname = $row['id'];
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['sex'] . "</td>";
                        echo "<td>" . $row['dob'] . "</td>";
                        echo "<td>" . $row['addmissiondate'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['parentid'] . "</td>";
                        echo "<td>" . $row['classid'] . "</td>";
                        echo "<td><img src='" . $images_dir . "/" . $picname . ".jpg' alt='$picname' width='150' height='150'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
            
    		</main>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>

<html>


