<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form name="form1" action="xuly_sua_loaitin.php" method="post">
    <?php
    require 'dbcon.php';
    $id = $_GET["id"];
    $sql = "select * from loaitin where maloai = " . $id;
    $result = $conn->query($sql);
    while ($row = $result->fetch()) {
    ?>
        <input type="text" name="maso" value="<?php echo $row[0] ?>" readonly><br>
        <input type="text" name="ten" value="<?php echo
                                                        $row[1] ?>"><br>
        <input type="text" name="trangthai" value="<?php echo
                                                    $row[2] ?>"><br>
    <?php
    }
    ?>
    <input type="submit" value="Lưu">
</form>