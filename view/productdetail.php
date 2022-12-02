<link rel="stylesheet" href="css/spct.css">
<?php
if (is_array($sp)) {
    extract($sp);
}
?>
<div id="product-details">
    <div id="product-details-top">
    </div>
    <div id="product-details-bottom">
        <div id="product-details-left">
            <img src="../uploads/hanghoa/<?= $hinh_anh ?>">
            <h2>Mô tả</h2>
            <?php
            echo $mo_ta;
            ?>
        </div>
        <div id="product-details-right">
            <h3>CÀ PHÊ</h3>
            <h1><?= $ten_san_pham ?></h1>
            <h4>Giá: <?= $don_gia ?>VNĐ</h4>
            <!-- <div class="soluong">
                <div>-</div>
                <div>1</div>
                <div>+</div>
            </div> -->
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Số lượng" min="0" name="sltk" value='1'>
            </div>
            <button class="addhang" name="themhang">Thêm vào giỏ hàng</button>
        </div>
    </div>
</div>
<script src="script.js"></script>