

<form action="" class="flex flex-col text-[#333]">
    <h3 class=" text-2xl mb-6">Đăng nhập</h3>
    <div class="flex flex-col mb-4">
        <label for="username">Tài khoản</label>
        <input type="text" name="" id="username"
        class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded"
        style="border-width: 1px;"
        >
    </div>
    <div class="flex flex-col mb-4">
        <label for="pass">Mật khẩu</label>
        <input type="text" name="" id="pass"
        class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded"
        style="border-width: 1px;"
        >
    </div>
    <div class="flex flex-col mb-4">
        <label>
            <input type="checkbox" name="ghi_nho"> Ghi nhớ tài khoản?
        </label>
    </div>
    <a href="<?=$url_site?>/tai-khoan/quen-mat-khau" class="text-base underline decoration-1 text-[#62d2a2]">Quên mật khẩu</a>
    <div class="flex justify-between items-end">
        <button
        class="text-white text-base uppercase font-semibold bg-[#62d2a2] py-2 px-2 rounded mt-3"
        >Đăng nhập</button>
        <a href="<?=$url_site?>/tai-khoan/dang-ky" name="" class="text-xs text-[#62d2a2]">Bạn chưa có tài khoản?</a>
    </div>
</form>