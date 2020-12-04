<?php 
// https://developer.wordpress.org/themes/basics/organizing-theme-files/
// <!-- Create read me -->
// <!-- https://serversideup.net/installing-tailwindcss-in-a-wordpress-theme/ -->
// <!-- https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/ -->

// just make all the images found here static instead of putting it inside oss bucket
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >

	<title>EmpatKali | Bayar Belakangan, Bunga 0%</title>
	<link type="image/png" rel="icon" href="https://images.empatkali.co.id/favicon.png">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  		crossorigin=""/>

	<?php wp_head(); ?>

</head>

<body class="bg-white text-c-38424b" <?php body_class(); ?>>

<header class="header bg-white fixed w-full text-gray-500" style="--bg-opacity: 0.95;">
	<div class="lg:w-10/12 md:w-10/12 w-11/12 mx-auto flex lg:flex-row md:flex-row flex-col justify-between lg:py-0 md:py-0 py-5">
		<div class="flex lg:flex-row md:flex-row flex-col items-center lg:justify-start md:justify-start justify-center lg:py-3 md:py-3 py-0">
			<img src="https://images.empatkali.co.id/rebranding/logo.png" class="w-40 lg:mb-0 md:mb-0 mb-4" alt="">
			<div class="inline-flex items-center lg:border-l md:border-l border-0 border-gray-500 py-3 lg:pl-5 md:pl-5 pl-0 lg:ml-5 md:ml-5 ml-0 lg:mb-0 md:mb-0 mb-3">
				<img src="https://images.empatkali.co.id/ojk-gray.png" class="w-48 -mt-2" alt="">
				<span class="border-2 border-c-primary text-xs px-1 ml-4 mt-1 text-gray-700 font-semibold">TKB90: 95.2%</span>
			</div>
		</div>

		<?php
			// Navigation
			wp_nav_menu([
				'menu' => 'main-nav'
			]);
		?>
	</div>
</header>