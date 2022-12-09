<?php
    session_start();
    ob_start();
    if (isset($_POST['themhang'])&&($_POST['themhang'])) {
        $hinh_anh=$_POST['hinh_anh'];
        $ten_san_pham=$_POST['ten_san_pham'];
        $don_gia=$_POST['don_gia'];
        // $sltk=$_POST['sltk'];
        $id=$_POST['id'];
        if(isset($_POST['sltk'])&&($_POST['sltk']>0)){
            $sltk=$_POST['sltk'];
        }else{
            $sltk=1;
        }
        //check trung sp
        if(checksp($id)>=0){
            $vitri=checksp($id);
            updatesoluong($vitri);
        } else{
            $sp=array($id,$ten_san_pham,$hinh_anh,$don_gia,$sltk);

            // $_SESSION['cart'][]=$sp; 
            if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
            array_push($_SESSION['cart'],$sp);
        }
        header('location: index.php?act=cart');

        // $sp=array($id,$ten_san_pham,$hinh_anh,$don_gia,$sltk);

        // // $_SESSION['cart'][]=$sp; 
        // if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        // array_push($_SESSION['cart'],$sp);
        // header('location: index.php?act=cart');
    }
    function updatesoluong($vitri){
        for($i=0;$i< sizeof($_SESSION['cart']);$i++){
            if($i==$vitri){
                $_SESSION['cart'][$i]['4']+=1+$_POST['sltk']-1;;
            }
        }
    }
    function checksp($id){
        $vitri=-1;
        for ($i=0;$i< sizeof($_SESSION['cart']);$i++){
            if($_SESSION['cart'][$i][0]==$id){
                $vitri=$i;
            }
        }
        return $vitri;
    }
?>