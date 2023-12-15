
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
				
        <form action="#" method="post">
            <div class="text-center">
                <table class="table table-bordered">
                    <tr>
                        <th>Report ID</th>
                        <th>Course ID</th>
                        <th>Student ID</th>
                        <th>Message</th>
                        <th>Checkbox</th>
                    </tr>
                    <?php
                    $conn = mysql_connect('localhost', 'root', '');
                    if (!$conn) {
                        die('Error connecting');
                    }
                    mysql_select_db('schoolmanagementsystemdb', $conn);

                    $sql = "SELECT reportid, courseid, studentid, message FROM report where teacherid='$check'";
                    $res = mysql_query($sql);

                    while ($rn = mysql_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>$rn[0]</td>";
                        echo "<td>$rn[1]</td>";
                        echo "<td>$rn[2]</td>";
                        echo "<td>$rn[3]</td>";
                        echo "<td><input type='checkbox' name='attendance[]' value=\"$rn[0]\" /></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <input class="btn btn-danger" type="submit" value="Delete" name="submit">
				<button class="btn btn-primary"><a href="report.php" class="nav-link">Report</a></button>
            </div>
        </form>

        <?php
        if (!empty($_POST['submit'])) {
            $atten = $_REQUEST['attendance'];
            foreach ($atten as $a) {
                $sql = "DELETE FROM report WHERE reportid='$a'";
                $s = mysql_query($sql);
            }

            if (!$s) {
                echo "Failed!!!";
            } else {
                echo "Succeed";
            }
        }
        ?>
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

