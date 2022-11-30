<?php
function getAllCustomer()
{
    $sql = "SELECT * FROM khachhang";
    return pdo_query($sql);
}
function createNewAccount() {
    
}
function logIn($taikhoan,$matkhau) {
    $sql = "SELECT * FROM khachhang WHERE tai_khoan = ".$taikhoan." AND mat_khau = ".$matkhau."";
    $account = pdo_query_one($sql);
    return $account;
}