<?php


 require_once 'config.php';
 
$user = $_SESSION['id'];


?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title> admin home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
	
		<div style="text-align:center;" class="list-group-item active "><h2> Admin Dashboard</h2> 
			<p>Welcome </strong></p>
			<p> 	<div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">Room add</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href=""><span class="glyphicon glyphicon-bed">
		  

		  <?php include_once('room.php'); ?>

		  </span>
		</a>
	</li>
          
		  </li>
          
        </ul>
      </div>
	   </p>
		
		
		
		</div>
		</div>
		<nav class="navbar ">
		<div class="container-fluid">
			<div class="navbar-header  ">
			
			   <h3>Search in all information</h3>
				<form  action = "" method= "POST">
				<input type="text"  name ="sing" placeholder="all informarion " />
				<input type="submit" name ="search" value=" search in  "/>
				
				</form>
				<br>
				<div class= "btn ">
<h4>Customer information & total profit </h4>
				<select class="form-select bg-danger" >
  <option selected>select one...</option>
  <option value="1">one</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
				</div>
			
			</div>
				

				
			
	
		
		</div>
				
			</div>
			
			
		
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<a href="admin_index.php" class="list-group-item active"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard 
					</a>


					<div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">Admin profile</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="room.php">
			  <span class="glyphicon glyphicon-user"> 
				  
			  	
		  <?php include_once('admin_profile.php'); ?>

		</span>
	</</a>
</li>
          
		 
          
        </ul>
      </div>
				
			
					<div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">How much Total  room  booking?</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="room.php"><span class="glyphicon glyphicon-user"> 

		  <?php include_once('booking_succes.php'); ?>

</span></a></li>
          
		  </li>
          
        </ul>
      </div>
					





	  <div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">All Costomer users</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="room.php"><span class="glyphicon glyphicon-user">
			  
		  <?php include_once('costomer_details.php'); ?>
</span></a></li>
          
		  </li>
          
        </ul>
      </div>
			
	  
	  
	  <div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-bell">Costomer messege</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"> 
			  
		  <?php include_once('costomer_sms.php'); ?>
		</span></a></li>
          
		  </li>
          
        </ul>
      </div>
			
					
				 <a class="list-group-item" href="admin_logout.php" style="color: red;">logout</a>
					
					

					
				</div>
				
			</div> 
		</div>
	</div>
</body>
</html>