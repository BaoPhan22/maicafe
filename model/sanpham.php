<?php
function addOneProduct()
{
    if (isset($_POST['themmoisanpham']) && $_POST['themmoisanpham']) {
        $tenhh = $_POST['tenhh'];
        $giahh = $_POST['giahh'];
        $theloai = $_POST['theloai'];
        $giamgiahh = 0;
        if (isset($_POST['giamgiahh']) && ($_POST['giamgiahh'] > 0))
            $giamgiahh = $_POST['giamgiahh'];
        $sltk = $_POST['sltk'];
        $hinhanhhh = basename($_FILES['hinhanhhh']['name']);
        $target_dir = "../uploads/hanghoa/";
        $target_file = $target_dir . $hinhanhhh;
        move_uploaded_file($_FILES['hinhanhhh']['tmp_name'], $target_file);
        $motahh = $_POST['motahh'];
        $ngaynhap = $_POST['ngaynhap'];
        $sql = 'INSERT INTO sanpham(id_danh_muc,ten_san_pham,don_gia,giam_gia,so_luong_ton_kho,mo_ta,hinh_anh,ngay_nhap) 
        VALUES (' . $theloai . ',"' . $tenhh . '",' . $giahh . ',' . $giamgiahh . ',' . $sltk . ',"' . $motahh . '","' . $hinhanhhh . '","' . $ngaynhap . '")';
        pdo_query($sql);
    }
}
function showAllProduct($kyw = "", $iddm = 0)
{
    // SELECT * FROM `sanpham` WHERE 1 AND `ten_san_pham` LIKE '%Cà phê%'
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != '') {
        $sql .= " AND ten_san_pham like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND id_danh_muc =" . $iddm . "";
    }
    return pdo_query($sql);
    // echo $sql;
}
function deleteOneProduct()
{
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $sql = "DELETE FROM sanpham WHERE id=" . $_GET['id'];
        return pdo_query($sql);
    }
    // $sql = "SELECT * FROM danhmuc";
    // return pdo_query($sql);
}
function updateProDuct()
{
    if (isset($_POST['capnhatsanpham']) && $_POST['capnhatsanpham']) {
        $tenhh = $_POST['tenhh'];
        $giahh = $_POST['giahh'];
        $giamgiahh = $_POST['giamgiahh'];
        $sltk = $_POST['sltk'];
        //img
        $hinhanhhh = basename($_FILES['hinhanhhh']['name']);
        $target_dir = "../uploads/hanghoa/";
        $target_file = $target_dir . $hinhanhhh;
        move_uploaded_file($_FILES['hinhanhhh']['tmp_name'], $target_file);
        //img
        $id_danh_muc = $_POST['iddm'];
        $motahh = $_POST['motahh'];
        $ngaynhap = $_POST['ngaynhap'];
        $id = $_POST['id'];
        if (isset($hinhanhhh) && ($hinhanhhh != '')) {
            $duongdanhinhanhcu = $target_dir . $_POST['hinhanhold'];
            if (is_file($duongdanhinhanhcu)) {
                unlink($duongdanhinhanhcu);
            }
            $sql = "UPDATE sanpham SET ten_san_pham='$tenhh',don_gia='$giahh',giam_gia='$giamgiahh'
            ,hinh_anh='$hinhanhhh',id_danh_muc='$id_danh_muc',so_luong_ton_kho='$sltk',mo_ta='$motahh',ngay_nhap='$ngaynhap' 
            WHERE id=" . $id;
        } else {
            $sql = "UPDATE sanpham SET ten_san_pham='$tenhh',don_gia='$giahh',giam_gia='$giamgiahh'
            ,id_danh_muc='$id_danh_muc',so_luong_ton_kho='$sltk',mo_ta='$motahh',ngay_nhap='$ngaynhap' 
            WHERE id=" . $id;
        }
        return pdo_query($sql);
        // echo $sql;
    }
}
// function loadTenDM($iddm)
// {
//     $sql = "SELECT * FROM sanpham WHERE id = " . $iddm;
//     $dm = pdo_query_one($sql);
//     extract($dm);
//     return $ten_loai;
// }