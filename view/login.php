<link rel="stylesheet" href="css/dangnhap.css">
<?php
if (isset($_SESSION['user'])) {
    echo '<h3>Bạn đã đăng nhập</h3>';
} else {

?>
    <form name="form1" method="post" action="index.php?act=dangnhap" id="form1">

        <h1 style="text-align: center;">ĐĂNG NHẬP</h1>

        <p>
            <label for="">TÀI KHOẢN :</label>
            <input required minlength="2" maxlength="30" name="tendangnhap" type="text" class="txt">

        </p>
        <p>
            <label for="">MẬT KHẨU :</label>
            <input required minlength="2" maxlength="30" name="matkhau" type="password" class="txt">
        </p>
        <input type="checkbox" class="ghinho" name="" value=""><label for="">Ghi nhớ tài khoản</label>


        </div>
        <!-- <button class="button" ng-model="button" type="submit" name="btn-login">ĐĂNG NHẬP</button> -->
        <input type="submit" value="Đăng nhập" name="btn-login" class="button">

        <br>
        <div class="quen">
            <a href="">Quên mật khẩu ?</a>
            <br>
            <a href="">Tạo tài khoản mới ? </a>
        </div>

        <?php if (isset($thongbao) && ($thongbao != '')) echo $thongbao; ?>
    </form>
<?php
}
?>