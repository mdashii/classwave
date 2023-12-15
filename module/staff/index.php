<?php
include_once('main.php');

$st=mysql_query("SELECT *  FROM staff WHERE id='$check' ");
$stinfo=mysql_fetch_array($st);

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
		
	</style>
</head>
<body>
		
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
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
			
		</div>
    </nav>
		<div class="container mt-5">
			<h1 class="text-center">My Information</h1>
			<div class="container mt-5">
				<div class="mx-auto" style="max-width: 400px;">
					<div class="card">
						<img src="../images/<?php echo $check . ".jpg"; ?>" class="card-img-top" alt="<?php echo $check . " photo"; ?>">
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>Staff ID:</strong> <?php echo $stinfo['id']; ?></li>
								<li class="list-group-item"><strong>Staff Name:</strong> <?php echo $stinfo['name']; ?></li>
								<li class="list-group-item"><strong>Staff Phone:</strong> <?php echo $stinfo['phone']; ?></li>
								<li class="list-group-item"><strong>Staff Email:</strong> <?php echo $stinfo['email']; ?></li>
								<li class="list-group-item"><strong>Staff Gender:</strong> <?php echo $stinfo['sex']; ?></li>
								<li class="list-group-item"><strong>Staff DOB:</strong> <?php echo $stinfo['dob']; ?></li>
								<li class="list-group-item"><strong>Staff Hire Date:</strong> <?php echo $stinfo['hiredate']; ?></li>
								<li class="list-group-item"><strong>Staff Address:</strong> <?php echo $stinfo['address']; ?></li>
								<li class="list-group-item"><strong>Staff Monthly Salary:</strong> <?php echo round($stinfo['salary'] / 12, 2); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="JS/login_logout.js"></script>

</body>
		
</html>

