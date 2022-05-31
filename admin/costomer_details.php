<div class="jumbotron">

<table class="table table-striped">
<h3 class=" badge text-wrap">Total costomer details<p class="bi bi-cast">1</p> </h3>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>password</th>
    <th>Nid</th>
    <th>Phone</th>
    <th>action</th>





</tr>
<?php
$costomer=mysqli_query($conn,"SELECT * FROM `user_registation` inner join room_confirm on user_registation.user_email= room_confirm.email");
while($row=mysqli_fetch_assoc($costomer)) {
    # code...


?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['User_password']; ?></td>
    <td><?php echo $row['nid']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td>
        <a class="btn btn-danger">delete</a>
        <a class="btn btn-success">Edit</a>

</td>
   
    
   


</tr>

<?php
}
?>


</table>


</div>