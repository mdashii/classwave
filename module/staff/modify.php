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
		input[type=text]{
			background-color: gray;
			border-radius : 4px ;
		}
		
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
				<li class="brand-logo">
					<a class="navbar-brand" href="index.php"><img src="logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
				</li>
			</ul>
			
		</div>
    </nav>
	<div class="container mt-5">
    <div class="text-center mod">
        <h1>Edit Information</h1>
        <p>*only gray fields Editable.</p>
        <form onsubmit="return modifyValidate();" action="modifysave.php" method="post">
            <div class="table">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>Staff ID</th>
                            <th>Staff Name</th>
                            <th>Staff Phone</th>
                            <th>Staff Email</th>
                            <th>Staff Password</th>
                            <th>Staff Gender</th>
                            <th>Staff DOB</th>
                            <th>Staff Hire Date</th>
                            <th>Staff Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $stinfo['id']; ?></td>
                            <td><?php echo $stinfo['name']; ?></td>
                            <td><input type="text" id="phone" name="phone" value="<?php echo $stinfo['phone']; ?>" /></td>
                            <td><input type="text" id="email" name="email" value="<?php echo $stinfo['email']; ?>" /></td>
                            <td><input type="text" id="password" name="password" value="<?php echo $stinfo['password']; ?>" /></td>
                            <td><?php echo $stinfo['sex']; ?></td>
                            <td><?php echo $stinfo['dob']; ?></td>
                            <td><?php echo $stinfo['hiredate']; ?></td>
                            <td><input type="text" id="address" name="address" value="<?php echo $stinfo['address']; ?>" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br />
            <input type="submit" class="btn btn-primary" value="Modify" />
        </form>
    </div>
</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src = "JS/modifyValidate.js"></script>
		<script src="JS/login_logout.js"></script>

</body>
		
</html>


			  
			 
