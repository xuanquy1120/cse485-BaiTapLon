<?php
require_once('../dbsupport.php');
$id = $_GET['id'];
$sql = "delete from giaoduc where id_gd = '$id'";
echo $sql;
execute($sql);
header("location: education.php");
die();
 ?>