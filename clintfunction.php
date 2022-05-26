



<?php

require_once 'config.php';

if(isset($_POST['submit'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$nid=$_POST['nid'];
$phone=$_POST['phone'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$adult=$_POST['member'];

 $room =$_POST['room'];


      $query=mysqli_query($conn,"SELECT * FROM `room_confirm` WHERE `roomname`= ");
            if(mysqli_num_rows($query)==0){
        $sql = mysqli_query($conn,"INSERT INTO `room_confirm`(`name`, `email`, `nid`, `phone`, `checkin`, `checkout`, `member`, `roomname`) VALUES ('$name','$email','$nid','$phone','$checkin','$checkout','$adult','$adult','$room')");
if($sql){

  echo ' suceeess';
}
else
{
  echo "alredy room entry";
}




  
}



}

?>