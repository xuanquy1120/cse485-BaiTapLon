<?php
require_once('../dbsupport.php');
$ten = $mota ='';
$id;
if(!empty($_POST)){
    if(isset($_POST['ten']))
    {
        $ten = $_POST['ten'];
    }
    if(isset($_POST['mota']))
    {
        $mota = $_POST['mota'];
    }

    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
    }
    if ($id != '')
    {
        $sql = "update sothich set ten = '$ten', mota = '$mota'  where id_st = ".$id;
        
    }
    else
    {
        $sql = "insert into sothich ( ten, mota, id) values 
        ('$ten','$mota','1')";
    }
    execute($sql);
    header('location: interests.php');
    die();
}
$id = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from sothich where id_st = '.$id;
    $list = executeresult_interests($sql);
    if($list != null && count($list) >0){
                $lists = $list[0];
                $ten = $lists["ten"];
                $mota = $lists["mota"];
    }
    else{
        $id = '';
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
  </head>
  <body>
  <div class="container">
        <div class="panel panel-primary">
        <div class="panel-body">
        <div class="page-header">
                        <h1>Sở thích</h1>
                    </div>
    <form method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group">
            <label for="Name">Tên</label>
            <input type="text" name="ten" id="ten" class="form-control" value="<?=$ten?>" >
        </div>
        <div class="form-group">
            <label for="Salary">Mô tả</label>
            <input type="text" name="mota" id="mota" class="form-control" value="<?=$mota?> " >
        </div>
        <div class="row" >
            <button class="btn btn-success">Lưu lại</button>
        </div>
            
    </form>
    
      </div>
      </div>
  </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>