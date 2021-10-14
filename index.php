<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php 
include 'menu.php' ;
 ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
       
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
    	<h2 class="text-center">About Us</h2>
    </div>
<div class="container-fluid">
 <div class="row">
   <div class="col-lg-6 col-md-6 col-12">
   	  <img src="images/img1.jpg" class="img-fluid aboutimg">
   </div>

   <div class="col-lg-6 col-md-6 col-12">
   	 <h2 class="display-4">The Workout Zone</h2>
   	 <p class="py-3">A gym encourages you to do a balanced program that includes both aerobic and strength training exercises. These promote heart health and weight loss, help prevent osteoporosis and improve muscle strength, balance and flexibility</p>
<a href="about.php" class="btn btn-success">check more</a>
   </div>
 </div>
</div>
</section>

<section class="my-5">
    <div class="py-5">
    	<h2 class="text-center">Membership Details</h2>
    </div>
    
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-4 col-md-4 col-12">
    			<div class="card" style="width:400px">
                  <img height="350px" class="card-img-top" src="images/img1.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">₹ 3000</h4>
                  <p class="card-text">Only Gym</p>
                  <a href="#" class="btn btn-primary">See Package</a>
                </div>
            </div>
    		</div>

    		<div class="col-lg-4 col-md-4 col-12">
    			<div class="card" style="width:400px">
                  <img height="350px" class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS4Viww6NKYDrIXzxXFPeWyriq12m1nkcgTig&usqp=CAU" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">₹ 4000</h4>
                  <p class="card-text">Gym and Pool</p>
                  <a href="#" class="btn btn-primary">See Package</a>
                </div>
            </div>
    		</div>

    		<div class="col-lg-4 col-md-4 col-12">
    			<div class="card" style="width:400px">
                  <img height="350px" class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAwhq1WAuO2WEzlFkrf8ylBBaTEnckYl-v7Q&usqp=CAU" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">₹ 5000</h4>
                  <p class="card-text">Gym, Pool and Yoga</p>
                  <a href="#" class="btn btn-primary">See Package</a>
                </div>
            </div>
    		</div>


    	</div>
    </div>
</section>

    <section class="my-5">
    <div class="py-5">
    	<h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="images/img1.jpg" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img src="images/img3.jpg" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="images/img2.jpg" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="https://images.unsplash.com/photo-1468971050039-be99497410af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="https://images.unsplash.com/photo-1537289150563-b7f10eee353b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="https://images.unsplash.com/photo-1542766788-a2f588f447ee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" class="img-fluid pb-4">
    		</div>
    		<div class="col-lg-4 col-md-4 col-12">
    			<img height="350px" src="https://images.unsplash.com/photo-1546483875-ad9014c88eba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" class="img-fluid pb-4">
    		</div>
    	</div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
    	<h2 class="text-center">Contact Us</h2>
    </div>
     
     <div class="w-50 m-auto">
    	<form action="userinfo.php" method="post">
    		<div class="form-group">
    			<label>Username</label>
    			<input type="text" name="user" autocomplete="off" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>Email</label>
    			<input type="text" name="email" autocomplete="off" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>Mobile</label>
    			<input type="text" name="mobile" autocomplete="off" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>Comments</label>
    			<textarea name="comments" class="form-control"></textarea>
    		</div>
    		  <button type="submit" class="btn btn-success">Submit</button>

    	</form>
    </div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@TheWorkoutZone</p>
</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>









