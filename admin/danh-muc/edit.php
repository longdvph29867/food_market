<div class="container">
    <h3>Thêm sản phẩm</h3>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="">Mã Loại</label>
            <input type="text" name="ma-loai" class="form-control" readonly value="<?php echo $danhMuc['ma_loai'] ?>">
            <small id="helpId" class="text-danger">Help text</small>
        </div>
        <div class="form-group">
            <label for="tenLoai">Tên Loại</label>
            <input type="text" name="ten-loai" id="tenLoai" class="form-control" value="<?php echo $danhMuc['ten_loai'] ?>">
            <small id="helpId" class="text-danger">Help text</small>
        </div>
        <button name="btn-update" class="btn btn-warning">Cập nhật</button>
        <button type="reset" class="btn btn-dark">Nhập lại</button>
        <a class="btn btn-info" href="index.php?list">Danh sách</a>
    </form>

</div>