<!-- START FOOTER -->
<!-- <link rel="stylesheet" href="css/footer.css"> -->

<div class="row footer">
        <div id="top-footer">
            <div class="top-footer">
                <h1>LIÊN HỆ</h1>
                <p>Hotline: +84392262423</p>
                <p>Địa chỉ: Đ. số 3, Tân Hưng Thuận, Quận 12, TP.HCM</p>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="top-footer2">
                <h1>LIÊN KẾT</h1>
                <div class="footer-lienket">
                    <a href="">Trang chủ</a>
                    <a href="">Giới thiệu</a>
                    <a href="">Sản phẩm</a>
                    <a href="">Liên hệ</a>
                </div>
            </div>
            <div class="top-footer3">
                <a href=""><img src="image/logo.png" alt=""></a>
            </div>
        </div>
        <div class="top-footer3">
            <img src="/image/z3880853938551_7f3f4810ed29249ebddc1aac911146fe_preview_rev_1_preview_rev_1.png" alt="">
        </div>
    </div>
    <div id="bottom-footer">
        <div class="bottom-footer">
            <h3>MÁI CÀ PHÊ - VÌ CHÚNG TÔI HIỂU BẠN
            </h3>
        </div>
        <div class="bottom-footer">
            <h3>@ 2022 HEY COFFEE CO
            </h3>
        </div>
        <div class="bottom-footer">
            <h3> WEBSITE ĐƯỢC THIẾT KẾ BỞI TEAM MÁI CÀ PHÊ
            </h3>
        </div>
    </div>
</div>
<!-- END FOOTER -->
</body>
<script type="text/javascript">
 jQuery(document).ready(function($) {
  $(window).load(function() {
   if ($('top').length > 0) {
    var _top = $('top').offset().top - parseFloat($('top').css('marginTop').replace(/auto/, 0));
    $(window).scroll(function(evt) {
     var _y = $(this).scrollTop();
     if (_y > _top) {
      $('top').addClass('fixed');
      $('.main-1').css("margin-top", "30px")
     } else {
      $('top').removeClass('fixed');
      $('.main-1').css("margin-top", "0")
     }
    })
   }
  });
 });
 </script>

</html>