<?php
require_once('../dbsupport.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- navbarr -->
        <?php
            require_once('header_edit.php')
        ?>
         <div class="container-fluid">
      <div class="row">
      <table style="text-align: center;" class="table table-striped">
      <tr>
          <th >ID</th>
          <th >Tên</th>
          <th >Số Điện Thoại</th>
          <th >Email</th>
          <th ></th>
          <th ></th>
          <!-- <th ></th> -->
         
      </tr>
  
  
  <?php
  // sql information
  $sql_information = 'select * from thongtin where id="1"';
  $list_information =  executeresult_information($sql_information);
  

  foreach($list_information as $lists)
  {
    echo'<tr>
            <td >'.$lists['id_tt'].'</td>
            <td >'.$lists['ten'].'</td>
            <td >'.$lists['sodt'].'</td>
            <td >'.$lists['email'].'</td>
            <td><a href="information_read.php?id='.$lists['id_tt'].'"<i class="fas fa-eye"></i></a></td>
            <td><a href="infomation_update.php?id='.$lists['id_tt'].'"<i class="far fa-edit"></i></a></td>
            
        </tr> ';
  }
  ?>
   <!-- <td><a href="information_delete.php?id='.$lists['id_tt'].'"<i class="fas fa-trash-alt"></i></a></td> -->
</table>
      </div>
      <p class="text-center"><a href="../index_admin.php" class="btn btn-success">Quay lại</a></p>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>