<?php
require_once('../dbsupport.php');
$id = $_GET['id'];
$sql = "delete from thongtin where id_tt = '$id'";
echo $sql;
execute($sql);
header("location: information.php");
die();
 ?>