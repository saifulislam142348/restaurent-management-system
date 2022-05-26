
 <?php include_once('heder.php'); ?>


<?php

require_once 'config.php';

if(isset($_POST['submit'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$nid=$_POST['nid'];
$phone=$_POST['phone'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$checkin = strtotime($checkin);
$checkin= date('d-m-Y',$checkin); 
$checkout = strtotime($checkout);
$checkout= date('d-m-Y',$checkout); 
$adult=$_POST['member'];
$roomname =$_POST['room'];
if($checkin<$checkout){
$sql = mysqli_query($conn,"INSERT INTO `room_confirm`(`name`, `email`, `nid`, `phone`, `checkin`, `checkout`, `member`, `roomname`) VALUES ('$name','$email','$nid','$phone','$checkin','$checkout','$adult','$roomname')");
             }  
             else{
               echo "plese check in and check out currrect time";
             }


            
  




}



?>


<body>
   <marquee behavior="scroll" direction="left"><b>Very nice and pleasant environment
The Restaurant is open 24 hours a day</b> </marquee>
<div class="container-fluid">

	<?php include_once('search_bar.php'); ?>
  
</div>
<br>
<br>



<div class="container">
  <form action="#" method= "POST">




<class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="A1" aria-label="..." name="room">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (2).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_1</h4>
 
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
    <input class="form-check-input me-1" type="checkbox" value="A2" name="room" aria-label="...">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (6).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_2</h4>
  
 

    
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" value="A4" name="room"  data-bs-toggle="dropdown" aria-expanded="false">
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
    <input class="form-check-input me-1" type="checkbox" value="A3" aria-label="..." name="room">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (4).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_3</h4>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" name="room[]"  data-bs-toggle="dropdown" value= "B3" aria-expanded="false">
  more details
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
    
   <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" name="room"  data-bs-toggle="dropdown" aria-expanded="false">
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
    <input class="form-check-input me-1" type="checkbox" value="B1" name="room" aria-label="...">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (6).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_2</h4>
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
    <input class="form-check-input me-1" type="checkbox" value="B2" name="room" aria-label="...">
    <div class="card" style="width:auto;">
  <img class="card-img-top " src="bedroom/room (6).jpg" alt="Card image" width="40%" height="50%">
  <div class="card-body">
    <h4 class="card-title">double  room_2</h4>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
    <input type="text" class="form-control"  aria-describedby="" Name="name">
    <div id="" class="form-text">We'll never share your user name with anyone else.</div>
  </div>
<div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email1" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div><br>
 
  <div class="mb-3">
    <label  class="form-label">NID</label>
    <input type="text" class="form-control" Name="nid">
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
         <option selected>Open this select menu</option>
          <option value="one">One</option>
          <option value="two">Two</option>
        <option value="three">Three</option>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

 