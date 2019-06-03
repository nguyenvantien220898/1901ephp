<?php
/**
 * Created by PhpStorm.
 * User: Tien Nguyen
 * Date: 30/05/2019
 * Time: 7:09 PM
 */
/**
 * Tạo ra 4 hằng số để kết nối đến CSDL
 *
 */
// cách khai báo hằng số
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "appcrud");
$connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
/**
 * Kiểm tra kết nối đến CSDL có thành công không
 * nếu không thành công sẽ ngắt chương trình
 */
if (!$connection) {
    die("Kết nối CSDL lỗi : " . mysqli_connect_error());
}