<h4 class="mb-4 text-lg font-semibold text-gray-600 text-gray-300">
    Thông tin sản phẩm
</h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md  w-full md:w-2/4">
    <form action="/admin/products/update/<?= $product->MaLoaiHang ?>" method="POST">
        <label class="block mt-4 text-sm">
            <span class="text-gray-700">
                Loại sản phẩm
            </span>
            <select class="block w-full mt-1  border-gray-400 border-2 text-sm form-select focus:outline-none p-2 rounded" name="MaLoaiHang">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category->MaLoaiHang ?>" <?php if($product->MaLoaiHang == $category->MaLoaiHang){echo "selected";} ?> ><?= $category->TenLoaiHang ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <label class="block text-sm mt-4">
            <span class="text-gray-700">Mã số sản phẩm</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="MSHH" placeholder="iphone10" value="<?= $product->MSHH ?>" disable>
        </label>
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Tên sản phẩm</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="TenHH" placeholder="iPhone 10" value="<?= $product->TenHH ?>">
        </label>

        <label class="block text-sm mt-4">
            <span class="text-gray-700">Số lượng</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="SoLuongHang" type="number" min=0 placeholder="100" value="<?= $product->SoLuongHang ?>">
        </label>
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Quy cách</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="QuyCach" placeholder="cái" value="<?= $product->QuyCach ?>">
        </label>
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Gía</span>
            <input class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" required name="Gia" placeholder="10000" value="<?= $product->Gia ?>">
        </label>
        <label class="block text-sm mt-4">
            <span class="text-gray-700">Ghi chú</span>
            <textarea class="block w-full mt-1 text-sm border-gray-400 border-2 rounded focus:outline-none p-2" name="GhiChu"><?= $product->GhiChu ?></textarea>
        </label>
        <button class="mt-4 bg-purple-400 p-2 text-white" type="submit">
            Sửa sản phẩm
        </button>
    </form>
</div>
<script>
CKEDITOR.replace( 'GhiChu' );
</script>