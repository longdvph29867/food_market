<div class="container">
    <h2 class="alert alert-success">Chi tiết bình luận</h2>
    <h5 class="my-4">Hàng hóa: <?php echo $ten_hh['ten_hh'] ?></h5>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Người bình luận</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($binh_luan as $bl) {
            ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $bl['noi_dung'] ?></td>
                    <td><?php echo $bl['ngay_bl'] ?></td>
                    <td><?php echo $bl['ten_kh'] ?></td>
                    <td><a class="btn btn-danger" href="index.php?mahh=<?php echo $id_hh ?>&delete&mabl=<?php echo $bl['ma_bl'] ?>">Xóa</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div>
        <button class="btn btn-success" name="btn-update">Chọn tất cả</button>
        <button class="btn btn-success" type="reset">Bỏ chọn tất cả</button>
        <a class="btn btn-danger" href="index.php?delete&mabl=<?php echo $bl['ma_bl'] ?>">Xóa tất cả</a>
    </div>
</div>