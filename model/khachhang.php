<?php
function getAllCustomer()
{
    $sql = "SELECT * FROM khachhang";
    return pdo_query($sql);
}
function createNewAccount()
{
    if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = $_POST['matkhau'];
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $sql = 'INSERT INTO khachhang (tai_khoan,mat_khau,ho_ten,email,dia_chi) VALUES ("' . $tendangnhap . '","' . $matkhau . '","' . $hoten . '","' . $email . '","' . $diachi . '")';
        pdo_query($sql);
    }
}
function logIn($taikhoan, $matkhau)
{
    $sql = "SELECT * FROM khachhang WHERE tai_khoan = '" . $taikhoan . "' AND mat_khau = '" . $matkhau . "'";
    $account = pdo_query_one($sql);
    return $account;
}
function updateProfile()
{
    if (isset($_POST['capnhatthongtin']) && $_POST['capnhatthongtin']) {
        $hoten = $_POST['hoten'];
        $taikhoan = $_POST['taikhoan'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        //img
        $hinhanh = basename($_FILES['hinhanh']['name']);
        $target_dir = "../uploads/khachhang/";
        $target_file = $target_dir . $hinhanh;
        move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
        //img
        $gioitinh = $_POST['gioitinh'];
        $ngaysinh = $_POST['ngaysinh'];
        $id = $_POST['id'];
        if (isset($hinhanh) && ($hinhanh != '')) {
            $duongdanhinhanhcu = $target_dir . $_POST['hinhanhold'];
            if (is_file($duongdanhinhanhcu)) {
                unlink($duongdanhinhanhcu);
            }
            $sql = "UPDATE khachhang SET ho_ten='$hoten',tai_khoan='$taikhoan',email='$email'
            ,hinh_anh='$hinhanh',dia_chi='$diachi',gioi_tinh='$gioitinh',ngay_sinh='$ngaysinh' 
            WHERE id=" . $id;
        } else {
            $sql = "UPDATE khachhang SET ho_ten='$hoten',tai_khoan='$taikhoan',email='$email'
            ,dia_chi='$diachi',gioi_tinh='$gioitinh',ngay_sinh='$ngaysinh' 
            WHERE id=" . $id;
        }
        return pdo_query($sql);
        // echo $sql;
    }
}
