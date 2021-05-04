<?php require "application/views/components/message.php"; ?>
<section id="form" class="max-w-screen-sm mx-auto p-4">
    <h1 class="font-bold">CÂU HỎI ẨN DANH</h1>
    <div class="h-1 w-20 bg-purple-400 rounded"></div>
    <div class="mt-2">
        <form action="/store" method="POST">
            <textarea class="h-32 w-full resize-none border rounded-md p-4" name="content" required placeholder="Đặt câu hỏi ở đây"></textarea>
            <button class="p-4 bg-purple-400 mt-2 text-white" type="submit">Đặt câu hỏi</button>
        </form>
    </div>
</section>
<section class="max-w-screen-sm mx-auto p-4 mt-2">
    <h1 class="font-bold">CÂU TRẢ LỜI TỪ KHOA</h1>
    <div class="h-1 w-20 bg-purple-400 rounded"></div>
    <div class="mt-2">
        <?php foreach ($messages as $message) : ?>
            <div class="mt-4 border-b-2 pb-4">
                <h2 class=" text-2xl font-medium text-gray-900 title-font mb-2"><?= $message['content'] ?></h2>
                <p class="leading-relaxed"><?= $message['reply'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>