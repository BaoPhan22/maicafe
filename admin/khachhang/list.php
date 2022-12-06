<table class="table">
    <tr>
        <th>HỌ TÊN</th>
        <th>TÀI KHOẢN</th>
        <th>EMAIL</th>
        <th>ĐỊA CHỈ</th>
        <th>HÌNH ẢNH</th>
        <th>GIỚI TÍNH</th>
        <th>NGÀY SINH</th>
    </tr>
    <?php
    foreach ($kh as $row) {
        extract($row);
        echo '
            <tr>
                <td>'.$ho_ten.'</td>
                <td>'.$tai_khoan.'</td>
                <td>'.$email.'</td>
                <td>'.$dia_chi.'</td>
                <td>'.$hinh_anh.'</td>
                <td>'.$gioi_tinh.'</td>
                <td>'.$ngay_sinh.'</td>
            </tr>
        ';
    }
    ?>
</table>