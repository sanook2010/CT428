<section class="container">
    <div class="flex">
        <div class="w-1/4 border-r-2">
           
            <p class="font-bold">Hãng sản xuất</p>
            <div class="grid grid-cols-3">
               
                <?php foreach($categories as $category): ?>
                     <!-- checkbox thì ở đây -->
                    <div class="p-2">
                        <input type="checkbox" class="mr-2 category-checkbox" onchange="filterProduct()" value="<?= $category->MaLoaiHang ?>"><?= $category->TenLoaiHang ?>    
                    </div>
                     <!-- checkbox thì ở đây -->
                <?php endforeach; ?>
            </div>
        </div>
        <div class="w-3/4">
            <div class="px-4">
                <p class="font-bold"><?= count($products) ?> Điện thoại</p>
                <div class="grid grid-cols-2 lg:grid-cols-3">
                <?php foreach ($products as $product) : ?>

                    <!-- Sản phẩm ở đây nè bác -->
                    <div class="relative p-0 md:p-4" data-category="<?= $product->MaLoaiHang ?>"> 
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
                    <!-- Sản phẩm ở đây nè bác -->
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
</section>


<script>
    function filterProduct()
    {
        $products = document.querySelectorAll('[data-category]');
       
        $categoryCheckbox = Array.from(document.querySelectorAll('input[type=checkbox]:checked'));
        const checkedArr = $categoryCheckbox.map(el => el.value);
        if (!checkedArr.length) 
        {
            $products.forEach(function(el){
                el.classList.remove('hidden') 
            })
            return 
        }
        

        $products.forEach(function(el){
            console.log(el.getAttribute('data-category'))
            const category = el.getAttribute('data-category')
            
            el.classList.toggle("hidden", !checkedArr.includes(category));
        })
    }
</script>