<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
               
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="#" class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"  name="firstname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"  name="lastname" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email"  name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number"  name="mobile" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Mobile Number">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"  name="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder=" Password">
                                    </div>
                                </div>
                               
										<button type="submit" name="register" class="btn btn-primary btn-user btn-block">Register</button>
                                      
                                <hr>


                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>
   

    <?php
 if(isset($_POST["register"]))
 {

    $flag=1;
   
    $ErrSms ="";
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];

$flag=0;
if (!empty($_POST["firstname"])&&!empty($_POST["lastname"])&&!empty($_POST["email"])&&!empty($_POST["mobile"])&&!empty($_POST["password"])) 
{
  if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)||!preg_match("/^[a-zA-Z-' ]*$/",$lastname)||!filter_var($email, FILTER_VALIDATE_EMAIL)||!preg_match("/^[0-9-' ]*$/",$mobile)||!preg_match("/^[a-zA-Z-' ]*$/",$password)) 
  {
    $ErrSms = "Enter vailed data";
}
else
{
  $flag=1;
  // $titleErr = "All field are required";
}
  
  } 
  else {
    $ErrSms = "All field are required";
   }





     $count=0;
//      if($flag==1)
      $res=mysqli_query($conn, "INSERT INTO `resistration` (`id`, `firstname`, `lastname`, `email`, `mobileno`, `password`) VALUES (NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[mobile]', '$_POST[password]'); ") or die(mysqli_error($conn));
     
     $count=mysqli_num_rows($res); //<!-- it is used for check user name is exist or not -->
     
     
     if($count==0)
	 {
		 
		?>	   
<script type="text/javascript">

	document.getElementById("failure").style.display="block";
</script> 
<?php

 }
 else
 {
 
 ?>	   
<script type="text/javascript">
window.location="view_product.php"
</script> 
<?php
 }
 }
 ?>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
