
<?php
include_once('main.php');
$st=mysql_query("SELECT *  FROM parents WHERE id='$check' ");
$stinfo=mysql_fetch_array($st);

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
<body onload="ajaxRequestToGetChild();">
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
						<li class="nav-item" >
                            <a class="nav-link" href="modify.php">Change Password</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="checkchild.php">Childs Information</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="childcourse.php">Childs Course And Result</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="childpayment.php">Child Payments</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="childattendance.php">Childs Attendance</a>
                        </li>
						<li class="nav-item" >
                            <a class="nav-link" href="childreport.php">Childs Report</a>
                        </li>
					</ul>
				</div>
			</nav>
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main col-8">
			<div class="container mt-5">
    <div class="text-center">
        <label for="childid" class="form-label">Select your Child:</label>
        <select id="childid" name="childid" class="form-select" onchange="ajaxRequestToGetChild()" style="background-color: white;">
            <?php
            $classget = "SELECT  * FROM students where parentid='$check'";
            $res = mysql_query($classget);

            while ($cln = mysql_fetch_array($res)) {
                echo '<option value="' . $cln['id'] . '">' . $cln['name'] . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="text-center mt-3">
        <label for="myclass" class="form-label">Select Class:</label>
        <select id="myclass" name="myclass" class="form-select" onchange="ajaxRequestToGetCourse()"></select>
    </div>
    <div class="text-center mt-3">
        <label for="mycourse" class="form-label">Select Course:</label>
        <select id="mycourse" name="mycourse" class="form-select" onchange="ajaxRequestToGetCourseReportInfo()"></select>
    </div>
    <h4 class="mt-4">Course Information:</h4>
    <hr />
    <p><label id="mycourseteacher"></label></p>
    <table id="mycoursereportinfo" class="table table-bordered"></table>
</div>

			</main>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="jquery-1.12.3.js"></script>
	<script type="text/javascript" src="studentClassCourse.js"></script>
    <script src="JS/login_logout.js"></script>
			
			  
			  
	</body>
</html>


			  
							
		</body>
</html>


