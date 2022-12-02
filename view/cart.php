
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
            ng-model="hoten"
            name="hoten"
            type="text"
            id="hoten"
            class="txt"
          />
          <em ng-if="form1.hoten.$invalid" class="loi">NHẬP DỊA CHỈ </em>
        </p>
        <p class="border-bottom">
          <label for="">SỐ ĐIỆN THOẠI</label><br /><br>
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
          <em ng-if="form1.hoten.$invalid" class="loi">NHẬP SỐ ĐIỆN THOẠI </em>
        </p>
        <p class="border-bottom">
          <label for="">GHI CHÚ</label><br /><br>
          <input
            ng-model="email"
            type="email"
            name="email"
            id="email"
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
          <div class="sanpham border-bottom" id="sanpham">
            <div class="itemsp">
              <div>
                <img class="spgiohang" src="./img/spcafe.jpg" alt="" />
              </div>
              <div>
                <h5>Timor laclo x1</h5>
                <p class="giasp">250g</p>
                <p class="tensp">Whole Beans</p>
              </div>
            </div>
            <div class="itemgia">
              <p>$19.50</p>
            </div>
          </div>

          <div class="sanpham border-bottom" id="sanpham">
            <div class="itemsp">
              <div>
                <img class="spgiohang" src="./img/spcafe.jpg" alt="" />
              </div>
              <div>
                <h5>Timor laclo x1</h5>
                <p class="giasp">250g</p>
                <p class="tensp">Whole Beans</p>
              </div>
            </div>
            <div class="itemgia">
              <p>$19.50</p>
            </div>
          </div>
          <div class="magiamgia">
            <h4>Mã giảm giá</h4>
            <input type="text" class="name" placeholder="Nhập mã" />
            <button class="apma">Áp mã</button>
          </div>
          <div class="tdh">
            <div>
              <h4>Tổng đơn hàng</h4>
            </div>
            <div class="giadh">$15.95</div>
          </div>

          <div class="tdh">
            <div>
              <h4>Tổng đơn hàng</h4>
            </div>
            <div class="giadh">$15.95</div>
          </div>
          <div class="tdh">
            <div>
              <h4>Tổng đơn hàng</h4>
            </div>
            <div class="giadh">$15.95</div>
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
