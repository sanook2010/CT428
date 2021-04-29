<div class="flex">
    <div class="w-full lg:w-2/3">
        <img src="" class="w-full">
    </div>
    <div class="w-full lg:w-1/3">
        <div class="flex items-center p-6">
            <form class="w-full" method="POST" action="/admin/login/auth">
                <h1 class="text-xl mb-4 uppercase">Đăng nhập</h1>
                <div class="block text-sm">
                    <span>Số điện thoại</span>
                    <input type="text" name="SoDienThoai" class="block w-full mt-1 border-2 rounded border-gray-400 p-1">
                </div>
                <div class="block mt-4 text-sm">
                    <span>Mật khẩu</span>
                    <input type="password" name="MatKhau" class="block w-full mt-1 border-2 rounded border-gray-400 p-1">
                </div>
                <div class="block mt-4 text-sm">
                    <button type="submit" class="w-full bg-pink-400 p-4 rounded text-white">
                        Đăng nhập
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>