
 <?php include_once('../heder.php'); ?>
  <?php include_once('config.php'); ?>
  <?php
  if (isset($_POST['submit'])) {

    $room_name=$_POST['room_name'];
    $room_price=$_POST['room_price'];
    $room_catagory=$_POST['room_select'];
    $room_discription=$_POST['comment'];
   $target="room_images/".basename($_FILES['filename']['name']);

    $sql= mysqli_query($conn,"INSERT INTO `room_add`(`room_name`, `room_price`, `room_catagory`, `discription`, `photo`) VALUES ('$room_name', '$room_price', '$room_catagory', '$room_discription','$target')");
   
  }
move_uploaded_file(['filename']['name'], $target )


  ?>

 <body>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="container">
  <br>
  <div>
  <a class="nav-link" href="admin_index.php"><span class=" btn-lg btn-success" > back</span></a>
</div>
<br>
<div class="mb-3">

  <label  class="form-label bg-primary">Room name</label>
<select id="inputState" class="form-control" name="room_name" value=""/>
                                        <option selected>room...</option>
                                        <option>A1</option>
                                      <option >A2</option>
                                      <option>A3</option>
                                      <option >A4</option>
                                      <option >A5</option>
                                     <option>B1</option>
                                      <option >B2</option>
                                      <option>B3</option>
                                      <option >B4</option>
                                      <option >B5</option>
                              
                               </select>

<div class="mb-3">

  <label  class="form-label bg-primary">Room price</label>
  <input type="text" class="form-control" name="room_price" placeholder="room price">
</div>
<br>
<div class="mb-3">

  <label class="form-label bg-primary">Room catagory </label>
 
              <div class="">  
<select id="inputState" class="form-control" name="room_select" value=""/>
                                        <option selected>room select.</option>
                                        <option>single</option>
                                      <option >double </option>
                              
                               </select>
</div>
<br>
<div class="mb-3">
  <label class="form-label bg-primary"> Room Description</label>
  <textarea class="form-control"  name="comment" rows="3"></textarea>
</div>
<br>s
<div class="mb-3">

  <label  class="form-label bg-primary">room photo upload</label>
 
  <input type="file"   class="form-control" id="myFile" name="filename">
</div>
<br>
<div class="mb-3">

  <label  class="form-label bg-primary"> </label>
 
  <input type="submit"   class="btn-submit btn-success" name="submit"  placeholder="submit" value="submit">
</div>

</form>
</body>
</html>