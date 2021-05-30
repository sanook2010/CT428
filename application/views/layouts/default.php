<!doctype html>
<html lang="vi" x-data="data()">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Be+Vietnam:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

	<title><?php echo $title; ?></title>
	<style>
		body {
			font-family: Be Vietnam, sans-serif;
		}

		.container {
			padding-left: 1rem;
			padding-right: 1rem;
			margin-right: auto;
			margin-left: auto;
		}
	</style>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script>
        function data() {
            return {
                isMenuOpen: false,
                toggleMenu() {
                    this.isMenuOpen = !this.isMenuOpen
                },
            }
        };
    </script>
</head>

<body class="">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=1896592863957736&autoLogAppEvents=1" nonce="pjn2mit7"></script>
	<?php require "application/views/components/header.php"; ?>
	<div class="main">
		<?php echo $content; ?>
	</div>

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".swipperBanner", {
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
</body>

</html>