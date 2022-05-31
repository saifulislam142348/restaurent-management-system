<?php


 require_once 'config.php';
 
$user = $_SESSION['id'];


?>


<div class="container">

<table  id="table_id"class="table  table-striped">
    <thead>
	
	<?php
	
	require_once 'config.php';
	
	if(isset($_POST['search'])){
		$nid=$_POST['nid'];
	$query=mysqli_query($conn,"SELECT * FROM `room_confirm` WHERE `nid` ='$nid'");
	while($row=mysqli_fetch_assoc(	$query)){
	
		?>
		
		<tr>
	     <th>ID</th>
        <th>Full Name</th>
        <th>email</th>
		<th>Nid</th>
		<th>Phone number</th>
		<th>checkin</th>
		<th>checkout</th>
		<th>member</th>
    <th>Action</th>
	<th>status</th>
	<th>Your totol payment money</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['nid']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['checkin']; ?></td>
        <td><?php echo $row['checkout']; ?></td>
		<td><?php echo $row['member']; ?></td>
        <td><a href="delete.php?id=<?php echo  $row['id']; ?>" class="btn btn-danger">delete</a>
        <a href="costomer_edit.php?id=<?php echo  $row['id']; ?>"  class="btn btn-success">edit</a>
		

      
      </td>
		<th><a class="btn btn-primary">pending</a></th>
		<th><a class="">1200</a></th>
		
      </tr>
		
		<?php
	}
	}
	
	
	?>
	
      
    </tbody>
  </table>

</div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>user Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
	body
{
	margin:auto;
	
	background:url('images/b2.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 1000%;
	opacity: 0.9;
	
	
}
.btns{
	float:right;
}



</style>
</head>
<body class="">
	
		<div class="container">
			<div class="jumbotron">
				
					<form  action = "" method= "POST">
					<input type="text"  name ="nid" placeholder="Enter your Nid Number" />
					<input type="submit" name ="search" value=" your room search "/>
					
					</form>
					
					
				
		
			
			</div>
		

			</br>
	
			
			
		
	
			
	
	
	</span>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<a href="#" class="list-group-item "> <i class="glyphicon glyphicon-dashboard"></i> Dashboard 
					</a>
				
					<a href="ours_room.php" class="list-group-item  "><i class="glyphicon glyphicon-user"></i>  add New room booking 
					</a>

					<a href="logout.php" class="list-group-item"><i class="glyphicon glyphicon-off"></i> Logout
					</a>
				</div>
				<?php
	$username = mysqli_query($conn,"SELECT * FROM `user_registation` WHERE `id` = '$user'");
	
	$userdata = mysqli_fetch_assoc($username);
	

	
	
	?>
	
				<div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> (Profile) <?php echo  $userdata['user_email']; ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="room.php"><span class="glyphicon glyphicon-user"> 	<div class="jumbotron">
		
<table class="table table-striped">
<h3 class=" badge text-wrap"> profile</h3>
<tr><th>Id:</th>
<td class="text-success bolder"><?php echo  $userdata['id']; ?></td>
</tr>
<tr><th>Name:</th>
<td class="text-success bolder"><?php echo  $userdata['User_name']; ?></td>
</tr>
<tr><th>Gmail:</th>
<td class="text-success bolder"><?php echo  $userdata['user_email']; ?></td>
</tr>
<?php
	$result=mysqli_query($conn,"SELECT * FROM user_registation inner join room_confirm on user_registation.user_email= room_confirm.email ");
	if (mysqli_num_rows($result)>0){
		$row =mysqli_fetch_assoc($result);
		
		?>
<tr><th>Nid :</th>
<td class="text-success ">
<td><?php echo $row['nid']; ?></td>
</td>
</tr>
<tr><th>Phone:</th>
<td class="text-success ">
<td><?php echo $row['phone']; ?></td>
</td>
</tr>

	
<?php
	}
	
	
	?>


</table>


</div></span></a></li>
          
		  </li>
          
        </ul>
      </div>
			</div>
			<div class="col-sm-9">
				<div class="content">
					<h1 class="text-primary"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard <small> Staticthis Area
					</small>
				</h1>
				<ol class="breadcrumb"> <li class="active"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard </li></ol>
					
					
					
					<div class="jumbotron">
					
			
  <h2>Customer Table</h2>
        
  <table  id="table_id"class="table  table-striped">
    <thead>
	
	
		<tr>
	     
    <th>ID </th>
      <th>Name</th>
	
		<th>room  checkin </th>
		<th>room  checkout </th>
    <th>room Cost </th>
    <th>room member</th>
    <th>time</th>
      </tr>
    </thead>
	<?php
	$result=mysqli_query($conn,"SELECT * FROM `room_confirm` ");
	while($row=mysqli_fetch_assoc($result)){
		
		?>
		
    <tbody>
      <tr>
      
		
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
		<td><?php echo date('d-M-Y',strtotime($row['checkin'])) ; ?></td>
        <td><?php echo date('d-M-Y',strtotime($row['checkout'])) ; ?></td>
        <td><?php echo $row['roomname']; ?></td>
        <td><?php echo $row['member']; ?></td>
        
        
      
      
       
        
		
	
      
        <td><?php echo date('d-M-Y',strtotime($row['time'])) ; ?></td>
		
      </tr>
		
		<?php
	}
	
	
	?>
      
    </tbody>
  </table>
  
					
					</div>
					
				</div>
				
			</div>
			
</div>
		
	</div>
	<footer>
		<p class="text-center"></p>
	</footer>

</body>
</html>