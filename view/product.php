<link rel="stylesheet" href="css/product.css">

<div id="wp-products-new">
    <h2>TÁT CẢ SẢN PHẨM</h2>
    <ul id="list-products-new">
        <?php
        foreach ($dssp as $row) {
            extract($row);
            echo '<form action="addtocart.php" method="post">
            <div class="item">
            <div class="form-group">
                <input type="hidden" type="number" class="form-control" placeholder="Số lượng" min="0" name="sltk" value="1">
            </div>
            <input type="hidden" name="hinh_anh" value="'. $hinh_anh.'">
            <input type="hidden" name="ten_san_pham" value="'. $ten_san_pham .'">
            <input type="hidden" name="don_gia" value="'. $don_gia .' ">
            <input type="hidden" name="id" value=" '. $id.'" >
                <a href="index.php?act=productdetail&idsp='.$id.'"><img src="../uploads/hanghoa/'.$hinh_anh.'" alt="" width="100%" height="300"></a>
                <div class="infor">
                    <div class="infor-column">
                    <p class="hang" name="hang">Còn hàng</p>
                        <p class="giasp">Giá: '.$don_gia.' VNĐ</p>
                        <p class="tensanpham">'.$ten_san_pham.'</p>
                    </div>
                </div>
                <input type="submit" name="themhang" class="name btn btn-primary" href="index.php?act=productdetail&idsp='.$id.'" value="Đặt hàng">
            </div>
            </form>
            ';
        }
        ?>


</div>

<script src="script.js"></script>