<?php

include 'conn.php';

$eqno = $_GET['id'];

$q = " DELETE FROM equipment WHERE equipment_no= '$eqno' ";

mysqli_query($con, $q);

header('location:equipment.php');

?>