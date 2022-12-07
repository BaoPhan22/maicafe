<?php
    session_start();
    ob_start();
    if(isset($_SESSION['cart'])){
        if(isset($_GET['id'])){
            array_splice($_SESSION['cart'],$_GET['id'],1);
        }else{
            if(isset($_SESSION['cart'])) $_SESSION['cart']=(array) null;
            else  echo '<h1 style="text-align=center">Gi</h1>';
            // header('location: index.php?act=product ');
        }
        if(is_countable($_SESSION['cart'])>0) header('location: index.php?act=cart ');
        else  header('location: index.php?act=product ');
    }
?>