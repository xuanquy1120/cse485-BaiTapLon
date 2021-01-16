<?php
require_once('../dbsupport.php');
$ten = $ngaysinh = $gioitinh = $sodt = $email = $diachi= $mota  = $matkhauemail='';
$id;
if(!empty($_POST)){
    if(isset($_POST['ten']))
    {
        $ten = $_POST['ten'];
    }
    if(isset($_POST['ngaysinh']))
    {
        $ngaysinh = $_POST['ngaysinh'];
    }
    if(isset($_POST['gioitinh']))
    {
        $gioitinh = $_POST['gioitinh'];
    }
    if(isset($_POST['sodt']))
    {
        $sodt = $_POST['sodt'];
    }
    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
    }
    if(isset($_POST['diachi']))
    {
        $diachi = $_POST['diachi'];
    }
    if(isset($_POST['mota']))
    {
        $mota = $_POST['mota'];
    }
    if(isset($_POST['matkhauemail']))
    {
        $matkhauemail = $_POST['matkhauemail'];
    }
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
    }
    if ($id != '')
    {
        $sql = "update thongtin set ten = '$ten', ngaysinh = '$ngaysinh', gioitinh = '$gioitinh' ,
        sodt = '$sodt', email = '$email' ,diachi = '$diachi', mota = '$mota', matkhauemail = '$matkhauemail' 
        where id_tt = ".$id;
        
    }
    else
    {
        $sql = "insert into thongtin ( ngaysinh, gioitinh, sodt, email, diachi, mota, id, matkhauemail,ten) values 
        ('$ngaysinh','$gioitinh','$sodt','$email','$diachi','$mota','1','$matkhauemail','$ten')";
    }
    execute($sql);
    header('location: information.php');
    die();
}
$id = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from thongtin where id_tt = '.$id;
    $list = executeresult_information($sql);
    if($list != null && count($list) >0){
                $lists = $list[0];
                $ten = $lists["ten"];
                $ngaysinh = $lists["ngaysinh"];
                $sodt = $lists["sodt"];
                $email = $lists["email"];
                $matkhauemail = $lists["matkhauemail"];
                $gioitinh = $lists["gioitinh"];
                $diachi = $lists["diachi"];
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
                        <h1>Chỉnh Sửa thông tin</h1>
                    </div>
    <form method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group">
            <label for="Name">Tên</label>
            <input type="text" name="ten" id="ten" class="form-control" value="<?=$ten?>" >
        </div>
        <div class="form-group">
            <label for="Address">Ngày Sinh</label>
            <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" value="<?=$ngaysinh?>" >
        </div>
        <div class="form-group">
            <label for="Salary">Giới Tính</label>
            <br>
            <input type="radio" name="gioitinh" id="gioitinh"  value="nam" <?php if($gioitinh=="nam"){echo"checked";}?>  >
            <label for="gioitinh"> nam</label>
            <input type="radio" name="gioitinh" id="gioitinh"  value="nữ" <?php if($gioitinh=="nữ"){echo"checked";}?>>
            <label for="gioitinh"> nữ</label><br>
        </div>
        <div class="form-group">
            <label for="Name">Số điện thoại</label>
            <input type="text" name="sodt" id="sodt" class="form-control" value="<?=$sodt?>" >
        </div>
        <div class="form-group">
            <label for="Address">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?=$email?>" >
        </div>
        <div class="form-group">
            <label for="Salary">Mật khẩu email</label>
            <input type="text" name="matkhauemail" id="matkhauemail" class="form-control" value="<?=$matkhauemail?>" >
        </div>
        <div class="form-group">
            <label for="Salary">Địa chỉ</label>
            <input type="text" name="diachi" id="diachi" class="form-control" value="<?=$diachi?>" >
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