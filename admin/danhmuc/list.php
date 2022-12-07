<?php
echo '<table class="container table">
    <tr>
        <th>MÃ LOẠI</th>
        <th>TÊN LOẠI</th>
        <th>STT</th>
        <th> <a href="index.php?act=adddm"><i class="fas fa-plus"></i></a> </th>
    </tr>';
$arr = showAllCata();
foreach ($arr as $row) {
    $suadm = "index.php?act=suadm&id=" . $row['id'];
    $xoadm = "index.php?act=deletedm&id=" . $row['id'];
    extract($row);
    echo '
        <tr>
            <td>' . $id . '</td>
            <td>' . $ten_danh_muc . '</td>
            <td>' . $stt . '</td>
            <td><a href="' . $suadm . '"><i class="fas fa-edit"></i></a> | <a href="' . $xoadm . '"><i class="fas fa-trash-alt"></i></a>
        </tr>
    ';
}

echo "</table>";
?>