<form action="index.php" method="post"  enctype="multipart/form-data" class="flex flex-col text-[#333]">
    <h3 class=" text-2xl mb-6">Đăng ký</h3>
    <div class="flex flex-col mb-4">
        <label for="username">Tài khoản</label>
        <input type="text" name="ma_kh" id="username" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
    </div>
    <div class="flex flex-col mb-4">
        <label for="pass">Mật khẩu</label>
        <input type="password" name="mat_khau" id="pass" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
    </div>
    <div class="flex flex-col mb-4">
        <label for="enterpass">Nhập lại mật khẩu</label>
        <input type="password" name="" id="enterpass" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
    </div>
    <div class="flex flex-col mb-4">
        <label for="hoten">Họ tên</label>
        <input type="text" name="ho_ten" id="hoten" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
    </div>
    <div class="flex flex-col mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
    </div>
    <div class="flex flex-col mb-4">
        <label for="hinh">Hình ảnh</label>
        <input type="file" name="hinh" id="hinh" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
    </div>
    <div class="flex justify-between items-end">
        <div>
            <button name="btn_insert" class="text-white text-base uppercase font-semibold bg-[#62d2a2] py-2 px-2 rounded mt-3">Đăng ký</button>
            <button type="reset" class="text-white text-base uppercase font-semibold bg-gray-600 py-2 px-2 rounded mt-3">Reset</button>
        </div>
        <a href="index.php?btn_form_login" name="" class="text-xs text-[#62d2a2]">Bạn đã có tài khoản?</a>

    </div>
</form>