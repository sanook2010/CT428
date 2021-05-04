<h4 class="mb-4 text-lg font-semibold text-gray-600 text-gray-300">
    Thông tin danh mục
</h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md  w-full md:w-2/4">
    <form action="/admin/staffs/store" method="POST">

        <label class="block text-sm mt-4">
            <span class="text-gray-700">Tên nhân viên</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="HoTenNV" placeholder="Phùng Sơn Minh Khoa">
        </label>

        <label class="block text-sm mt-4">
            <span class="text-gray-700">Địa chỉ</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="DiaChi" placeholder="Bạc Liêu">
        </label>
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Chức vụ</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="ChucVu" placeholder="admin">
        </label>
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Số điện thoại</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="SoDienThoai" placeholder="089780790">
        </label>

        <label class="block text-sm mt-4">
            <span class="text-gray-700">Mật khẩu</span>
            <input type="password" class="block w-full mt-1 text-sm border-gray-400  border-2 rounded focus:outline-none p-2" required name="MatKhau">
        </label>
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Xác nhận mật khẩu</span>
            <input type="password" class="block w-full mt-1 text-sm border-gray-400  border-2 rounded focus:outline-none p-2" required name="XacNhanMatKhau" placeholder="">
        </label>

        <button class="mt-4 bg-purple-400 p-2 text-white" type="submit">
            Thêm nhân viên
        </button>
    </form>
</div>