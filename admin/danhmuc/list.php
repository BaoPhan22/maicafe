<?php
echo '<table>
    <tr>
        <th>MÃ LOẠI</th>
        <th>TÊN LOẠI</th>
        <th>STT</th>
        <th> <a href="index.php?act=adddm">Thêm mới</a> </th>
    </tr>';
$arr = showAllCata();
foreach ($arr as $row) {
    $suadm = "index.php?act=suadm&id=".$row['id'];
    $xoadm = "index.php?act=deletedm&id=".$row['id'];
    extract($row);
    echo '
        <tr>
            <td>' . $id . '</td>
            <td>' . $ten_danh_muc . '</td>
            <td>' . $stt . '</td>
            <td><a href="' . $xoadm . '">Xóa</a> | <a href="' . $suadm . '">Sửa</a>
        </tr>
    ';
}

echo "</table>";
?>