<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
/**
 * nạp kết nối csdl vào file này
 */
include_once "config.php";
$ten ='';
$giatien ='';
$tonkho ='';
$ngaycungcap ='';
$ngaytao ='';

if (isset($_GET['id'])){
    $luongthuc_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM luongthuc WHERE id = " . $luongthuc_id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);

    //cú pháp rút gọn của if else(condition ? câu lệnh chạy khi đk la true: câu lệnh chạy k được khi đk = false
    $ten = isset($row['ten']) ? $row['ten'] : '';
    $giatien = isset($row['giatien']) ? $row['giatien'] : '';
    $tonkho = isset($row['tonkho']) ? $row['tonkho'] : '';
    $ngaycungcap = isset($row['ngaycungcap']) ? $row['ngaycungcap'] : '';
    $ngaytao = isset($row['ngaytao']) ? $row['ngaytao'] : '';


}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa nhân viên </h1>

            <div>
                <form name="create" action="" method="post">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="ten" value="<?php echo $ten ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá Tiền</label>
                        <input type="text" class="form-control" name="giatien" value="<?php echo $giatien ?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn Kho</label>
                        <input type="text" class="form-control" name="tonkho" value="<?php echo $tonkho ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày Cung Cấp</label>
                        <input type="text" class="form-control" name="ngaycungcap" value="<?php echo $ngaycungcap ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày Tạo</label>
                        <input type="text" class="form-control" name="ngaytao" value="<?php echo $ngaytao ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>