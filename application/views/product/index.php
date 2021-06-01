<section class="container">
    <div class="flex flex-col lg:flex-row">
        <div class="w-full lg:w-1/4 border-r-0 lg:border-r-2">
           
            <p class="font-bold">Hãng sản xuất</p>
            <div class="grid grid-cols-3 lg:grid-cols-2 xl:grid-cols-3">
               
                <?php foreach($categories as $category): ?>
                    <div class="p-2">
                        <input type="checkbox" class="mr-2 category-checkbox" onchange="filterProduct()" value="<?= $category->MaLoaiHang ?>"><?= $category->TenLoaiHang ?>    
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="w-full lg:w-3/4">
            <div class="px-0 lg:px-4">
                <p class="font-bold"><?= count($products) ?> Điện thoại</p>
                <div class="grid grid-cols-2 lg:grid-cols-3">
                <?php foreach ($products as $product) : ?>

                    <!-- Sản phẩm ở đây nè bác -->
                    <div class="relative p-2 lg:p-4" data-category="<?= $product->MaLoaiHang ?>"> 
                        <a href="/products/<?= $product->MSHH ?>">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="aspect-w-1 aspect-h-1 w-full">
                                    <img src="<?= $product->HinhAnh ?>">
                                </div>
                            </div>
                        </a>
                        <a class="flex flex-col justify-between items-center pt-6">
                            <div>
                                <h3 class="text-xs lg:text-base font-bold"><?= $product->TenHH ?></h3>
                            </div>
                            <span class="text-xl">
                                <?= application\core\Helper::currency($product->Gia) ?>
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