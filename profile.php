<?php include_once('heder.php'); ?>
<?php include_once('config.php'); ?>

<div class = "jumbotron"> 
	<h2>your  details </h2>
      	
  <table  class="table table-hover  table-striped">
    <thead>
	
	
		
		<tr>
	     <th>ID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>password</th>
		<th>Nid</th>
		<th>Phone number</th>
        <th> total member</th>
		<th> room number</th>
        <th> check in</th>
        <th> check out</th>
		<th>Date_time</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php
	$result=mysqli_query($conn,"SELECT * FROM room_confirm INNER JOIN check_time
  ON room_confirm.id= check_time.id  ");
	while($row=mysqli_fetch_assoc($result)){
		
		?>
      <tr>
        <td><?php echo $row['id']; ?></td>
		
        <td><?php echo $row['User_name']; ?></td>
        <td><?php echo $row['user_email']; ?></td>
        <td><?php echo $row['User_password']; ?></td>
        <td><?php echo $row['nid']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['room_name']; ?></td>
        
   
        <td><?php echo $row['time']; ?></td>
		<td>
		<a href ="delete.php?id=<?=$row['id'];?>" class="btn btn-xs btn-danger"><i></i>Delete   </a>
		<a href ="edit.php?id=<?=$row['id'];?>" class="btn btn-xs btn-danger"><i></i>edit   </a>
		</td>
		
      </tr>
		
		<?php
	}
	
	
	?>
      
    </tbody>
  </table>
  
					</div>	
