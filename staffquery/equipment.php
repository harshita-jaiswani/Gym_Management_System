<?php

include 'conn.php';

if(isset($_POST['done'])){

 $equipmentno = $_POST['equipmentno'];
 $eqtype = $_POST['eqtype'];
 $conditi_on = $_POST['conditi_on'];
 
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
 <h1 class="text-white text-center"> Equipment details </h1>
 </div><br>
</div>
</div>


 <br>
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Equipment No</th>
 <th> Equipment Type </th>
 <th> Condition </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from equipment ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['equipment_no'];  ?> </td>
 <td> <?php echo $res['equipment_type'];  ?> </td>
 <td> <?php echo $res['condition_'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['equipment_no']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['equipment_no']; ?>" class="text-white"> Update </a> </button> </td>
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
 <h1 class="text-white text-center">  Insert Equipments </h1>
 </div><br>

 <label> Equipment No: </label>
 <input type="text" name="equipmentno" class="form-control"> <br>

 <label> Type: </label>
 <input type="text" name="eqtype" class="form-control"> <br>

 <label> Condition: </label>
  <input type="text" name="conditi_on" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done"> INSERT </button><br>
 </div>
 </form>																																																																																												
 </div>
</body>
</html>