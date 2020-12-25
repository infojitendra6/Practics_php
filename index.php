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
include "header.php";
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                  
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-4">
                           
								
								 <?php
            $res=mysqli_query($conn,"select * from category");
            while($row=mysqli_fetch_array($res))
            {
                ?>
                
       <div class="card shadow mb-4 border-left-primary border-bottom-info ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Product Category</h6>
                                   
                                </div>
								
								
                                <!-- Card Body -->
                                <div class="card-body">
                                     <img class="card-img-top rounded-circle" src="<?php echo $row["image"]; ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h1 class="card-title text-primary"><?php echo $row["name"]; ?></h1>
      <h4 class="card-title text-info">Code :-<?php echo $row["code"]; ?></h4>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
                               
            
							   </div>
                            </div>
                <?php

            } ?>

								
								
								


                        </div>
<div class="col-xl-4 col-lg-4">
                            <?php
            $res=mysqli_query($conn,"select * from item1");
            while($row=mysqli_fetch_array($res))
            {
                ?>
                
       <div class="card shadow mb-4  border-bottom-primary ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Product Item</h6>
                                   
                                </div>
								
								
                                <!-- Card Body -->
                                <div class="card-body">
                                     <img class="card-img-top" src="<?php echo $row["item_image"]; ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h1 class="card-title text-primary"><?php echo $row["item_name"]; ?></h1>
      <h4 class="card-title text-info">Code :-<?php echo $row["item_code"]; ?></h4>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
                               
            
							   </div>
                            </div>
                <?php

            } ?>
                        </div>
<div class="col-xl-4 col-lg-4">
                           <?php
            $res=mysqli_query($conn,"select * from customer");
            while($row=mysqli_fetch_array($res))
            {
                ?>
                
       <div class="card shadow mb-4 border-left-primary ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
                                   
                                </div>
								
								
                                <!-- Card Body -->
                                <div class="card-body">
                                     <img class="card-img-top img-thumbnail" src="<?php echo $row["customer_image"]; ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h1 class="card-title text-primary"><?php echo $row["customer_name"]; ?></h1>
      <h4 class="card-title text-info">Code :-<?php echo $row["customer_code"]; ?></h4>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
                               
            
							   </div>
                            </div>
                <?php

            } ?>
                        </div>

                       
                    </div>


                </div>
              

    <?php
include "footer.php";
?>