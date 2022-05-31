<div class="jumbotron">

<table class="table table-striped">
<h3 class=" badge text-wrap">Total costomer details<p class="bi bi-cast">1</p> </h3>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>comment</th>
    <th>time</th>
    <th>action</th>





</tr>
<?php
$costomer=mysqli_query($conn,"SELECT * FROM `user_comment`");
while($row=mysqli_fetch_assoc($costomer)) {
    # code...


?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['user_cmt_name']; ?></td>
    <td><?php echo $row['User_cmt_email']; ?></td>
    <td><?php echo $row['user_cmt']; ?></td>
    <td><?php echo $row['cmt_time']; ?></td>
    <td>
        <a class="btn btn-danger">delete</a>
        <a class="btn btn-success">Replay</a>

</td>
   
    
   


</tr>

<?php
}
?>


</table>


</div>