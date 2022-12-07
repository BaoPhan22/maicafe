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
        case 'dangky':
            createNewAccount();
            include 'dangky.php';
            // header('location: index.php?act=dangnhap');
            break;
        case 'cart':
            include 'cart.php';
            break;
        case 'dangnhap':
            if (isset($_POST['btn-login'])&&($_POST['btn-login'])) {
                $username = $_POST['tendangnhap'];
                $password = $_POST['matkhau'];
                $checkuser = logIn($username,$password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại!";
                }
            }
            include 'login.php';
            break;
        case 'backtoindex':
            include 'backtoindex.php';
            break;
        case 'logout':
            session_destroy();
            header('location: index.php');
            break;
        case 'profile':
            // $kh = getAllCustomer();
            include 'profile.php';
            break;
        case 'editprofile':
            if (isset($_GET['iduser']) && $_GET['iduser'] > 0) {
                $sql = "SELECT * FROM khachhang WHERE id=" . $_GET['iduser'];
                $kh = pdo_query_one($sql);
            }
            include 'editprofile.php';
            break;
        case 'updateprofile':
            updateProfile();
            header('location: index.php?act=profile');
            break;
        case 'changepassword':
            if (isset($_GET['iduser']) && $_GET['iduser'] > 0) {
                $sql = "SELECT * FROM khachhang WHERE id=" . $_GET['iduser'];
                $kh = pdo_query_one($sql);
            }
            include 'changepassword.php';
            break;
        case 'updatepassword':
            if (isset($_POST['doimatkhau'])&&($_POST['doimatkhau'])) {
                $matkhaucu = $_POST['matkhaucu'];
                $matkhaumoi = $_POST['matkhaumoi'];
                $nhaplaimatkhaumoi = $_POST['matkhaucu'];
                $sql = 'UPDATE khachhang SET `mat_khau` = "'.$matkhaumoi.'" WHERE `mat_khau` = "'.$matkhaucu.'"';
                pdo_query($sql);
            }
            break;
        case 'product':
            $dssp = showAllProduct('', 0);
            include 'product.php';
            break;
        case 'productdetail':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $sql = "SELECT * FROM sanpham WHERE id=" . $_GET['idsp'];
                $sp = pdo_query_one($sql);
                extract($sp);
                // $spcl = loadSPcungloai($id, $the_loai);
                include 'productdetail.php';
            } else {
                include 'body.php';
            }
            break;
        default:
            include 'body.php';
    }
} else {
    include 'body.php';
}
include 'footer.php';
