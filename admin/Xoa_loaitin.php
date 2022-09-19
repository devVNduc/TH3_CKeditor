<?php
require("dbcon.php");
$maso = $_GET["id"];
$sql = "delete from loaitin where maloai = $maso";
$query->execute();
header("location: loaitin.php");
