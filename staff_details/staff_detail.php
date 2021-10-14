<?php

include 'conn2.php';

if(isset($_POST['done'])){

 $staff_id = $_POST['staff_idd'];
 $dob = $_POST['dobd'];
 $st_name = $_POST['st_named'];
 $gender = $_POST['genderd'];
 $ssn = $_POST['ssnd'];
 $designation = $_POST['designationd'];
 $address = $_POST['addressd'];
 $phone_no = $_POST['phone_nod'];
 $email_id = $_POST['email_idd'];
 $aadhar_no = $_POST['aadhar_nod'];
 
 
 $query = " INSERT INTO  staff(staff_id,dob,st_name,gender,ssn,designation,address,phone_no,email_id,aadhar_no) VALUES ('$staff_id','$dob','$st_name','$gender','$ssn','$designation','$address','$phone_no','$email_id','$aadhar_no')";
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
<div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Staff Details </h1>
 </div><br>
</div>
</div>


 <br>
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Staff_id</th>
 <th> DOB </th>
 <th> Staff Name </th>
 <th> Gender </th>
  <th> SSN </th>

 <th> Designation </th>

 <th> Address </th>
 <th> Phone No </th>
 <th> Email id </th>
 <th> Aadhar No </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn2.php'; 
 $q = "select * from staff ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['staff_id'];  ?> </td>
 <td> <?php echo $res['dob'];  ?> </td>
 <td> <?php echo $res['st_name'];  ?> </td>
 <td> <?php echo $res['gender'];  ?> </td>
 <td> <?php echo $res['ssn'];  ?> </td>
 <td> <?php echo $res['designation'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['phone_no'];  ?> </td>
 <td> <?php echo $res['email_id'];  ?> </td>
 <td> <?php echo $res['aadhar_no'];  ?> </td>
 

 <td> <button class="btn-danger btn"> <a href="delete2.php?id=<?php echo $res['staff_id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update2.php?id=<?php echo $res['staff_id']; ?>" class="text-white"> Update </a> </button> </td>
 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>


<br>
<br>

<div class="col-lg-6 m-auto">
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Staff Details </h1>
 </div><br>

 <label> Staff Id: </label>
 <input type="text" name="staff_idd" class="form-control"> <br>

 <label> Date of Birth: </label>
 <input type="date" name="dobd" class="form-control"> <br>

 <label> Staff Name: </label>
 <input type="text" name="st_named" class="form-control"> <br>

 <label> Gender: </label>
  <input type="text" name="genderd" class="form-control"> <br>

  <label> SSN: </label>
 <input type="text" name="ssnd" class="form-control"> <br>

 <label> Designation: </label>
 <input type="text" name="designationd" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="addressd" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" name="phone_nod" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email_idd" class="form-control"> <br>

 <label> Aadhar No: </label>
 <input type="text" name="aadhar_nod" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done"> INSERT </button><br>
 </div>
 </form>                                                                                                                                                                                        
 </div>











																																																																																			
</body>
</html>