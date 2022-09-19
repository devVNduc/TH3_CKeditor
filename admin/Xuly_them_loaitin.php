<?php
require("dbcon.php"); //gọi file kết nối CSDL
$maloai = $_POST['maloai'];
$tenloai = $_POST['tenloai'];
$trangthai = $_POST['trangthai'];
$sql = "insert into LoaiTin values($maloai, '$tenloai', $trangthai)";
//echo $sql;
// mysql_query($sql);
$result = $conn->query($sql);
// mysql_close($con);
header("location: loaitin.php");
