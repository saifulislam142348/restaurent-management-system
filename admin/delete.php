<?php

include("config.php");


$id = $_GET['id'];


$result = mysqli_query($conn,"DELETE FROM `room_confirm` WHERE `id` = '$id' ");



?>

