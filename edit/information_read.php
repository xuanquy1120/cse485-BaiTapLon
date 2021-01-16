<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"])))
{
    define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mycv');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $sql = "SELECT * FROM thongtin WHERE id_tt  = ?";
    if($stmt = mysqli_prepare($link, $sql))
    {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = trim($_GET["id"]);
        if(mysqli_stmt_execute($stmt))
        {
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $ten = $row["ten"];
                $ngaysinh = $row["ngaysinh"];
                $sodt = $row["sodt"];
                $email = $row["email"];
                $matkhauemail = $row["matkhauemail"];
                $gioitinh = $row["gioitinh"];
                $diachi = $row["diachi"];
                $mota = $row["mota"];
            }
            else
            {
               
                exit();
            }
        }
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
else
{
    
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Thông tin chi tiết</h1>
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <p class="form-control-static"><?php echo $row["ten"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <p class="form-control-static"><?php echo $row["ngaysinh"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <p class="form-control-static"><?php echo $row["sodt"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $row["email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu email</label>
                        <p class="form-control-static"><?php echo $row["matkhauemail"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>giới tính</label>
                        <p class="form-control-static"><?php echo $row["gioitinh"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <p class="form-control-static"><?php echo $row["diachi"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>mô tả</label>
                        <p class="form-control-static"><?php echo $row["mota"]; ?></p>
                    </div>
                    <p><a href="information.php" class="btn btn-success">Quay lại</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>