<a href="/admin/categories/create">
    <button class="bg-pink-400 p-3 text-white"><i class="fas fa-plus"></i> Thêm danh mục</button>
</a>

<?php require "application/views/components/message.php"; ?>

<div class="w-full overflow-hidden rounded shadow mt-4">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                    <th class="px-4 py-3">Mã loại hàng</th>
                    <th class="px-4 py-3">Tên loại hàng</th>
                    <th class="px-4 py-3">Hành động</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">
                <?php foreach ($categories as $category) : ?>
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                            <?= $category->MaLoaiHang ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $category->TenLoaiHang ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex items-center space-x-4 text-sm">
                                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-400 rounded-lg  focus:outline-none focus:shadow-outline-gray">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-400 rounded-lg  focus:outline-none focus:shadow-outline-gray">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>