<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include 'header.php';
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    switch ($_GET['act']) {

        // start controller of cata
        case 'adddm':
            if (isset($_POST['themmoidanhmuc']) && $_POST['themmoidanhmuc']) {
                $ten_loai = $_POST['tenloai'];
                $stt_loai = $_POST['stt_loai'];
                $sql = 'INSERT INTO danhmuc(ten_danh_muc,stt) VALUES ("' . $ten_loai . '",' . $stt_loai . ')';
                pdo_query($sql);
            }
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
            include 'sanpham/add.php';
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
