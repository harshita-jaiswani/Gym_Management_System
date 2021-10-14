<?php

include 'conn1.php';

if(isset($_POST['done'])){

 $customer_id = $_POST[''];
 $dob = $_POST['eqtype'];
 $cus_name = $_POST['eqtype'];
 $gender = $_POST['eqtype'];
 $address = $_POST['eqtype'];
 $phone_no = $_POST['eqtype'];
 $email_id = $_POST['eqtype'];
 $aadhar_no = $_POST['eqtype'];
 $membership_id = $_POST['conditi_on'];
 $class_id = $_POST['eqtype'];
 
 $query = " INSERT INTO  equipment(equipment_no, equipment_type,condition_) VALUES ( '$equipmentno', '$eqtype', '$conditi_on')";
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
 <h1 class="text-white text-center"> Customers details </h1>
 </div><br>
</div>
</div>


 <br>
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Customer_id</th>
 <th> DOB </th>
 <th> Customer Name </th>
 <th> Gender </th>
 <th> Address </th>
 <th> Phone No </th>
 <th> Email id </th>
 <th> Aadhar No </th>
 <th> Membership Id </th>
 <th> Class Id </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn1.php'; 
 $q = "select * from customers ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['customer_id'];  ?> </td>
 <td> <?php echo $res['dob'];  ?> </td>
 <td> <?php echo $res['cus_name'];  ?> </td>
 <td> <?php echo $res['gender'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['phone_no'];  ?> </td>
 <td> <?php echo $res['email_id'];  ?> </td>
 <td> <?php echo $res['aadhar_no'];  ?> </td>
 <td> <?php echo $res['membership_id'];  ?> </td>
 <td> <?php echo $res['class_id'];  ?> </td>

 <td> <button class="btn-danger btn"> <a href="delete1.php?id=<?php echo $res['customer_id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update1.php?id=<?php echo $res['customer_id']; ?>" class="text-white"> Update </a> </button> </td>
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
																																																																																			
</body>
</html>