<?php

include 'conn2.php';

if(isset($_POST['done'])){

 $stid = $_GET['id'];
 //$dob = $_POST['dobd'];
 //$st_name = $_POST['st_named'];
 //$gender = $_POST['genderd'];
 //$ssn = $_POST['ssnd'];
 $designation = $_POST['designationd'];
 $address = $_POST['addressd'];
 $phone_no = $_POST['phone_nod'];
 //$email_id = $_POST['email_idd'];
 //$aadhar_no = $_POST['aadhar_nod'];
 
 
 $q = " update staff set designation='$designation', address='$address', phone_no='$phone_no' where staff_id='$stid'";
//echo "$query";
  mysqli_query($con,$q);
  header('location:staff_detail.php');
}
?>







<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 
 <label> Designation: </label>
 <input type="text" name="designationd" class="form-control"> <br>

 <label> Address: </label>
  <input type="text" name="addressd" class="form-control"> <br>

  <label> Phone: </label>
 <input type="text" name="phone_nod" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done"> UPDATE </button><br>

 </div>
 </form>
 </div>
</body>
</html>