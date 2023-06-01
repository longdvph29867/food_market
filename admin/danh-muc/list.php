
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($items as $item) {
      ?>
        <tr>
          <td><input type="checkbox"></td>
          <td><?php echo $item['ma_loai'] ?></td>
          <td><?php echo $item['ten_loai'] ?></td>
          <th>
            <a class="btn btn-warning" href="index.php?btn-edit&maloai=<?php echo $item['ma_loai'] ?>">Sửa</a>
            <a class="btn btn-danger" href="index.php?btn-delete&maloai=<?php echo $item['ma_loai'] ?>">Xóa</a>
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