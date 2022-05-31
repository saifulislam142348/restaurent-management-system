
<?php


require_once 'config.php';

$user = $_SESSION['id'];


?>



<?php

require_once 'config.php';

if(isset($_POST['submit'])){
	
$name=$_POST['username'];
$email=$_POST['email'];
$nid=$_POST['nid'];
$phone=$_POST['phone'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$adult=$_POST['member'];

 $room =$_POST['room'];

 
 foreach($room as $price){


  $query=mysqli_query($conn,"SELECT * FROM `room_cofirm` WHERE `email`='$email'");
  if(mysqli_num_rows($query)==0){
    

        $sql = mysqli_query($conn,"INSERT INTO `room_confirm`(`name`, `email`, `nid`, `phone`, `checkin`, `checkout`, `member`, `roomname`) VALUES ('$name','$email','$nid','$phone','$checkin','$checkout','$adult',' $price')");
       if($sql){
        
header('location:profile.php');

  }
}
     
 
else{
  echo ' Please check the check in and checkout';
}
 
 
}

  }

 

?>
<?php

require_once 'config.php';

if(isset($_POST['submit'])){
	

$email=$_POST['email'];
$nid=$_POST['nid'];

$email_check=mysqli_query($conn,"SELECT * FROM `room_confirm` WHERE `email`='$email'");
if(mysqli_num_rows($email_check)>0){
	
	
	$row=mysqli_fetch_assoc($email_check);
	
	if($row['nid']==$nid)
	{
		header('location: profile.php');
	}
}
	
	else{
		$wrong_email='Wrong Email & nid  ,please Enter the correct Email & nid';
		
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>our room booking procssing </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


  

<div class="jumbotron">
<div class="container">
  <div class="row">

  <div class="col-lg-4">
  <?php
	$username = mysqli_query($conn,"SELECT * FROM `user_registation` WHERE `id` = '$user'");
	
	$userdata = mysqli_fetch_assoc($username);
	echo $userdata['user_email'];
	
	
	?>
  </div>

  <div class="col-lg-">
  <?php include_once('search_bar.php'); ?>
  </div>
  <div class="col-lg-4">
  <li><a   href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
  </div>
  </div>
  
</div>
<div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> <p>If you have to book a room in advance. </p><h3><b class="btn btn-success">Click here </b> </h3> </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"> 
            	<div class="jumbotron">
              <h2 class=" badge text-wrap"> login in</h2><br>
<div class="btn btn-primary"><?php  echo 	$wrong_email;?></div>


              <form action="#" method="POST">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">NID:</label>
    <input type="text" class="form-control" placeholder="Enter  you  nid " name="nid">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary"  name ="submit">Submit</button>
</form>



</div></span></a></li>
          
		  </li>
          
        </ul>
      </div>
      <marquee behavior="scroll" direction="left"><b>Very nice and pleasant environment
The Restaurant is open 24 hours a day</b> </marquee>
</div>






<br>
<br>



<div class="container">
  <form action="#" method= "POST">




<class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="1200" aria-label="..." name="room[]">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (2).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_1</h4>
    <p>price:1200</p>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
    more details
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  </div>
</div>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="1200" name="room[]" >
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (6).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_2</h4>
    <p>price:1200</p>
 

    
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" value="1500" name="room[]"  data-bs-toggle="dropdown" aria-expanded="false">
more details
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  </div>
</div>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="1500"  name="room[]">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (4).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_3</h4>
    <p>price:1500</p>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" name="room[]"  data-bs-toggle="dropdown" value= "1600" aria-expanded="false">
  more details
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
    
   <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" name="room[]" value= "2000"  data-bs-toggle="dropdown" aria-expanded="false">
more details
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  </div>
</div>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="1600" name="room[]" aria-label="...">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (6).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_2</h4>
    <p>price:1600</p>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   more details
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  </div>
</div>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="1200" name="room[]" >
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (6).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_2</h4>
    <p>price:1200</p>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button"  data-bs-toggle="dropdown" >
    more datails
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  </div>
</div>
  </li>
</ul>
<br>
<br>

 </
<br>

<div class="mb-3">
    <label  class="form-label">user name</label>
    <input type="text" class="form-control Name = "username" value="<?php echo $userdata['User_name'];?>">
    <div id="" class="form-text">We'll never share your user name with anyone else.</div>
  </div>
<div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="<?=$userdata['user_email'];?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div><br>
 
  <div class="mb-3">
    <label  class="form-label">NID</label>
    <input type="text" class="form-control" Name="nid" />
  </div><br>

  <div class="mb-3">
    <label  class="form-label">phone</label>
    <input type="text" class="form-control" Name="phone" value="+88">
  </div><br>
 
<br>
<div class="col-lg-3">
					<label class="form-label" style="font-weight:500;"> check in</label>
					<input type="date" class="form-control shawon-none"   name="checkin">
				
				</div>
				
<div class="col-lg-3">
					<label class="form-label" style="font-weight:500;"> check out</label>
					<input type="date" class="form-control shawon-none"   name="checkout">
				
				</div>
				<div class="col-lg-3">
					<label class="form-label" style="font-weight:500;"> Adult</label>
					<select class="form-select form-control shawon-none"  name="member">
         <option selected value= "">Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
        <option value="3">Three</option>
       </select>
				</div>
<br>
<br>
<input  type="submit" class="btn btn-primary  btn-block btn-lg" name="submit" value="booking now"><br>
</form>

</div>



<br>
<br>


    
      <?php include_once('footer.php'); ?>

      
</body>
</html>
    
 