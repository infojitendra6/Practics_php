<?php

include "connection.php";

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from product where id = '$id'"); // delete query

    echo "successfully record is Deleted "; // display error message if not delete

?>