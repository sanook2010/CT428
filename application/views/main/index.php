
<?php require "application/views/components/banner.php"; ?>
<div class="container mt-4">
    <div class="pb-20 md:pb-24 lg:pb-32">
        <div class="flex flex-col sm:flex-row justify-between items-center sm:pb-4 lg:pb-0 mb-12 sm:mb-10">
            <div class="text-center sm:text-left">
                <h2 class=" font-butler  text-secondary text-3xl md:text-4xl lg:text-4.5xl">Điện thoại</h2>
                <p class="text-gray-500 text-lg md:text-xl pt-2">Săn sales mỗi ngày!</p>
            </div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4">
            <?php foreach ($products as $product) : ?>
                <div class="relative p-0 md:p-4">
                    <a href="/products/<?= $product->MSHH ?>">
                        <div class="relative rounded flex justify-center items-center">
                            <div class="aspect-w-1 aspect-h-1 w-full">
                                <img src="<?= $product->HinhAnh ?>">
                            </div>
                        </div>
                    </a>
                    <a class="flex flex-col justify-between items-center pt-6">
                        <div>
                            <h3 class="text-base text-secondary"><?= $product->TenHH ?></h3>
                        </div>
                        <span class="text-primary text-xl">
                            <?= number_format($product->Gia, 0, ',', '.') ?>
                        </span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>