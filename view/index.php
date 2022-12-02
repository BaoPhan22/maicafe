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
<<<<<<< HEAD
            include 'cart.php';
            break;
        case 'product':
            $dssp = showAllProduct('',0);
            include 'product.php';
            break;
        default:
            include 'body.php';
=======
            include 'cart.html';
            break;
        case 'product':
            include 'product.html';
            break;
>>>>>>> dfa12f5abc84f58c1689c0be812460b329c88ace
    }
} else {
    include 'body.php';
}
include 'footer.php';
