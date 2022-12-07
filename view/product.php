<link rel="stylesheet" href="css/product.css">

<div id="wp-products-new">
    <h2>SẢN PHẨM MỚI NHẤT</h2>
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

        <!-- <div class="item">
            <img src="./image/sp3.jpg" alt="">
            <div class="infor">
                <div class="infor-column">
                    <p>Cà phê Chocolate</p>
                    <p>Giá: 250.000 VNĐ</p>
                </div>
                <button class="hang" name="hang">Còn hàng</button>
            </div>
            <button class="name">Xem thêm</button>
        </div>
        <div class="item">
            <img src="./image/sp6.jpg" alt="">
            <div class="infor">
                <div class="infor-column">
                    <p>Cà phê Chocolate</p>
                    <p>Giá: 250.000 VNĐ</p>
                </div>
                <button class="hang" name="hang">Còn hàng</button>
            </div>
            <button class="name">Xem thêm</button>
        </div>
        <div class="item">
            <img src="./image/qua.jpg" alt="">
            <div class="infor">
                <div class="infor-column">
                    <p>Cà phê Chocolate</p>
                    <p>Giá: 250.000 VNĐ</p>
                </div>
                <button class="hang" name="hang">Còn hàng</button>
            </div>
            <button class="name">Xem thêm</button>
        </div> -->
    </ul>
    <div id="list-page-new">
        <div class="item">
            <a href="">1</a>
        </div>
        <div class="item">
            <a href="">2</a>
        </div>
        <div class="item">
            <a href="">3</a>
        </div>
        <div class="item">
            <a href="">4</a>
        </div>
    </div> -->
</div>
<div id="wp-products-seller">
    <h2>SẢN PHẨM BÁN CHẠY</h2>
    <ul id="list-products-seller">
        <div class="item">
            <img src="./image/sp5.jpg" alt="">
            <div class="infor">
                <div class="infor-column">
                    <p>Cà phê Chocolate</p>
                    <p>Giá: 250.000 VNĐ</p>
                </div>
                <button class="hang" name="hang">Còn hàng</button>
            </div>
            <button class="name">Xem thêm</button>
        </div>
        <div class="item">
            <img src="./image/sp3.jpg" alt="">
            <div class="infor">
                <div class="infor-column">
                    <p>Cà phê Chocolate</p>
                    <p>Giá: 250.000 VNĐ</p>
                </div>
                <button class="hang" name="hang">Còn hàng</button>
            </div>
            <button class="name">Xem thêm</button>
        </div>
        <div class="item">
            <img src="./image/sp6.jpg" alt="">
            <div class="infor">
                <div class="infor-column">
                    <p>Cà phê Chocolate</p>
                    <p>Giá: 250.000 VNĐ</p>
                </div>
                <button class="hang" name="hang">Còn hàng</button>
            </div>
            <button class="name">Xem thêm</button>
        </div>
        <div class="item">
            <img src="./image/qua.jpg" alt="">
            <div class="infor">
                <div class="infor-column">
                    <p>Cà phê Chocolate</p>
                    <p>Giá: 250.000 VNĐ</p>
                </div>
                <button class="hang" name="hang">Còn hàng</button>
            </div>
            <button class="name">Xem thêm</button>
        </div>
    </ul>
    <div id="list-page-seller">
        <div class="item">
            <a href="">1</a>
        </div>
        <div class="item">
            <a href="">2</a>
        </div>
        <div class="item">
            <a href="">3</a>
        </div>
        <div class="item">
            <a href="">4</a>
        </div>
    </div>
</div>
<script src="script.js"></script>