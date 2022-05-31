<?php include_once('admin_heder.php'); ?>

<div class = "jumbotron"> 
	<h2>All customer details </h2>
      	
  <table  class="table table-hover  table-striped">
    <thead>
	
	
		
		<tr class="text-center">
	     <th>ID</th>
        <th>User Name</th>
        <th>Email</th>
        
		<th>Nid</th>
		<th>Phone number</th>
      
		
        <th> check in</th>
        <th> check out</th>
        <th> total member</th>
        <th> room price</th>
		<th>Date_time</th>
		<th >Action</th>
    <th>status</th>
      </tr>
    </thead>
    <tbody>
	<?php
	$result=mysqli_query($conn,"SELECT * FROM `room_confirm`  ");
	while($row=mysqli_fetch_assoc($result)){
		
		?>
      <tr>
        <td><?php echo $row['id']; ?></td>
		
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
  
        <td><?php echo $row['nid']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['checkin']; ?></td>
        <td><?php echo $row['checkout']; ?></td>
        <td><?php echo $row['member']; ?></td>
        <td><?php echo $row['roomname']; ?></td>
       
        <td><?php echo date('d-M-Y',strtotime($row['time'])) ; ?></td>
		<td>
		<a class=" btn btn-success" href="">Edit</a> 
     <a class="btn btn-danger" href="delete.php?id=<?php echo  $row['id']; ?>">Delete</a>
    
		</td>
		<td>
      <td >
     
      </td>
    </td>
      <?php
      if($row['status']==1){
   
        echo "<p>active</p>";
      }
      else{

        echo "<p>dective</p>";
      }

      
      
      ?>
  </td>
      

 
      </tr>
		
		<?php
	}
	
	
	?>
      
    </tbody>
  </table>
  
					</div>	
