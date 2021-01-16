<?php
require_once('../dbsupport.php');
$id = $_GET['id'];
$sql = "delete from kinhnghiem where id_kn = '$id'";
echo $sql;
execute($sql);
header("location: experience.php");
die();
 ?>