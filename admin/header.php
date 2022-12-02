<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($namePage) && $namePage != '') echo $namePage;
            else echo 'Admin' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/khachhang.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>
    <nav id="menu-container">
        <h3>Trang quản trị</h3>
        <ul>
            <li class="menu-anchor"><a href="index.php?act=adddm">Danh mục<span><i class="fas fa-caret-down"></i></span></a>
                <ul class="sub-menu">
                    <li><a href="index.php?act=adddm">Thêm danh mục</a></li>
                    <li><a href="index.php?act=danhsachdanhmuc">Danh sách</a>

                    </li>
                </ul>
            </li>
            <li class="menu-anchor"><a href="index.php?act=addsp">Sản phẩm<span><i class="fas fa-caret-down"></i></span></a>
                <ul class="sub-menu">
                    <li><a href="index.php?act=addsp">Thêm sản phẩm</a></li>
                    <li><a href="index.php?act=danhsachsanpham">Danh sách<span><i class="fas fa-caret-down"></i></span></a>
                        <ul class="sub-sub-menu">
                            <?php
                            $arr = showAllCata();
                            foreach ($arr as $a) {
                                echo '<li><a href="index.php?act=danhsachsanpham&idcata='.$a['id'].'">' . $a['ten_danh_muc'] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-anchor"><a href="index.php?act=qlkhachhang">Khách hàng<span><i class="fas fa-caret-down"></i></span></a></li>
            <li class="menu-anchor"><a href="index.php?act=qlbinhluan">Bình luận<span><i class="fas fa-caret-down"></i></span></a></li>
            <li class="menu-anchor"><a href="index.php?act=thongke">Thống kê<span><i class="fas fa-caret-down"></i></span></a></li>
            <li class="menu-anchor"><a href="../view/index.php">Xem Website</a></li>
        </ul>
    </nav>

    <!-- <script src="js/activepage.js"></script> -->