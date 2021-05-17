<h4 class="mb-4 text-lg font-semibold text-gray-600 text-gray-300">
    Thông tin danh mục
</h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md  w-full md:w-2/4">
    <form action="/admin/categories/update/<?= $category->MaLoaiHang ?>" method="POST">
        <!-- <input type="hidden" name=""> -->
        <!-- <label class="block text-sm">
            <span class="text-gray-700">Mã loại sản phẩm</span>
            <input class="block w-full mt-1 text-sm border-gray-400	 border-2 rounded focus:outline-none  p-2" required name="MaLoaiHang" placeholder="1" value="<?= $category->MaLoaiHang ?>">
        </label> -->
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Tên loại sản phẩm</span>
            <input class="block w-full mt-1 text-sm border-gray-400	 border-2 rounded focus:outline-none  p-2" required name="TenLoaiHang" placeholder="Apple" value="<?= $category->TenLoaiHang ?>">
        </label>

        <button class="mt-4 bg-purple-400 p-2 text-white" type="submit">
            Sửa sản phẩm
        </button>
    </form>
</div>