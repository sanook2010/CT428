<?php require "application/views/components/message.php"; ?>

<div class="w-full overflow-hidden rounded shadow mt-4">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Tên khách hàng</th>
                    <th class="px-4 py-3">Ngày đặt hàng</th>
                    <th class="px-4 py-3">Số điện thoại</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Trạng thái</th>
                    <th class="px-4 py-3">Hành động</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">
                <?php foreach ($orders as $order) : ?>
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                            #<?= $order->SoDonDH ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $order->HoTenKH ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $order->NgayDH ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <?= $order->SoDienThoai ?>
                        </td>
                        
                        <td class="px-4 py-3 text-sm">
                            <?= $order->Email ?>
                        </td>
                        <td class="px-4 py-3 text-sm font-bold">
                            <?php if(($order->NgayGH == null) and ($order->MSNV == null) ): ?>
                                <p class="text-red-500">Chưa xử lý</p>
                            <?php else: ?>
                                <p class="text-green-500">Đã xử lý</p>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex items-center space-x-4 text-sm">
                                <a href="/admin/orders/edit/<?= $order->SoDonDH ?>">
                                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-400 rounded-lg  focus:outline-none focus:shadow-outline-gray">
                                       Xem chi tiết
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