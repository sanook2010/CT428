<div class="rounded bg-white p-4">
    <div class="flex justify-between">
        <div class="font-bold">Khoa Phùng Store</div>
        <div>Ngày đặt hàng: <?= application\core\Helper::formatDate($order_user->NgayDH) ?></div>
    </div>
    <div class=" my-4">
        <div class="w-2/3">
            <p class="font-bold">Thông tin người đặt hàng</p>
            <table class="w-full">
                <tbody class="text-left">
                    <tr>
                        <th>Họ và tên</th><td><?= $order_user->HoTenKH ?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th><td></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại</th><td><?= $order_user->SoDienThoai ?></td>
                    </tr>
                    <tr>
                        <th>Email</th><td><?= $order_user->Email ?></p>
                    </tr>
                    <tr>
                        <th>Tên công ty</th><td><?= $order_user->TenCongTy ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <div class="w-full overflow-hidden rounded shadow mt-4">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                            <th class="px-4 py-3">Số lượng</th>
                            <th class="px-4 py-3">Hình ảnh</th>
                            <th class="px-4 py-3">Sản phẩm</th>
                            <th class="px-4 py-3">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                    <?php foreach ($order_products as $product) : ?>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-sm">
                                <?= $product->SoLuong ?>
                            </td>
                            <td class="px-4 py-3">
                                <img src="<?= $product->HinhAnh ?>" alt="<?= $product->TenHH ?>" class="w-24">
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?= $product->TenHH ?>
                            </td>       
                            <td class="px-4 py-3 text-sm">
                                <?php 
                                    echo application\core\Helper::currency($product->SoLuong * $product->GiaDatHang);
                                ?>
                            </td>               
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="my-4">
        <?php if(($order_user->NgayGH == null) and ($order_user->MSNV == null) ): ?>
            <form action="/admin/orders/update/<?= $order_user->SoDonDH ?>" method="POST">
                <button type="submit" class="bg-blue-500 text-white p-2">
                    Xử lý đơn hàng
                </button>
            </form>
        <?php endif; ?>
        </div>
    </div>
    
</div>