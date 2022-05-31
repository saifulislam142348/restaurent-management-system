<?php
// including the database connection file

include_once("config.php");

if(isset($_POST['update']))
{	

	
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$nid = mysqli_real_escape_string($mysqli, $_POST['nid']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);	
    $checkin = mysqli_real_escape_string($mysqli, $_POST['checkin']);	
    $checkout= mysqli_real_escape_string($mysqli, $_POST['checkout']);
    $member = mysqli_real_escape_string($mysqli, $_POST['member']);	
    $room_cost = mysqli_real_escape_string($mysqli, $_POST['roomname']);			
	
	// checking empty fields
	if(empty($name) || empty($email) || empty($nid)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($nid)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE room_confirm SET name='$name',email='$email', nid='$nid', phone=$phone,checkin =$checkin,checkout = $checkout, member=$member,roomname = $room_cost WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: profile.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM room_confirm WHERE id='$id' ");

while($row = mysqli_fetch_array($result))
{
    $id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
    $nid = $row['nid'];
    $phone = $row['phone'];
    $checkin = $row['checkin'];
    $checkout = $row['checkout'];
    $member = $row['member'];
    $room_cost = $row['roomname'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="profile.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="costomer_edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			
			<tr> 
				<td>Email</td>
				<input name="email" value="<?php echo $email;?>"></input>
			</tr>
            <tr> 
				<td>nid</td>
				<td> <input name="nid" value="<?php echo $nid;?>"></td>
			</tr>
            <tr> 
				<td>phone</td>
				<td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
			</tr>
            <tr> 
				<td>checkin</td>
				<td  name="checkin" value="<?php echo $checkin;?>"></td>
			</tr>
            <tr> 
				<td>checkout</td>
				<td name="checkout" value="<?php echo $checkout;?>"></td>
			</tr>
            <tr> 
				<td>member</td>
				<td><input type="number" name="member" value="<?php echo $member;?>"></td>
			</tr>
            <tr> 
				<td>Room_cost</td>
				<td name="roomname" value="<?php echo $room_cost ;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
