<!doctype html>
<html lang="en" x-data="data()">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Be Vietnam, sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
        function data() {
            return {
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },
            }
        };
    </script>
</head>

<body class="flex h-screen bg-gray-50">
    <?php require_once "application/views/components/admin/aside.php" ?>
    <div class="flex flex-col flex-1">
        <?php require_once "application/views/components/admin/header.php" ?>
        <main class="h-full pb-16 overflow-y-auto">
            <div class="container px-6 mx-auto">
                <h2 class="my-6 text-2xl font-semibold text-gray-700">
                    <?= $title; ?>
                </h2>
                <?= $content; ?>
            </div>

        </main>

    </div>


</body>

</html>