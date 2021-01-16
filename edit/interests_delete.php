<?php
require_once('../dbsupport.php');
$id = $_GET['id'];
$sql = "delete from sothich where id_st = '$id'";
echo $sql;
execute($sql);
header("location: interests.php");
die();
 ?>