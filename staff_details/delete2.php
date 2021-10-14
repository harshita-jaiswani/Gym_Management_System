<?php

include 'conn2.php';

$stid = $_GET['id'];

$q = " DELETE FROM staff WHERE staff_id= '$stid' ";

mysqli_query($con, $q);

header('location:staff_detail.php');

?>