<?php include_once('config.php'); ?>
<?php


if(isset($_POST['submit'])){
	
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
if(!$name==""){
	if(!$email=="")
	{
	if(!$password=="")
	{
	if(strlen($password)>6)	
	{
		$query=mysqli_query($conn,"SELECT * FROM  `admin_user` WHERE `email`='$email'");
if(mysqli_num_rows($query)==0){
		$result=mysqli_query($conn,"INSERT INTO `admin_user`( `name`, `email`, `password`) VALUES('$name','$email','$password')");
		if($result){
			$success='successfully';
		}else{
			
			
		}
	}else{
		
	}
	}
else{
	
}	
	}
	else{
		
	}
}else{
	
}


	
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	body
{
	margin:auto;
	padding-left:10%;

	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 1000%;
	opacity: 0.9;
	
	
}

}
</style>
</head>
<body>
	
		<h2>Register</h2>
	</div>
	<h2 class = "btn btn-success"><?php echo	$success  ?></h2>
	
	<form method="post" action="#">

	

	

	<label>Username</label><br>
			<input type="text" name="username" value=""><br>
		
			<label>Email</label><br>
			<input type="email" name="email" value=""><br>
	
		
			<label>password</label><br>
			<input type="password" name="password" value=""><br><br>
	
		
		
			<button type="submit" class="btn" name="submit">Register</button><br>
		
		<p>
			Already a member? <a href="admin_login.php">Sign in</a>
		</p>

	
			
	</form>
</body>
</html>