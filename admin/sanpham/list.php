
<?php
if (isset($_GET['idcata']) && ($_GET['idcata'] > 0)) {
    $idcata = $_GET['idcata'];
    $arr = showAllProduct("", $idcata);
}
else {
    $arr = showAllProduct('',0);
}
echo '<table class="container">
    <tr>
        <th>MÃ SẢN PHẨM</th>
        <th>LOẠI HÀNG</th>
        <th>TÊN SẢN PHẨM</th>
        <th>ĐƠN GIÁ</th>
        <th>GIẢM GIÁ</th>
        <th>SỐ LƯỢNG TỒN KHO</th>
        <th>MÔ TẢ</th>
        <th>HÌNH ẢNH</th>
        <th>NGÀY NHẬP</th>
        <th> <a href="index.php?act=addsp"><i class="fas fa-plus"></i></a> </th>
    </tr>';

// $tendanhmuc = '';
foreach ($arr as $row) {
    $suasp = "index.php?act=suasp&id=" . $row['id'];
    $xoasp = "index.php?act=deletesp&id=" . $row['id'];
    extract($row);
    // if ($id_danh_muc==11)
    // $tendanhmuc = "Cà phê";
    // elseif ($id_danh_muc==12)
    // $tendanhmuc = "Dụng cụ pha cà phê";
    // else 
    // $tendanhmuc = 'Ly';
    echo '
        <tr>
            <td>' . $id . '</td>
            <td>' . $id_danh_muc . ' </td>
            <td>' . $ten_san_pham . '</td>
            <td>' . $don_gia . '</td>
            <td>' . $giam_gia . '</td>
            <td>' . $so_luong_ton_kho . '</td>
            <td>' . $mo_ta . '</td>
            <td> <img width="100" src="../uploads/hanghoa/' . $hinh_anh . '"></td>
            <td>' . $ngay_nhap . '</td>
            <td><a href="' . $suasp . '"><i class="fas fa-edit"></i></a> | <a href="' . $xoasp . '"><i class="fas fa-trash-alt"></i></a>
        </tr>
    ';
}

echo "</table>";
?>