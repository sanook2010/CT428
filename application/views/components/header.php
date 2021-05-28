<div class="hidden sm:block container mx-auto max-w-screen-xl relative">
    <div class="shadow-xs z-50 py-4 relative">
        <div class="flex justify-between items-center">
            <div class="ml-8">
                <button class="border-transparent hover:border-purple-400 border-2 rounded-full p-2 sm:p-4 transition-colors  focus:outline-none">
                    <svg class="h-10 w-10 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                </button>

            </div>
            <div>
                <img src="/public/images/logo/ctu.png" alt="logo" class="w-28 h-auto">
            </div>
            <div class="mr-8">
                <button class="border-transparent hover:border-purple-400 border-2 rounded-full p-2 sm:p-4 transition-colors  focus:outline-none">
                    <svg class="h-10 w-10 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="py-4 flex">
            <ul class="list-reset flex items-center">
                <li class="mx-5"><a href="/">Trang chủ</a></li>
                <li class="mx-5"><a href="/">Về chúng tôi</a></li>
                <li class="mx-5"><a href="/products">Sản phẩm</a></li>
                <li class="mx-5"><a href="/products">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="block sm:hidden  relative py-2 border-b-4 border-blue-500">
    <div class="flex justify-between items-center container mx-auto max-w-screen-xl">
        <div class="">
            <img src="/public/images/logo/ctu.png" alt="logo" class="w-10 h-auto">
        </div>
        <div class="flex">
            <button class="p-4">
                <a href="/gio-hang">
                    <svg class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </a>
            </button>
            <div  @click="toggleMenu" class="p-4">
                <svg class="h-8 w-8 text-blue-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="6" x2="20" y2="6" />  <line x1="4" y1="12" x2="20" y2="12" />  <line x1="4" y1="18" x2="20" y2="18" /></svg>
            </div>
        </div>
        
    </div>
    <template x-if="isMenuOpen">
    <div  class="w-full h-screen z-10 mt-2 bg-blue-500">
        <div class="container mx-auto max-w-screen-xl">
            <ul class="flex flex-col text-white font-bold text-lg">
                <li class="px-2 py-4"><a href="/">Trang chủ</a></li>
                <li class="px-2 py-4"><a href="/">Về chúng tôi</a></li>
                <li class="px-2 py-4"><a href="/products">Sản phẩm</a></li>
                <li class="px-2 py-4"><a href="/products">Liên hệ</a></li>
            </ul>
        </div>
    </div>
    </template>
</div>