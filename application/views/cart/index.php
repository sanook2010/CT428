<?php if(!empty($products) > 0): ?>
<div class="container mx-auto max-w-screen-xl">
    <section class="mt-4">
        <a href="/products"  class="flex items-center block">
            <svg class="h-8 w-8 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="15 6 9 12 15 18" /></svg>
            <p class="uppercase text-blue-500 font-bold"> Mua thêm sản phẩm mới</p>
        </a>
    </section>
    <section class="mt-4">
        <div class="flex flex-wrap font-primary">
            <div class="w-full lg:w-9/12">
                <div class="border border-b-0 lg:border-b border-gray-100">
                    <?php foreach($products as $item): ?>
                        <div class="px-0 lg:px-4 py-4 border-b border-gray-100">
                            <div class="flex">
                                <div class="w-40">
                                    <img src="<?= $item['product']->HinhAnh ?>" alt="">
                                </div>
                                <div class="flex-1">   
                                    <p class="font-default text-base md:text-xl font-semibold">
                                        <?= $item['product']->TenHH ?>
                                    </p>
                                    <p class="font-default text-base">
                                       x <?= $item['SoLuong'] ?>
                                    </p>
                                </div>
                                <div class="ml-auto hidden lg:block">
                                    <p class="font-bold">
                                        <?php echo application\core\Helper::currency($item['SoLuong'] * $item['product']->Gia); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="w-full lg:w-3/12">
                <div class="border border-gray-100 -ml-px">
                    <div class="flex justify-between p-4 items-center border-b border-gray-100">
                        <p class="font-bold text-sm">Thành tiền:</p>
                        <p class="text-lg text-red-500 font-bold">
                            <?= application\core\Helper::currency($totalPrice) ?>
                        </p>
                    </div>
                    <div class="p-4">
                        <a class="bg-blue-500 text-white rounded p-4 text-center font-bold block" href="#dat-hang">
                            Tiến hành đặt hàng
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
                         
    <section class="mt-4" id="dat-hang">
        <form action="/order/store" method="POST">
            <div class="flex flex-wrap font-primary">
                <div class="w-full lg:w-9/12">
                    <div class="border border-b-0 lg:border-b border-gray-100 p-4">
                        <div class="mb-4">
                            <strong>Thông tin người nhận</strong>
                        </div>
                        <div class="mb-4 flex flex-col lg:flex-row">
                            <div class="w-full lg:w-2/3 mx-2 mb-2 md:mb-0">
                                <input name="HoTenKH" type="text" class="w-full p-2 border focus:outline-none focus:ring focus:border-blue-500" placeholder="Họ và tên (*)" required>
                            </div>
                            <div class="w-full lg:w-1/3 mx-2 mb-2 md:mb-0">
                                <input name="SoDienThoai" type="text" class="w-full p-2 border focus:outline-none focus:ring focus:border-blue-500" placeholder="Số điện thoại (*)" required>
                            </div>
                        </div>
                        <div class="mb-4 flex flex-col lg:flex-row">
                            <div class="w-full lg:w-1/2 mx-2 mb-2 md:mb-0">
                                <input name="Email" type="text" class="w-full p-2 border focus:outline-none focus:ring focus:border-blue-500" placeholder="Email">
                            </div>
                            <div class="w-full lg:w-1/2 mx-2 mb-2 md:mb-0">
                                <input name="TenCongTy" type="text" class="w-full p-2 border focus:outline-none focus:ring focus:border-blue-500" placeholder="Tên công ty">
                            </div>
                        </div>
                        <div class="mb-4">
                            <strong>Địa chỉ</strong>
                        </div>
                        <div class="w-full px-2">
                            <textarea name="DiaChi" type="text" class="w-full p-2 border focus:outline-none focus:ring focus:border-blue-500" placeholder="Địa chỉ (*)" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="py-2 px-4 rounded bg-blue-500 mt-2 text-white font-bold" type="submit">Hoàn tất đặt hàng</button>
            </div>
        </form>                     
    </section>
</div>
<?php else: ?>
    <div class="container mx-auto max-w-screen-xl">
        <section class="mt-4">
            <a href="/products"  class="flex items-center block">
                <svg class="h-8 w-8 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="15 6 9 12 15 18" /></svg>
                <p class="uppercase text-blue-500 font-bold"> Mua thêm sản phẩm mới</p>
            </a>
        </section>
        <section class="mt-4">
            <div class="flex flex-col content-center items-center ">
                <div class="mb-4"> 
                    <svg class="h-8 w-8 text-blue-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="9" cy="21" r="1" />  <circle cx="20" cy="21" r="1" />  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" /></svg>
                </div>
                <p class="mb-4">Bạn chưa có sản phẩm nào trong giỏ hàng</p>
                <div class="bg-blue-500 py-2 px-4 text-white rounded">
                    <a href="/products">Tiếp tục mua hàng</a>
                </div>
            </div>
        </section>
    </div>
<?php endif; ?>