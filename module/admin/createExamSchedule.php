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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#manageStudentsMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="manageStudentMenu">
                                Manage Students
                            </a>
                            <div class="collapse" id="manageStudentsMenu">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="addStudent.php">Add Student</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="viewStudent.php">View Student</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="updateStudent.php">Update Student</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="deleteStudent.php">Delete Student</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#manageTeacherMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="manageTeacherMenu">
                                Manage Teacher
                            </a>
                            <div class="collapse" id="manageTeacherMenu">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="addTeacher.php">Add Teacher</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="viewTeacher.php">View Teacher</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="updateTeacher.php">Update Teacher</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="deleteTeacher.php">Delete Teacher</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#manageParentMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="manageParentMenu">
                                Manage Parent
                            </a>
                            <div class="collapse" id="manageParentMenu">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="addParent.php">Add Parent</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="viewParent.php">View Parent</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="updateParent.php">Update Parent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="deleteParent.php">Delete Parent</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#manageStaffMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="manageStaffMenu">
                                Manage staff
                            </a>
                            <div class="collapse" id="manageStaffMenu">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="addStaff.php">Add Staff</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="viewStaff.php">View Staff</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="updateStaff.php">Update Staff</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="deleteStaff.php">Delete Staff</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#manageCourseMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="manageCourseMenu">
                                Course
                            </a>
                            <div class="collapse" id="manageCourseMenu">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="addCourse.php">Add Course</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="viewCourse.php">View Course</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="deleteCourse.php">Update Course</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Attendance" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="Attendance">
                                Attendance
                            </a>
                            <div class="collapse" id="Attendance">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="staffAttendance.php">Staff Attendance</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="teacherAttendance.php">Teacher Attendance</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="viewAttendance.php">View Attendance</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Exam" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="Exam">
                                Exam Schedule
                            </a>
                            <div class="collapse" id="Exam">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="createExamSchedule.php">Create Exam Schedule</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="viewExamSchedule.php">View Exam Schedule</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="updateExamSchedule.php">Update Course</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Salary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="Salary">
                                Salary
                            </a>
                            <div class="collapse" id="Salary">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="updateTeacherSalary.php">Update Teacher Salary</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="updateStaffSalary.php">Update Staff Salary</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report.php">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Payment" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="Payment">
                                Payment
                            </a>
                            <div class="collapse" id="Payment">
                                <ul class="nav flex-column msm">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="addPayment.php">Add Payment</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="deletePayment.php">Delete Payment</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main col-8 ">
                
                
            <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-center">Exam Schedule List</h2>
                <form action="#" method="post">
                    <table class="table" cellpadding="6">
                        <tr>
                            <td>Exam Schedule Id:</td>
                            <td><input type="text" class="form-control" name="id" placeholder="Exam Schedule ID"></td>
                        </tr>
                        <tr>
                            <td>Exam Date:</td>
                            <td><input type="text" class="form-control" name="examDate" placeholder="Exam Date (y-m-d)"></td>
                        </tr>
                        <tr>
                            <td>Exam Time:</td>
                            <td><input type="text" class="form-control" name="examTime" placeholder="Exam Time (H:M - H:M)"></td>
                        </tr>
                        <tr>
                            <td>Course ID:</td>
                            <td><input type="text" class="form-control" name="courseId" placeholder="Course ID"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="btn btn-primary" name="submit" value="Submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

                
            
            </main>
        </div>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <script src="JS/login_logout.js"></script>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $examDate = $_POST['examDate'];
    $examTime = $_POST['examTime'];
    $courseId = $_POST['courseId'];
    $sql = "INSERT INTO examschedule VALUES('$id','$examDate','$examTime','$courseId')";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    echo "Entered data successfully\n";
}
?>
