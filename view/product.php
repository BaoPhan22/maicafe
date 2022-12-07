<link rel="stylesheet" href="css/product.css">

<div id="wp-products-new">
    <h2>TÁT CẢ SẢN PHẨM</h2>
    <ul id="list-products-new">
        <?php
        foreach ($dssp as $row) {
            extract($row);
            echo '
            <div class="item">
                <img src="../uploads/hanghoa/'.$hinh_anh.'" alt="" width="100%" height="300">
                <div class="infor">
                    <div class="infor-column">
                        <p>'.$ten_san_pham.'</p>
                        <p>Giá: '.$don_gia.' VNĐ</p>
                    </div>
                    <button class="hang" name="hang">Còn hàng</button>
                </div>
                <a class="name btn btn-primary" href="index.php?act=productdetail&idsp='.$id.'">Xem thêm</a>
            </div>
            ';
        }
        ?>


</div>

<script src="script.js"></script>