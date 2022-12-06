<?php
    session_start();
    ob_start();
    if (isset($_POST['themhang'])&&($_POST['themhang'])) {
        $hinh_anh=$_POST['hinh_anh'];
        $ten_san_pham=$_POST['ten_san_pham'];
        $don_gia=$_POST['don_gia'];
        $sltk=1;
        $id=$_POST['id'];

        $sp=array($id,$ten_san_pham,$hinh_anh,$don_gia,$sltk);

        // $_SESSION['cart'][]=$sp; 
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$sp);
        header('location: index.php?act=cart');
    }
?>