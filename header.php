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

	<?php wp_head(); ?>

</head>

<body class="bg-white text-c-38424b" <?php body_class(); ?>>

<header class="header bg-white fixed w-full text-gray-500" style="--bg-opacity: 0.95">
	<div class="w-10/12 mx-auto flex justify-between">
		<div class="flex items-center py-3">
			<img src="https://images.empatkali.co.id/rebranding/logo.png" class="w-40" alt="">
			<div class="inline-flex items-center border-l border-gray-500 py-3 pl-5 ml-5">
				<img src="https://images.empatkali.co.id/ojk-gray.png" class="w-48 -mt-2" alt="">
				<span class="border-2 border-c-primary text-xs px-1 ml-4 mt-1 text-gray-700 font-semibold">TKB90: 95.2%</span>
			</div>
		</div>

		<?php
			// Navigation
			wp_nav_menu();
		?>
	</div>
</header>