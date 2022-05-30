

<?php

require_once 'config.php';

if(isset($_POST['login'])){
	


	$email=$_POST['email'];
	$password=$_POST['password'];

$email_check=mysqli_query($conn,"SELECT * FROM `admin_user`  WHERE `email`='$email' && `password`= '$password'");
if(mysqli_num_rows($email_check)>0){
	
	$row=mysqli_fetch_assoc($email_check);
	
	if($row['password']==$password);
	{
		$_SESSION['id'] = $row['id'];
		
		header('location:admin_index.php');
		echo 'successfully';
	}
}
	
	else{
		$wrong_email='Wrong Email & Password ,please Enter the Regiter Email & password';
		
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
  min-height: 80%;
  opacity: 0.9;
  
  
}


</style>
</head>
<body>

    <h2>Login</h2>
  </div>
  
  <form  method="post" action="#">

    

   
      <label> your gmail</label><br>
      <input type="email" name="email" ><br>
    
    <br>
    
      <label>Password</label><br>
      <input type="password" name="password"><br><br>
    
   
      <button type="submit" class="btn" name="login">Login</button><br>
  
    <p>
      Not yet a member? <a href="admin_register.php">Sign up</a><br>
    </p>
  </form>


</body>
</html>