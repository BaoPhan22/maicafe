<link rel="stylesheet" href="css/product.css">

<div id="wp-products-new">
    <h2>SẢN PHẨM MỚI NHẤT</h2>
    <ul id="list-products-new">
        <?php
        foreach ($dssp as $row) {
            extract($row);
            echo '
            <div class="item">
                <img src="../uploads/hanghoa/'.$hinh_anh.'" alt="">
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