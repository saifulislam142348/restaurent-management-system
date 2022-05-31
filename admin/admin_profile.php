
			  	
<?php


require_once 'config.php';

$user = $_SESSION['id'];


?>
			  	
<div class="jumbotron">
<?php
	$username = mysqli_query($conn,"SELECT * FROM `admin_user` WHERE `id` = '$user'");
	
	$userdata = mysqli_fetch_assoc($username);
	

	
	
	?>
	

<table class="table table-striped">
<h3 class=" badge text-wrap">Admin profile</h3>
<tr><th>Id:</th>
<td class="text-success"><?php echo  $userdata['id']; ?></td>
</tr>
<tr><th>Name:</th>
<td class="text-success bolder"><?php echo  $userdata['name']; ?></td>
</tr>
<tr><th>Gmail:</th>
<td class="text-success bolder"><?php echo  $userdata['email']; ?></td>
</tr>
<tr><th>password :</th>
<td class="text-success "><?php echo  $userdata['password']; ?></td>
</tr>





</table>


</div>