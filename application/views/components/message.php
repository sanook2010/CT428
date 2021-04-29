<?php if (isset($_SESSION['message'])) : ?>
    <section class="mt-4">
        <div class="bg-pink-400 p-4 text-white rounded">
            <?= $_SESSION['message'] ?>
        </div>
    </section>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>