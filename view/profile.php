<?php
if (!isset($_SESSION['user'])) {
    echo 'Bạn chưa đăng nhập';
} else {
    extract($_SESSION['user']);
?>

    <table class="table table-bordered" style='text-align:center;'>
        <tr>
            <th>HỌ TÊN</th>
            <th>TÀI KHOẢN</th>
            <th>EMAIL</th>
            <th>ĐỊA CHỈ</th>
            <th>HÌNH ẢNH</th>
            <th>GIỚI TÍNH</th>
            <th>NGÀY SINH</th>
            <th></th>
        </tr>
        <tr>
            <td><?= $ho_ten ?></td>
            <td><?= $tai_khoan ?></td>
            <td><?= $email ?></td>
            <td><?= $dia_chi ?></td>
            <td><img width="100px" src="../uploads/khachhang/<?= $hinh_anh ?>"></td>
            <td><?= $gioi_tinh ?></td>
            <td><?= $ngay_sinh ?></td>
            <td><a href="index.php?act=editprofile&iduser=<?= $id ?>"><i class="fas fa-edit"></i></a></td>
        </tr>
    </table>


<?php
    echo '<a href="index.php?act=changepassword&iduser='.$id.'">Đổi mật khẩu</a>';
    echo '<a href="index.php?act=logout">Đăng xuất</a>';
} ?>