<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/khachhang.php';
include 'header.php';
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    switch ($_GET['act']) {

            // start controller of cata
        case 'adddm':
            addOneCata();
            include 'danhmuc/add.php';
            break;
        case 'danhsachdanhmuc':
            include 'danhmuc/list.php';
            break;
        case 'deletedm':
            deleteOneCata();
            showAllCata();
            include 'danhmuc/list.php';
            break;
        case 'suadm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sql = "SELECT * FROM danhmuc WHERE id=" . $_GET['id'];
                $dm = pdo_query_one($sql);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            updateOneCata();
            showAllCata();
            header('location: index.php?act=danhsachdanhmuc');
            break;
            // end controller of cata

            // start controller product
        case 'addsp':
            addOneProduct();
            include 'sanpham/add.php';
            break;
        case 'danhsachsanpham':
            include 'sanpham/list.php';
            break;
        case 'deletesp':
            $target_dir = "../uploads/hanghoa/";
            $sqlchonhinhanhtudb = 'SELECT hinh_anh FROM sanpham WHERE id='.$_GET['id'];
            $tenhinhanh = pdo_query_one($sqlchonhinhanhtudb);
            $tenhinhanhbixoa = implode($tenhinhanh);
            $duongdanhinhanhbixoa=$target_dir.$tenhinhanhbixoa;
            if (is_file($duongdanhinhanhbixoa)) {
                unlink($duongdanhinhanhbixoa);
            }
            deleteOneProduct();
            showAllProduct();
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sql = "SELECT * FROM sanpham WHERE id=" . $_GET['id'];
                $sp = pdo_query_one($sql);
            }
            include 'sanpham/update.php';
            break;
        case 'updatesp':
            updateProDuct();
            showAllProduct();
            header('location: index.php?act=danhsachsanpham');
            break;
            // end controller of product

        case 'qlbinhluan':
            echo '<h1>Quản lí bình luận</h1>';
            break;
        case 'qlkhachhang':
            $kh = getAllCustomer();
            include 'khachhang/list.php';
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
