<a href="/admin/staffs/create">
    <button class="bg-purple-400 p-3 text-white"><i class="fas fa-plus"></i> Thêm nhân viên</button>
</a>

<?php require "application/views/components/message.php"; ?>

<div class="w-full overflow-hidden rounded shadow mt-4">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                    <th class="px-4 py-3">Mã nhân viên</th>
                    <th class="px-4 py-3">Tên nhân viên</th>
                    <th class="px-4 py-3">Địa chỉ</th>
                    <th class="px-4 py-3">Chức vụ</th>
                    <th class="px-4 py-3">Số điện thoại</th>
                    <th class="px-4 py-3">Hành động</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">
                <?php foreach ($staffs as $staff) : ?>
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                            <?= $staff->MSNV ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $staff->HoTenNV ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $staff->DiaChi ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $staff->ChucVu ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $staff->SoDienThoai ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex items-center space-x-4 text-sm">
                                <a href="/admin/staffs/edit/<?= $staff->MSNV ?>">
                                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-400 rounded-lg  focus:outline-none focus:shadow-outline-gray">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a href="/admin/staffs/destroy/<?= $staff->MSNV ?>">
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