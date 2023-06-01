
<div class="container">
    <h3>Thêm sản phẩm</h3>
    <?php if (isset($noti)) {
        echo $noti;
    } ?>
    <div>
        <form action="index.php" method="post">
            <div class="row">
                <div class="form-group col-6">
                    <label for="">Mã hàng hoá</label>
                    <input type="text" name="" class="form-control" value="Auto number" readonly>
                    <small id="helpId" class="text-danger">Help text</small>
                </div>
                <div class="form-group col-6">
                    <label for="ten_hh">Tên hàng hoá</label>
                    <input type="text" name="ten_hh" id="ten_hh" class="form-control" placeholder="">
                    <small id="helpId" class="text-danger">Help text</small>
                </div>

                <!--  -->
                <div class="form-group col-6">
                    <label for="don_gia">Đơn giá</label>
                    <input type="number" name="don_gia" id="don_gia" class="form-control" placeholder="">
                    <small id="helpId" class="text-danger">Help text</small>
                </div>
                <div class="form-group col-6">
                    <label for="giam_gia">Giảm giá</label>
                    <input type="number" name="giam_gia" id="giam_gia" class="form-control" placeholder="">
                    <small id="helpId" class="text-danger">Help text</small>
                </div>

                <div class="form-group col-6">
                    <label for="">Hình ảnh</label>
                    <input type="file" class="form-control-file" name="hinh">
                    <small id="fileHelpId" class="form-text text-danger">Help text</small>
                </div>

                <div class="form-group col-6">
                    <label for="" class="">Loại hàng</label>
                    <div class="input-group">
                        <select name="ma_loai" class="custom-select" id="inputGroupSelect04">
                            <option selected hidden>Choose...</option>
                            <?php
                                foreach($lisDanhMuc as $danhMuc) {
                            ?>
                                <option value="<?=$danhMuc["ma_loai"]?>"><?=$danhMuc["ten_loai"]?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <small id="fileHelpId" class="form-text text-danger">Help text</small>
                </div>


                <div class="form-group col-6">
                    <label for="" class="d-block">Loại hàng</label>
                    <div>
                        <label>
                            <input type="radio" name="dac_biet" value="1"> Đặc biệt
                        </label>
                        <label>
                            <input type="radio" name="dac_biet" value="0"> Bình tường
                        </label>

                    </div>
                    <small id="helpId" class="text-danger d-block">Help text</small>
                </div>


                <div class="form-group col-6">
                    <label for="ngay_nhap">Ngày nhập</label>
                    <input type="date" name="ngay_nhap" id="ngay_nhap" class="form-control" placeholder="">
                    <small id="helpId" class="text-danger">Help text</small>
                </div>

                <div class="form-group col-12">
                    <label for="mo_ta">Mô tả</label>
                    <textarea name="mo_ta" id="mo_ta" cols="30" class="w-100" rows="5"></textarea>
                    <small id="helpId" class="text-danger">Help text</small>
                </div>

            </div>

            <!--  -->

            <button name="btn-insert" class="btn btn-success">Thêm mới</button>
            <button type="reset" class="btn btn-dark">Nhập lại</button>
            <a class="btn btn-info" href="index.php?list">Danh sách</a>
        </form>
    </div>