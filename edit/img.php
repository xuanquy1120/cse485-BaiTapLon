<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "mycv");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
    $image = $_FILES['image']['name'];
  	// image file directory
    $target = "../img/".basename($image);
    $sql = "update  hinhanh set anhchinh='$image' where id='1'";  
  	// execute query
    mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Tải ảnh lên thành";
  	}else{
  		$msg = "Tải ảnh lên thất bại";
    }
  }
  if (isset($_POST['upload2'])) {
  	// Get image2 name
    $image2 = $_FILES['image2']['name'];
  	// image2 file directory
    $target = "../img/".basename($image2);
    $sql = "update  hinhanh set anhphu='$image2' where id='1'";  
  	// execute query
    mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['image2']['tmp_name'], $target)) {
  		$msg = "Tải ảnh lên thành";
  	}else{
  		$msg = "Tải ảnh lên thất bại";
    }
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
     border: 2px solid #cbcbcb;
     background-color: #f9f9f9;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
    background-color: #fff;
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div img{
    widows: 250px;
  border: 2px solid #cbcbcb;
  float: left;
     margin: 5px;
     width: 40%;
   	height: 100%;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }

</style>
  </head>
  <body>
  <?php
            require_once('header_edit.php');
            require_once('../dbsupport.php');
        ?>
<div class="row">
<div id="content">
          <?php
        // sql img
         $sql_img = 'select * from hinhanh where id="1"';
         $list_img=  executeresult_img($sql_img);

         foreach($list_img as $lists)
            {
                echo "<div id='img_div'>";
                echo "<img src='../img/".$lists['anhchinh']."' >";
                echo "<p>".$lists['anhchinh']."</p>";
              echo "</div>";
            }
         ?>

  <form method="POST" action="img.php" enctype="multipart/form-data">
	
  	<div>
  	  <input type="file" name="image" value="<?=$anhchinh?>">
      <br>
      <p>Ảnh đại diện chính</p>
      <div>
  		<button type="submit" name="upload" class="btn btn-success">lưu lại</button>
  	  </div>
  	</div>
  </form>
</div>
<div id="content">


          <?php
        // sql img
         $sql_img = 'select * from hinhanh where id="1"';
         $list_img=  executeresult_img($sql_img);

         foreach($list_img as $lists)
            {
                echo "<div id='img_div'>";
                echo "<img src='../img/".$lists['anhphu']."' >";
                echo "<p>".$lists['anhphu']."</p>";
              echo "</div>";
            }
         ?>

  <form method="POST" action="img.php" enctype="multipart/form-data">
	
  	<div>
  	  <input type="file" name="image2" value="<?=$anhphu?>">
      <br>
      <p>Ảnh đại diện phụ</p>
      <div>
  		<button type="submit" name="upload2" class="btn btn-success">lưu lại</button>
  	  </div>
  	</div>
  </form>
</div>
</div>
      <p class="text-center"><a href="../index_admin.php" class="btn btn-success">Quay lại</a></p>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>