<a href="/admin/products/create">
    <button class="bg-purple-400 p-3 text-white"><i class="fas fa-plus"></i> Thêm sản phẩm</button>
</a>

<?php require "application/views/components/message.php"; ?>

<div class="w-full overflow-hidden rounded shadow mt-4">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                    <th class="px-4 py-3">Mã sản phẩm</th>
                    <th class="px-4 py-3">Tên sản phẩm</th>
                    <th class="px-4 py-3">Giá</th>
                    <th class="px-4 py-3">Tồn kho</th>
                    <th class="px-4 py-3">Hành động</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">
                <?php foreach ($products as $product) : ?>
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                            <?= $product->MSHH ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $product->TenHH ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= application\core\Helper::currency($product->Gia) ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $product->SoLuongHang ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex items-center space-x-4 text-sm">
                                <a href="/admin/products/edit/<?= $product->MSHH ?>">
                                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-400 rounded-lg  focus:outline-none focus:shadow-outline-gray">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a href="/admin/products/destroy/<?= $product->MSHH ?>">
                                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-400 rounded-lg  focus:outline-none focus:shadow-outline-gray">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>