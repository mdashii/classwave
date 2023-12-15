<?php
include_once('main.php');
$count=0;
$st=mysql_query("SELECT *  FROM staff WHERE id='$check' ");
$stinfo=mysql_fetch_array($st);

$attendmon = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$check' and  MONTH( DATE ) = MONTH( CURRENT_DATE ) and YEAR( DATE )=YEAR( CURRENT_DATE )";
$resmon = mysql_query($attendmon);

while($r=mysql_fetch_array($resmon))
{
 $count+=1;
}
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
				<li class="brand-logo">
					<a class="navbar-brand" href="index.php"><img src="logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
				</li>
			</ul>
			
		</div>
    </nav>
	<div class="container mt-5 text-center">
		<h1 class="p-3">My Salary</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Staff Monthly Salary</th>
					<th>Staff Payable Salary This Month</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo round($stinfo['salary'] / 12, 2); ?></td>
					<td><?php echo round(($stinfo['salary'] / 300) * $count, 2); ?></td>
				</tr>
			</tbody>
		</table>
	</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="JS/login_logout.js"></script>
		<script src = "JS/modifyValidate.js"></script>

</body>
		
</html>



