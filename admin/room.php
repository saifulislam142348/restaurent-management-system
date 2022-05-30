
 <?php include_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title> admin home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
  <a class="nav-link" href="admin_index.php"><span class=" btn-lg btn-success" > back</span></a>
</div>

<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
  <br>
  
<br>
<div class="mb-3">

  <label  class="form-label bg-primary">Room name</label>
<input type="text"class="form-control" name="room_name" value="">
                                        
                                        
                            

<div class="mb-3">

  <label  class="form-label bg-primary">Room price</label>
  <input type="text" class="form-control" name="room_price" placeholder="room price">
</div>
<br>
<div class="mb-3">

  
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