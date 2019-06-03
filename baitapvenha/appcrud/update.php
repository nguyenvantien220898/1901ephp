<?php
include_once "config.php";
if (isset($_POST['ten']) && isset($_POST['giatien']) && isset($_POST['tonkho'])&& isset($_POST['nhacungcap'])&& isset($_POST['ngaytao'])) {
    if ($_POST['ten'] && $_POST['giatien'] && $_POST['tonkho'] && $_POST['nhacungcap']&& ($_POST['ngaytao'] > 0)) {
        $ten = $_POST['ten'];
        $giatien = $_POST['giatien'];
        $tonkho = $_POST['tonkho'];
        $nhacungcap = $_POST['nhacungcap'];
        $ngaytao = $_POST['ngaytao'];
        $sqlInsert = "UPDATE luongthuc SET ten='$ten',giatien='$giatien',tonkho=$tonkho,nhacungcap=$nhacungcap,ngaytao=$ngaytao WHERE id = " . (int) $_POST['id'];
        if (mysqli_query($connection, $sqlInsert)) {
            echo "Update thanh cong";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            echo "Update thất bại";
        }
    }
}
echo "<pre>";
print_r($_POST);
echo "</pre>";