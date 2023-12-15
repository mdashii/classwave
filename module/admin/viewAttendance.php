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
<body onload="ajaxRequestToGetAttendanceTeacherPresentThisMonth();">
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
        <div class="text-center" style="background-color: orange;">
            <h2>Select your Teacher:</h2>
            <select id="teaid" name="teaid" onchange="ajaxRequestToGetAttendanceTeacherPresentThisMonth();" class="form-select" style="background-color: white;">
                <?php  
                $classget = "SELECT  * FROM teachers ";
                $res = mysql_query($classget);
                while($cln = mysql_fetch_array($res)) {
                    echo '<option value="' . $cln['id'] . '">' . $cln['name'] . '</option>';
                }
                ?>
            </select>
            <hr/>
            <h2>Select Attendance Teacher present:</h2>
            <label for="teapresent_thismonth">Current Month:</label>
            <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherPresentThisMonth();" value="thismonth" id="teapresent_thismonth" name="teapresent" checked="checked"/>
            <label for="teapresent_all">ALL:</label>
            <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherPresentAll();" value="all" id="teapresent_all" name="teapresent"/>
        </div>
        <hr/>
        <div class="text-center">
            <table id="myteapresent" class="table table-bordered"></table>
        </div>
        <hr/>
        <div class="text-center" style="background-color: gray;">
            <h2>Select Attendance Teacher absent:</h2>
            <label for="teaabsent_thismonth">Current Month:</label>
            <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherAbsentThisMonth();" value="thismonth" id="teaabsent_thismonth" name="teaabsent" checked="checked"/>
            <label for="teaabsent_all">ALL:</label>
            <input type radio onclick="ajaxRequestToGetAttendanceTeacherAbsentAll();" value="all" id="teaabsent_all" name="teaabsent"/>
        </div>
        <hr/>
        <div class="text-center">
            <table id="myteaabsent" class="table table-bordered"></table>
        </div>
        <hr/>
        <div class="text-center" style="background-color: orange;">
            <h2>Select your Staff:</h2>
            <select id="staffid" name="staffid" onchange="ajaxRequestToGetAttendanceStaffPresentThisMonth();" class="form-select" style="background-color: white;">
                <?php  
                $classget = "SELECT  * FROM staff ";
                $res = mysql_query($classget);
                while($cln = mysql_fetch_array($res)) {
                    echo '<option value="' . $cln['id'] . '">' . $cln['name'] . '</option>';
                }
                ?>
            </select>
            <hr/>
            <h2>Select Attendance Staff present:</h2>
            <label for="staffpresent_thismonth">Current Month:</label>
            <input type="radio" onclick="ajaxRequestToGetAttendanceStaffPresentThisMonth();" value="thismonth" id="staffpresent_thismonth" name="staffpresent" checked="checked"/>
            <label for="staffpresent_all">ALL:</label>
            <input type="radio" onclick="ajaxRequestToGetAttendanceStaffPresentAll();" value="all" id="staffpresent_all" name="staffpresent"/>
        </div>
        <hr/>
        <div class="text-center">
            <table id="mystaffpresent" class="table table-bordered"></table>
        </div>
        <hr/>
        <div class="text-center" style="background-color: gray;">
            <h2>Select Attendance Staff absent:</h2>
            <label for="staffabsent_thismonth">Current Month:</label>
            <input type="radio" onclick="ajaxRequestToGetAttendanceStaffAbsentThisMonth();" value="thismonth" id="staffabsent_thismonth" name="staffabsent" checked="checked"/>
            <label for="staffabsent_all">ALL:</label>
            <input type="radio" onclick="ajaxRequestToGetAttendanceStaffAbsentAll();" value="all" id="staffabsent_all" name="staffabsent"/>
        </div>
        <hr/>
        <div class="text-center">
            <table id="mystaffabsent" class="table table-bordered"></table>
        </div>
    </div>
                
            
            </main>
        </div>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="Attendance.js"></script>
    <script src="JS/login_logout.js"></script>
</body>
</html>


			