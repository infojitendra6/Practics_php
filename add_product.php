
<?php
session_start();
if(!isset($_SESSION["username"]))
{

    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php

}
?>
 <?php
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

    <title>ADD Product</title>

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
               
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add your product</h1>
                            </div>
                            <form action="#" class="addProduct" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"  name="title" class="form-control form-control-user" id="exampleInputTitle"
                                            placeholder="Enter Title of Product">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number"  name="price" class="form-control form-control-user" id="exampleInputPrice"
                                            placeholder="Enter Price of Product">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="description" class="form-control form-control-user" id="exampleInputDescription"
                                        placeholder="Enter Description">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                    <select class="bg-primary" id="cars" name="vender">
  <option value="volvo">Volvo</option>
  <option  value="saab">Saab</option>
  <option  value="opel">Opel</option>
  <option  value="audi">Audi</option>
</select>
	  
                                    </div>
									 <div class="col-sm-3 mb-3 mb-sm-0">
                                     <h1 class="h4 text-gray-900 mb-4">Feature product</h1>
                                          <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="1" checked>YES
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio"value="0">NO
  </label>
</div>
	  
                                    </div>
									
                                    <div class="col-sm-6">
                                    <h1 class="h4 text-gray-900 mb-4">Size of product</h1>
                                         <div class="form-check-inline">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="Size" value="XL" >XS,
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="Size" value="S" checked>S,
      </label>
    </div>
	 <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="Size" value="M">M
      </label>
    </div>
	 <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="Size" value="L">L
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="Size" value="XL">XL
      </label>
    </div>
	<div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="Size" value="XXL" >XXL
      </label>
    </div>
                                    </div>
                                </div>
                
   </div>
            
                           
                                

                                <div class="form-group">
                                    <input type="file"  class="form-control form-control-user" id="exampleInputImage"
                                        placeholder="Upload Image" name="file" >
                                </div>
										<button type="submit" name="add_prod" class="btn btn-primary btn-user btn-block">Add Product</button>
                                      
                                


                            </form>
                           
                           
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>
   

    <?php
 if(isset($_POST["add_prod"]))
 {
     $flag=1;
   
    $titleErr = $descriptionErr = $venderErr = $featureErr = $sizeErr =$priceErr =$prod_imageErr = "";
$title = $description = $vender = $feature = $size =$price =$prod_image = "";
$title=$_POST["title"];
$description=$_POST["description"];
$vender=$_POST["vender"];
$feature=$_POST["optradio"];
$size=$_POST["Size"];
$price=$_POST["price"];


$allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
      
$flag=0;
if (!empty($_POST["title"])&&!empty($_POST["price"])&&!empty($_POST["description"])&&!empty($_POST["vender"])&&!empty($_POST["optradio"])) 
{
  if (!preg_match("/^[a-zA-Z-' ]*$/",$title)||!preg_match("/^[a-zA-Z-' ]*$/",description)||!preg_match("/^[0-9-' ]*$/",$price)) 
  {
    $titleErr = "Only letters and white space allowed";
}
else
{
  $flag=1;
  // $titleErr = "All field are required";
}
  
  } 
  else {
    $titleErr = "All field are required";
   }







// if (empty($_POST["title"])) {
//     $flag=0;
//     $titleErr = "Name is required";
//   } else {
//     $title = test_input($_POST["title"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$title)) {
//         $flag=0;
//       $titleErr = "Only letters and white space allowed";
//     }
//   }

  
// if (empty($_POST["price"])) {
//     $flag=0;
//     $priceErr = "Name is required";
//   } else {
//     $price = test_input($_POST["price"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[0-9]*$/",$price)) {
//         $flag=0;
//       $priceErr = "Only letters and white space allowed";
//     }
//   }
  
// if (empty($_POST["description"])) {
//     $flag=0;
//     $descriptionErr = "Name is required";
//   } else {
//     $description= test_input($_POST["description"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[0-9]*$/",$description)) {
//         $flag=0;
//       $descriptionErr = "Only letters and white space allowed";
//     }
//   }

  
// if (empty($_POST["description"])) {
//     $flag=0;
//     $descriptionErr = "Name is required";
//   } else {
//     $description= test_input($_POST["description"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[0-9]*$/",$description)) {
//         $flag=0;
//       $descriptionErr = "Only letters and white space allowed";
//     }
//   }

    $pname=rand(100, 100000)."-".$_FILES["file"]["name"];
    $tname=$_FILES["file"]["tmp_name"];

    $targetDir = "image/"; 

    move_uploaded_file($tname,$targetDir.'/'.$pname);

   
$uname=$_SESSION["username"];
   $count=0;
//    if($flag==1)
	 $res=mysqli_query($conn, "INSERT INTO `product` (`id`, `title`, `description`, `vender`, `feature`, `size`, `price`, `prod_image`, `usernamep`) VALUES (NULL, '$_POST[title]', '$_POST[description]', '$_POST[vender]', '$_POST[optradio]', '$_POST[Size]', '$_POST[price]', '$pname', '$uname'); ") or die(mysqli_error($conn));
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
window.location="select_category.php"
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


