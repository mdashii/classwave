<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Please Login To Continue";
	  $color="green";
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
	      <script src="source/js/loginValidate.js"></script>
		 
        <title>College Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">

        
        
    </head>
    <body>
    <div class="container-fluid" >
        <div class="d-flex justify-content-center align-items-center" style=" height: 100vh;" >
            <div class="box-1 d-flex justify-content-center align-items-center " >
            <img src="MY_college.jpg" alt="" class="legend-logo">
                <div>                                                             
                <form action="service/check.access.php" onsubmit="return loginValidate();" method="post">
                    <h4 class="text-center">Login</h4>
                    <hr>
                    <div class="mb-3 form__group field">
                        <input type="text" class="form__field" id="myid" name="myid" placeholder="Login ID" autofocus=""   />
                        <label for="Login Id" class="form__label">Login Id</label>
                    
                    
                    </div>
                    <div class="mb-3 form__group field">
                        <input type="password" class="form__field" id="mypassword" name="mypassword" placeholder="Password"  />
                        <label for="exampleInputPassword1" class="form__label">Password</label>
                    
                    </div>
                    <input type="submit" class="btn btn-success" value="Login" id="lbtn" />
                </form>
                </div>
            </div>
            
        </div>
    </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
