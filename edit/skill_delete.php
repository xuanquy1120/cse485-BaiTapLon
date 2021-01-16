<?php
require_once('../dbsupport.php');
$id = $_GET['id'];
$sql = "delete from kynangdev where id_kkd = '$id'";
echo $sql;
execute($sql);
header("location: skill.php");
die();
 ?>