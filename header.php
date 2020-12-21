<?php 
// https://developer.wordpress.org/themes/basics/organizing-theme-files/
// <!-- Create read me -->
// <!-- https://serversideup.net/installing-tailwindcss-in-a-wordpress-theme/ -->
// <!-- https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/ -->
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

    <!-- start moEngage -->
    <link rel="manifest" href="manifest.json">
    <script type="text/javascript">
    (function(i,s,o,g,r,a,m,n){
    i['moengage_object']=r;t={}; q = function(f){return function(){(i['moengage_q']=i['moengage_q']||[]).push({f:f,a:arguments});};};
    f = ['track_event','add_user_attribute','add_first_name','add_last_name','add_email','add_mobile',
    'add_user_name','add_gender','add_birthday','destroy_session','add_unique_user_id','moe_events','call_web_push','track','location_type_attribute'];
    for(k in f){t[f[k]]=q(f[k]);}
    a=s.createElement(o);m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);
    i['moe']=i['moe'] || function(){n=arguments[0];return t;}; a.onload=function(){if(n){i[r] = moe(n);}};
    })(window,document,'script','https://cdn.moengage.com/webpush/moe_webSdk.min.latest.js','Moengage');

    Moengage = moe({
    app_id:"",
    debug_logs: 1
    });
    </script>
    <!-- end moEngage -->  		

  	<style>
  		#menu-toggle:checked + #c4x-menu {
  			display: block;
  		}
  	</style>

	<?php wp_head(); ?>

</head>

<body class="bg-white text-c-38424b" <?php body_class(); ?>>

<header class="header bg-white fixed w-full text-gray-500" style="--bg-opacity: 0.95;">

	<div class="lg:w-10/12 md:w-10/12 w-11/12 mx-auto flex lg:flex-row md:flex-row flex-col justify-between lg:py-0 md:py-0 py-5 relative">
		<div class="flex lg:flex-row md:flex-row flex-col items-center lg:justify-start md:justify-start justify-center lg:py-3 md:py-3 py-0">
			<a href="<?php echo bloginfo('url'); ?>">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/empatkali-logo.png" class="w-40 lg:mb-0 md:mb-0 mb-4" alt="">
			</a>
			<div class="inline-flex items-center lg:border-l md:border-l border-0 border-gray-500 py-3 lg:pl-5 md:pl-5 pl-0 lg:ml-5 md:ml-5 ml-0 lg:mb-0 md:mb-0 mb-3">
				<img src="https://images.empatkali.co.id/ojk-gray.png" class="w-48 -mt-2" alt="">
				<span class="border-2 border-c-primary text-xs px-1 ml-4 mt-1 text-gray-700 font-semibold">TKB90: 95.2%</span>
			</div>
		</div>

		<label for="menu-toggle" class="cursor-pointer lg:hidden block absolute top-0 mt-6">
			<svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
		</label>
		<input class="hidden" type="checkbox" id="menu-toggle" />

		<div class="hidden lg:flex md:flex lg:mb-0 md:mb-0 mb-5" id="c4x-menu">
		<?php
			// Navigation
			wp_nav_menu([
				'menu' => 'main-nav'
			]);
		?>
		</div>
	</div>
</header>