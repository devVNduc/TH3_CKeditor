<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <a href="them_loaitin.php">Thêm loại tin</a>
    <table width="350">
        <tr>
            <td>Mã số</td>
            <td>Tên loại</td>
            <td>Trạng thái</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        <?php
        require 'dbcon.php';
        $sql = "select * from loaitin";
        $result = $conn->query($sql);
        while ($row = $result->fetch()) {
        ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><a href="sua_loaitin.php?id=<?php echo $row[0] ?>">Sửa</a></td>
                <td><a href="xoa_loaitin.php?id=<?php echo $row[0] ?>">Xóa</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>