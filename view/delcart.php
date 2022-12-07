<?php
    session_start();
    ob_start();
    if(isset($_SESSION['cart'])){
        if(isset($_GET['id'])){
            array_splice($_SESSION['cart'],$_GET['id'],1);
        }else{
            unset($_SESSION['cart']);
            // header('location: index.php?act=product ');
        }
        if(is_countable($_SESSION['cart'])>0) header('location: index.php?act=cart ');
        else  header('location: index.php?act=product ');
    }
?>