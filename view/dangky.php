<link rel="stylesheet" href="css/dangky.css">
<link rel="stylesheet" href="css/dangnhap.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"> </script>
<?php
if (!isset($_SESSION['user'])) {

?>
<link rel="stylesheet" href="css/dangky.css">
<body ng-app="b4" ng-controller="ctr1">
  

    
    <form name="form1" action="" id="form1">
        
        <h2 style="text-align: center;">ĐĂNG KÝ</h2>
        
        <p>
            <label for="">TÀI KHOẢN</label>
            <input required minlength="2" maxlength="30" ng-model="tendangnhap" name="tendangnhap" type="text" id="hoten" class="txt">
            <em ng-if="form1.tendangnhap.$invalid" class="loi">Nhập tên đăng nhập</em>
        </p>
        <p>
            <label for="">MẬT KHẨU</label>
            <input required minlength="2" maxlength="30" ng-model="Matkhau" name="matkhau" type="password" id="hoten" class="txt">
            <em ng-if="form1.matkhau.$invalid" class="loi">Xin mời nhập mật khẩu</em>
        </p>
        <p>
            <label for="">NHẬP LẠI MẬT KHẨU</label>
            <input required minlength="2" maxlength="30" ng-model="nlmk" name="nlmk" type="password" id="hoten" class="txt">
            <em ng-if="form1.nlmk.$invalid" class="loi">Xin mời nhập lại mật khẩu</em>
        </p>
        <p>
            <label for="">HỌ TÊN</label><br>
            <input required minlength="2" maxlength="30" ng-model="hoten" name="hoten" type="text" id="hoten" class="txt">
            <em ng-if="form1.hoten.$invalid" class="loi">Nhập họ tên từ 2 đến 30 ký tự</em>
        </p>
        <p>
            <label for="">EMAIL</label><br>
            <input ng-model="email" type="email" name="email" id="email" class="txt">
            <em ng-if="form1.email.$invalid    " class="loi">Nhập đúng gmail</em>
        </p>
        
        <fieldset id="fs1">
            <input ng-model="gioitinh" type="radio" name="gioitinh" value="1"><label for="">NAM</label>
            <input ng-model="gioitinh" type="radio" name="gioitinh" value="2"><label for="">NỮ</label><br>
            <em ng-if="!gioitinh>=1" class="loi">Chọn Giới tính</em>
        </fieldset>
        <div name="baoloi" id="baoloi">
        </div>
        <button class="button"  ng-model="button" >ĐĂNG KÝ</button>
        <br>
      <em class="loi" ng-if="(!form1.masv.$invalid) && (!form1.hoten.$invalid) && (!form1.email.$invalid ) && (gioitinh>=1) && (st1 ||st2 ||st3 || st4 || st5) && (qt>0) && (ghichu)">Nhập đúng</em>

    </form>
    

<script>
     app = angular.module("b4", []);
    app.controller("ctr1", xuly);
    function xuly($scope) {
    }
</script>
<?php
} else {
?>
<form id="thongbao-login" action="index.php">
            <h1 class="h1">Bạn đã đăng nhập</h1>
            <h5>Đăng xuất để có thể đăng ký</h5>
            <div class="back-index">
                <input type="submit" value="Quay về trang chủ">
            </div>
            <div id="dangxuat">
                <a href="index.php?act=logout">Đăng xuất</a>
            </div>
        </form>
<?php
}
?>
