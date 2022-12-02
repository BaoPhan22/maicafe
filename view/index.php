<?php
include '../model/sanpham.php';
include '../model/danhmuc.php';
include '../model/pdo.php';
include '../model/khachhang.php';

include 'header.php';
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    switch ($_GET['act']) {
        case 'about':
            include 'about.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'dangnhap':
            include 'dangnhap.html';
            break;
        case 'dangky':
            include 'dangky.html';
            break;
        case 'cart':
            include 'cart.html';
            break;
        case 'product':
            include 'product.html';
            break;
    }
} else {
    include 'body.php';
}
include 'footer.php';
