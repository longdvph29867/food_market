
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Mã Hàng Hoá</th>
        <th>Tên Hàng Hoá</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Lượt xem</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($items as $item) {
      ?>
        <tr>
          <td><input type="checkbox"></td>
          <td><?php echo $item['ma_hh'] ?></td>
          <td><?php echo $item['ten_hh'] ?></td>
          <td><?php echo $item['don_gia'] ?></td>
          <td><?php echo $item['giam_gia'] ?></td>
          <td><?php echo $item['so_luot_xem'] ?></td>
          <th>
            <a class="btn btn-warning" href="index.php?btn_edit&ma_hh=<?php echo $item['ma_hh'] ?>">Sửa</a>
            <a class="btn btn-danger" href="index.php?btn-delete&ma_hh=<?php echo $item['ma_hh'] ?>">Xóa</a>
          </th>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
  <div>
    <button class="btn btn-success">Chọn tất cả</button>
    <button class="btn btn-success">Bỏ chọn tất cả</button>
    <button class="btn btn-success">Xóa các mục đã chọn</button>
    <a href="index.php?add" class="btn btn-success">Thêm mới</a>
  </div>
</div>