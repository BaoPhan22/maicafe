<link rel="stylesheet" href="css/dangky.css">

<body ng-app="b4" ng-controller="ctr1">



    <form name="form1" action="index.php?act=dangky" method="post" enctype="multipart/form-data" id="form1">

        <h1 style="text-align: center;">ĐĂNG KÝ</h1>

        <p>
            <label for="">TÀI KHOẢN :</label>
            <input required minlength="2" maxlength="30" ng-model="tendangnhap" name="tendangnhap" type="text" id="hoten" class="txt"><br>

        </p>
        <em ng-if="form1.tendangnhap.$invalid" class="loi">Nhập tên đăng nhập</em>
        <p>
            <label for="">MẬT KHẨU :</label>
            <input required minlength="2" maxlength="30" ng-model="Matkhau" name="matkhau" type="text" id="hoten" class="txt"><br>

        </p>
        <em ng-if="form1.matkhau.$invalid" class="loi">Xin mời nhập mật khẩu</em>
        <p>
            <label for="">NHẬP LẠI MẬT KHẨU :</label>
            <input required minlength="2" maxlength="30" ng-model="nlmk" name="nlmk" type="text" id="hoten" class="txt"><br>

        </p>
        <em ng-if="form1.nlmk.$invalid" class="loi">Xin mời nhập lại mật khẩu</em>
        <p>
            <label for="">HỌ TÊN :</label><br>
            <input required minlength="2" maxlength="30" ng-model="hoten" name="hoten" type="text" id="hoten" class="txt"><br>

        </p>
        <em ng-if="form1.hoten.$invalid" class="loi">Nhập họ tên từ 2 đến 30 ký tự</em>
        <p>
            <label for="">EMAIL :</label><br>
            <input ng-model="email" type="email" name="email" id="email" class="txt"><br>

        </p>
        <em ng-if="form1.email.$invalid    " class="loi">Nhập đúng gmail</em>
        <p>
            <label for="">ĐỊA CHỈ :</label><br>
            <input type="text" name="diachi" class="txt"><br>

        </p>
        <!-- <fieldset id="fs1"><br>
            <input ng-model="gioitinh" type="radio" name="gioitinh" value="1"><label for="">NAM</label>
            <input ng-model="gioitinh" type="radio" name="gioitinh" value="2"><label for="">NỮ</label><br><br>
            <em ng-if="!gioitinh>=1" class="loi">Chọn Giới tính</em>
        </fieldset> -->
        <div name="baoloi" id="baoloi">
        </div>
        <input class="button" type="submit" value="ĐĂNG KÝ" ng-model="button">
        <br>
    </form>


    <script>
        app = angular.module("b4", []);
        app.controller("ctr1", xuly);

        function xuly($scope) {}
    </script>