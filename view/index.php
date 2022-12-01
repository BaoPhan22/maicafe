<?php
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
            include 'cart.php';
            break;
        case 'product':
            include 'product.html';
            break;
        default:
            include 'body.php';
    }
} else {
    include 'body.php';
}
include 'footer.php';
