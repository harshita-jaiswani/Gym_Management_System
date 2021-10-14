<?php

include 'conn1.php';

$cus_id = $_GET['id'];

$q = " DELETE FROM customers WHERE customer_id= '$cus_id' ";

mysqli_query($con, $q);

header('location:cus_details.php');

?>