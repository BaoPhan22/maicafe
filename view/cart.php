
<?php
  // session_start();  
  if(isset($_SESSION['cart'])){
  // echo var_dump($_SESSION['cart']);
    
?>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <link rel="stylesheet" href="css/cart.css" />
  <body ng-app="b4" ng-controller="ctr1">
    <div class="container">
      <form name="form1" action="" id="form1">
        <h1 style="text-align: center">ĐẶT HÀNG</h1>

        <p class="border-bottom">
          <label for="">HỌ</label><br><br>
          <input
            required
            minlength="2"
            maxlength="30"
            ng-model="tendangnhap"
            name="tendangnhap"
            type="text"
            id="hoten"
            class="txt"
          />
          <em ng-if="form1.tendangnhap.$invalid" class="loi">NHẬP HỌ </em>
        </p>

        <p class="border-bottom">
          <label for="">TÊN</label><br /><br>
          <input
            required
            minlength="2"
            maxlength="30"
            ng-model="hoten"
            name="hoten"
            type="text"
            id="hoten"
            class="txt"
          />
          <em ng-if="form1.hoten.$invalid" class="loi">NHẬP TÊN </em>
        </p>
        <p class="border-bottom">
          <label for="">ĐỊA CHỈ</label><br /><br>
          <input
            required
            minlength="2"
            maxlength="30"
            ng-model="diachi"
            name="diachi"
            type="text"
            id="diachi"
            class="txt"
          />
          <em ng-if="form1.hoten.$invalid" class="loi">NHẬP DỊA CHỈ </em>
        </p>
        <p class="border-bottom">
          <label for="">SỐ ĐIỆN THOẠI</label><br /><br>
          <input
            required
            minlength="2"
            maxlength="11"
            ng-model="phone"
            name="phone"
            type="tel"
            id="phone"
            class="txt"
          />
          <em ng-if="form1.hoten.$invalid" class="loi">NHẬP SỐ ĐIỆN THOẠI </em>
        </p>
        <p class="border-bottom">
          <label for="">GHI CHÚ</label><br /><br>
          <input
            ng-model="ghichu"
            type="text"
            name="ghichu"
            id="ghichu"
            class="txt"
          />
          <em ng-if="form1.email.$invalid " class="loi">Nhập đúng gmail</em>
        </p>
        <h5>PHƯƠNG THỨC THANH TOÁN</h5>
        <fieldset id="fs1">
          <input
            ng-model="gioitinh"
            type="radio"
            name="gioitinh"
            value="1"
          /><label for="">COD (Thanh toán khi nhập hàng)</label><br />
          <input
            ng-model="gioitinh2"
            type="radio"
            name="gioitinh"
            value="2"
          /><label for="">ATM</label><br /><br>
          <em ng-if="!gioitinh>=1" class="loi">CHỌN PHƯƠNG THỨC THANH TOÁN</em><br><br>
        </fieldset>
        <div name="baoloi" id="baoloi"></div>
        <button class="button" ng-model="button">TẠO ĐƠN HÀNG</button>
        <br />
        <br>
        <em
          class="loi"
          ng-if="(!form1.masv.$invalid) && (!form1.hoten.$invalid) && (!form1.email.$invalid ) && (gioitinh>=1) && (st1 ||st2 ||st3 || st4 || st5) && (qt>0) && (ghichu)"
          >Nhập đúng</em
        >
      </form>
      <div>
        <form name="form1" action="" id="form1">
          <?php
            $tong=0;
            $i=0;    
            foreach($_SESSION['cart'] as $sp){
                $ttien=$sp[3]*$sp[4];
                $tong+=$ttien;
                echo'<div class="sanpham border-bottom">
                <div class="itemsp">
                  <input type="hidden" name="id" value="'.($i+1).'">
                    <img class="spgiohang" src="../uploads/hanghoa/'.$sp[2].'" alt="" />
                  <div>
                    <h5>'.$sp[1].' x'.$sp[4].'  </h5>
                    <p>250g</p>
                    <p class="giasp">'.$ttien.' VNĐ</p>
                    <div class="delcart"><a href="delcart.php?id='.$i.'"><i class="fa-solid fa-square-xmark"></i></a></div>
                  </div>
                </div>
              </div>';
              $i++;
            }
          ?>
          <div class="magiamgia">
            <h4>Mã giảm giá</h4>
            <input type="text" class="name" placeholder="Nhập mã" />
            <button class="apma">Áp mã</button>
        </div> 
          <div class="tdh">
              <h4>Tổng đơn hàng:</h4><h3><?= $tong ?> VNĐ</h3>
          </div>
          <div class="ttdh">
            <div class="del-allcart"><a href="delcart.php">Xoá giỏ hàng</a></div>
            <div class="continue-cart"><a  href="index.php?act=product">Tiếp tục đặt hàng</a></div>
          </div>
        </form>
      </div>
    </div>
  </body>
<script>
  app = angular.module("b4", []);
  app.controller("ctr1", xuly);
  function xuly($scope) {}
</script>
<?php
    }else{
      echo'<br>Giỏ hàng rỗng';
      header('location:index.php?act=product');
    }
?>
