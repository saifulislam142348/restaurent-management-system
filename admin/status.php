<?php
 require_once 'config.php';
	
	if (isset($_GET['id'])){

		
		$id=$_GET['id'];

	
		$sql="UPDATE `room_confirm` SET`status`=1 WHERE id=$id'";

	
		mysqli_query($conn,$sql);
	}


	header('location: allroom.php');
?>
<?php

require_once 'config.php';
if (isset($_GET['id'])){

    
    $id=$_GET['id'];

 
    $sql="UPDATE `room_confirm` SET
        `status`=0 WHERE id='$id'";

 
    mysqli_query($conn,$sql);
}

// Go back to course-page.php
header('location: allroom.php');
?>
