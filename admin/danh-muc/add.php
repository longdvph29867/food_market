
<div class="container">
    <h3>Thêm sản phẩm</h3>
    <div>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="">Mã Loại</label>
                <input type="text" name="" class="form-control" value="Auto number" readonly>
                <small id="helpId" class="text-danger">Help text</small>
            </div>
            <div class="form-group">
                <label for="tenLoai">Tên Loại</label>
                <input type="text" name="ten-loai" id="tenLoai" class="form-control" placeholder="">
                <small id="helpId" class="text-danger">Help text</small>
            </div>
            <button name="btn-insert" class="btn btn-success">Thêm mới</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a class="btn btn-info" href="index.php?list">Danh sách</a>
        </form>
    </div>