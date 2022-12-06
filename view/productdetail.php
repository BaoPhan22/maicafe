<link rel="stylesheet" href="css/spct.css">
<?php
if (is_array($sp)) {
    extract($sp);
}
?>
<form action="addtocart.php" method="post">
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
            <input type="hidden" name="hinh_anh" value="<img src=../uploads/hanghoa/<?= $hinh_anh ?>">
            <input type="hidden" name="ten_san_pham" value="<?= $ten_san_pham ?>">
            <input type="hidden" name="don_gia" value="<?= $don_gia ?> ">
            <input type="hidden" name="id" value=" <?= $id?>" >
            <input type ="submit" class="addhang" name="themhang" value="Thêm vào giỏ hàng">
        </div>
    </div>
</div>
</form>
<script src="script.js"></script>