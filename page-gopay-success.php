
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
  		html, body{
        height: 100%;
      }
  	</style>

	<?php wp_head(); ?>

</head>
<body >
  <section class="flex items-center justify-center h-full">
    <div class="text-center">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/green-check.svg" alt="" class="mx-auto my-8 w-32">
      <p class="font-light text-3xl mx-auto w-7/12">Berhasil<br>Terhubung dengan</p>
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/gopay-logo.svg" alt="" class="mx-auto my-8 w-80" style="width: 320px;">
      <p class="font-normal text-2xl mx-auto w-11/12">Kamu akan menggunakan Gopay sebagai metode pembayaran pertama di setiap transaksi dengan Empatkali</p>
    </div>
  </section>
</body>
 

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133445843-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-133445843-1');
</script>

<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '399006504230859'); 
	fbq('track', 'PageView');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 786153224 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-786153224"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'AW-786153224');
</script>




<?php wp_footer(); ?>

</body>
</html>