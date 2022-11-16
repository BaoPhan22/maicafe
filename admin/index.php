<?php
include '../model/pdo.php';
include 'header.php';
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    switch ($_GET['act']) {
        case 'qldanhmuc':
            include 'danhmuc/add.php';
            break;
        case 'qlsanpham':
            echo '<h1>Quản lí sản phẩm</h1>';
            break;
        case 'qlbinhluan':
            echo '<h1>Quản lí bình luận</h1>';
            break;
        case 'qlkhachhang':
            echo '<h1>Quản lí khách hàng</h1>';
            break;
        case 'thongke':
            echo '<h1>Thống kê</h1>';
            break;
        default:
            include 'body.php';
            break;
    }
} else {
    include 'body.php';
}
include 'footer.php';
