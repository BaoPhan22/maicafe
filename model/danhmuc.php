<?php
// hàm show tất cả các danh mục
function showAllCata()
{
    $sql = 'SELECT * FROM danhmuc';
    return pdo_query($sql);
}
// hàm xóa một danh mục
function deleteOneCata()
{
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $sql = "DELETE FROM danhmuc WHERE id=" . $_GET['id'];
        return pdo_query($sql);
    }
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}
// hàm sửa một danh mục
function updateOneCata()
{
    if (isset($_POST['capnhatdanhmuc']) && $_POST['capnhatdanhmuc']) {
        $tenloai = $_POST['tenloai'];
        $id = $_POST['id'];
        $stt = $_POST['stt_loai'];
        $sql = "UPDATE danhmuc SET ten_danh_muc = '$tenloai' WHERE id=" . $id;
        pdo_execute($sql);
        // echo $sql;
        $sql1 = "UPDATE danhmuc SET stt = '$stt' WHERE id=" . $id;
        // echo $sql1;
        pdo_execute($sql1);
    }
}
function addOneCata()
{
    if (isset($_POST['themmoidanhmuc']) && $_POST['themmoidanhmuc']) {
        $ten_loai = $_POST['tenloai'];
        $stt_loai = $_POST['stt_loai'];
        $sql = 'INSERT INTO danhmuc(ten_danh_muc,stt) VALUES ("' . $ten_loai . '",' . $stt_loai . ')';
        pdo_query($sql);
    }
}
