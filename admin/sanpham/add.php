<h1>Thêm sản phẩm (loại hàng)</h1>


<form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" class="form-control" name="mahh" id="maHangHoa" placeholder="Mã sản phẩm" disabled>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="tenhh" id="tenHangHoa" placeholder="Tên sản phẩm">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="giahh" id="giaHangHoa" placeholder="Đơn giá">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="giamgiahh" id="giamGiaHangHoa" placeholder="Giảm giá">
    </div>
    <div class="form-group">
        <input type="file" class="form-control-file" name="hinhanhhh" id="hinhAnhHangHoa">
    </div>
    <div class="form-group">
        <textarea name="motahh" id="" cols="30" rows="3" placeholder="Mô tả"></textarea>
    </div>
    <div class="form-group">
        <!-- <label for="ngayNhap">Ngày nhập</label> -->
        <input type="date" class="form-control-file" name="ngaynhap" id="ngayNhap">
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="loaihangdacbiet" class="custom-control-input" value="1">
        <label class="custom-control-label" for="customRadio1">Hàng đặc biệt</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="loaihangdacbiet" class="custom-control-input" value="0" checked>
        <label class="custom-control-label" for="customRadio2">Hàng bình thường</label>
    </div>
    <div class="button">
        <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới">
        <input type="reset" class="btn btn-secondary" value="Nhập lại">
        <a href="index.php?act=danhsachsanpham"><input class="btn btn-secondary" value="Danh sách"></a>
    </div>

    <?php
    if (isset($thongbao) && ($thongbao != '')) {
        echo $thongbao;
    }
    ?>
</form>
<!-- <style>
    form {
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
    }

    form div,
    form select {
        width: 47% !important;
        margin: 10px 6px;
    }

    .button {
        width: 100% !important;
        display: flex;
        flex-flow: wrap row;
        justify-content: center;
    }

    .button>* {
        width: 30%;
        margin-right: 5px;
    }

    .button a input {
        width: 100%;
    }
</style> -->