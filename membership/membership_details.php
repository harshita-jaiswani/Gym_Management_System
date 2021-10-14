<?php

include 'conn3.php';

if(isset($_POST['done'])){

 $cus_name = $_POST['cus_name'];
 $dob = $_POST['dob'];
 
 $gender = $_POST['gender'];
 $address = $_POST['address'];
 $phone_no = $_POST['phone_no'];
 $email_id = $_POST['email_id'];
 $aadhar_no = $_POST['aadhar_no'];
 
 
 $query="INSERT into customers1 (cus_name,dob,gender,address,phone_no,email_id,aadhar_no) values ('$cus_name','$dob','$gender','$address','$phone_no','$email_id','$aadhar_no')";




echo "$query";
  mysqli_query($con,$query);
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

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="col-lg-6 m-auto">
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Membership </h1>
 </div><br>

 <label> Customer Name: </label>
 <input type="text" name="cus_name" class="form-control"> <br>

 <label> Date of Birth: </label>
 <input type="date" name="dob" class="form-control"> <br>

 
 <label> Gender: </label>
  <input type="text" name="gender" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" name="phone_no" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email_id" class="form-control"> <br>

 <label> Aadhar No: </label>
 <input type="text" name="aadhar_no" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done"> INSERT </button><br>
 </div>
 </form>                                                                                                                                                                                        
 </div>


</body>
</html>














