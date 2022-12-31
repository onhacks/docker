
<!doctype html>
<html lang="en">
  <head>
  	    <title>AdminLogin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <style>
         body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
      </style> 
   </head>
	<body>
	<div class="sidenav">
         <div class="login-main-text">
            <h2>Admin<br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method = "POST">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name = "username" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name = "password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black" name = "login">Login</button>
               </form>
            </div>
         </div>
      </div>
	</body>
</html>
<?php
include "dbConn.php"; // Using database connection file here
if(isset($_POST['login'])){
   $username = $_POST['username'];
$password = $_POST['password'];
$del = mysqli_query($db,"select * from login where username = '$username' AND password = '$password'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in login"; // display error message if not delete
}
}

?>