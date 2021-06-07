<aside class="z-20 hidden md:block flex-shrink-0 w-64 overflow-y-auto bg-white">
    <div class="py-4 text-gray-500">
        <a href="/" class="ml-6 text-gray-800 text-lg font-bold">Store</a>
        <div class="mt-6">
        </div>
        <ul>
            <li class="relative px-6 py-3">
                <?php if ($this->route['controller'] == "adminOrder") : ?>
                    <div class="absolute inset-y-0 left-0 w-1 bg-purple-400 rounded-tr-lg rounded-br-lg"></div>
                <?php endif; ?>
                <a href="/admin/orders/" class="inline-flex items-center w-full text-sm font-semibold">
                <i class="fas fa-cart-plus"></i><span class="ml-4">Đơn hàng</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <button class="inline-flex items-center w-full text-sm font-semibold justify-between focus:outline-none" @click="togglePagesMenu">
                    <?php if (($this->route['controller'] == "adminCategory") || ($this->route['controller'] == "adminProduct")) : ?>
                        <div class="absolute inset-y-0 left-0 w-1 bg-purple-400 rounded-tr-lg rounded-br-lg"></div>
                    <?php endif; ?>
                    <span class="inline-flex items-center">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="ml-4">Sản phẩm</span>
                    </span>
                    <i class="fas fa-caret-down"></i>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">

                            <a class="w-full" href="/admin/categories">
                                Danh mục sản phẩm
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="/admin/products">
                                Sản phẩm
                            </a>
                        </li>
                    </ul>
                </template>
            </li>
            <li class="relative px-6 py-3">
                <?php if ($this->route['controller'] == "adminStaff") : ?>
                    <div class="absolute inset-y-0 left-0 w-1 bg-purple-400 rounded-tr-lg rounded-br-lg"></div>
                <?php endif; ?>
                <a href="/admin/staffs" class="inline-flex items-center w-full text-sm font-semibold">
                    <i class="fas fa-users"></i><span class="ml-4">Nhân viên</span>
                </a>
            </li>
            
        </ul>
    </div>
</aside>