
<div class="container mx-auto max-w-screen-xl">
 
    <section class="">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2">
                <img src="<?= $product->HinhAnh ?>" class="w-full">
            </div>
            <div class="w-full md:w-1/2 mt-10 md:mt-0">
                <div class="flex justify-between border-b-2 border-gray-300 pb-5">
                    <div>
                        <p class="font-bold text-2xl"><?= $product->TenHH ?></p>
                    </div>
                    <p class="text-blue-500 text-2xl font-bold"><?= number_format($product->Gia, 0, ',', '.') ?>đ</p>
                </div>
                <div class="py-5 border-b-2 border-gray-300">
                    <div class="p-4 text-center bg-blue-500	w-full text-white font-bold rounded">
                        ĐẶT NGAY
                    </div>
                   
                    <div class="text-center mt-2">
                        Gọi đặt mua <a href="tel:19006067">1900.6067</a> (7:30 - 22:00)
                    </div>
                </div>
                <div class="flex flex-col pt-2">
                    <div class="flex items-center">
                        <svg class="h-12 w-12 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />  <line x1="3" y1="9" x2="7" y2="9" /></svg> 
                        <p class="ml-5">GIAO HÀNG TOÀN QUỐC</p>
                    </div>
                    
                    <div class="flex items-center">
                        <svg class="h-12 w-12 text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 12l2 2l4 -4" />  <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" /></svg>
                        <p class="ml-5">BẢO HÀNH CHÍNH HÃNG 12 THÁNG</p>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="mb-5">
            <p class="font-bold text-2xl">Thông tin chi tiết điện thoại <?= $product->TenHH ?></p>
        </div>
        <div class=" relative">
            <div class=" overflow-hidden text-justify ">
                <?php echo stripslashes($product->GhiChu) ?>
            </div>
           
        </div>
    </section>
    <section class="mt-10">
        <div class="mb-5">
            <p class="font-bold text-2xl">Nhận xét điện thoại <?= $product->TenHH ?></p>
        </div>
        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
    </section>
</div>