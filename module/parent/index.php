
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
				<div class="container mt-5 text-center">
					<h1>Parents Information</h1>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Parents ID</th>
								<th>Parent Male Name</th>
								<th>Parent Female Name</th>
								<th>Parent Male Phone</th>
								<th>Parent Female Phone</th>
								<th>Student Address</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $stinfo['id']; ?></td>
								<td><?php echo $stinfo['fathername']; ?></td>
								<td><?php echo $stinfo['mothername']; ?></td>
								<td><?php echo $stinfo['fatherphone']; ?></td>
								<td><?php echo $stinfo['motherphone']; ?></td>
								<td><?php echo $stinfo['address']; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</main>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <script src="JS/login_logout.js"></script>
			
			  
			  
	</body>
</html>

