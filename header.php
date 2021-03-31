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

	<script>
	(function() {
	    // Boomerang Loader Snippet version 14
	    if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
	        return;
	    }

	    window.BOOMR = window.BOOMR || {};
	    window.BOOMR.snippetStart = new Date().getTime();
	    window.BOOMR.snippetExecuted = true;
	    window.BOOMR.snippetVersion = 14;

	    window.BOOMR.url = "https://c.go-mpulse.net/boomerang/" +
	      "8LUKS-8E27E-58W9D-V6YWA-7QB3A";

	    var // document.currentScript is supported in all browsers other than IE
	        where = document.currentScript || document.getElementsByTagName("script")[0],
	        // Parent element of the script we inject
	        parentNode = where.parentNode,
	        // Whether or not Preload method has worked
	        promoted = false,
	        // How long to wait for Preload to work before falling back to iframe method
	        LOADER_TIMEOUT = 3000;

	    // Tells the browser to execute the Preloaded script by adding it to the DOM
	    function promote() {
	        if (promoted) {
	            return;
	        }

	        var script = document.createElement("script");
	        script.id = "boomr-scr-as";
	        script.src = window.BOOMR.url;

	        // Not really needed since dynamic scripts are async by default and the script is already in cache at this point,
	        // but some naive parsers will see a missing async attribute and think we're not async
	        script.async = true;

	        parentNode.appendChild(script);

	        promoted = true;
	    }

	    // Non-blocking iframe loader (fallback for non-Preload scenarios) for all recent browsers.
	    // For IE 6/7, falls back to dynamic script node.
	    function iframeLoader(wasFallback) {
	        promoted = true;

	        var dom, doc = document, bootstrap, iframe, iframeStyle, win = window;

	        window.BOOMR.snippetMethod = wasFallback ? "if" : "i";

	        // Adds Boomerang within the iframe
	        bootstrap = function(parent, scriptId) {
	            var script = doc.createElement("script");
	            script.id = scriptId || "boomr-if-as";
	            script.src = window.BOOMR.url;

	            BOOMR_lstart = new Date().getTime();

	            parent = parent || doc.body;
	            parent.appendChild(script);
	        };

	        // For IE 6/7, we'll just load the script in the current frame, as those browsers don't support 'about:blank'
	        // for an iframe src (it triggers warnings on secure sites).  This means loading on IE 6/7 may cause SPoF.
	        if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]\./)) {
	            window.BOOMR.snippetMethod = "s";

	            bootstrap(parentNode, "boomr-async");
	            return;
	        }

	        // The rest of this function is IE8+ and other browsers that don't support Preload hints but will work with CSP & iframes
	        iframe = document.createElement("IFRAME");

	        // An empty frame
	        iframe.src = "about:blank";

	        // We set title and role appropriately to play nicely with screen readers and other assistive technologies
	        iframe.title = "";
	        iframe.role = "presentation";

	        // Ensure we're not loaded lazily
	        iframe.loading = "eager";

	        // Hide the iframe
	        iframeStyle = (iframe.frameElement || iframe).style;
	        iframeStyle.width = 0;
	        iframeStyle.height = 0;
	        iframeStyle.border = 0;
	        iframeStyle.display = "none";

	        // Append to the end of the current block
	        parentNode.appendChild(iframe);

	        // Try to get the iframe's document object
	        try {
	            win = iframe.contentWindow;
	            doc = win.document.open();
	        }
	        catch (e) {
	            // document.domain has been changed and we're on an old version of IE, so we got an access denied.
	            // Note: the only browsers that have this problem also do not have CSP support.

	            // Get document.domain of the parent window
	            dom = document.domain;

	            // Set the src of the iframe to a JavaScript URL that will immediately set its document.domain to match the parent.
	            // This lets us access the iframe document long enough to inject our script.
	            // Our script may need to do more domain massaging later.
	            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void 0;";
	            win = iframe.contentWindow;

	            doc = win.document.open();
	        }

	        if (dom) {
	            // Unsafe version for IE8 compatibility. If document.domain has changed, we can't use win, but we can use doc.
	            doc._boomrl = function() {
	                this.domain = dom;
	                bootstrap();
	            };

	            // Run our function at load.
	            // Split the string so HTML code injectors don't get confused and add code here.
	            doc.write("<bo" + "dy onload='document._boomrl();'>");
	        }
	        else {
	            // document.domain hasn't changed, regular method should be OK
	            win._boomrl = function() {
	                bootstrap();
	            };

	            if (win.addEventListener) {
	                win.addEventListener("load", win._boomrl, false);
	            }
	            else if (win.attachEvent) {
	                win.attachEvent("onload", win._boomrl);
	            }
	        }

	        // Finish the document
	        doc.close();
	    }

	    // See if Preload is supported or not
	    var link = document.createElement("link");

	    if (link.relList &&
	        typeof link.relList.supports === "function" &&
	        link.relList.supports("preload") &&
	        ("as" in link)) {
	        window.BOOMR.snippetMethod = "p";

	        // Set attributes to trigger a Preload
	        link.href = window.BOOMR.url;
	        link.rel  = "preload";
	        link.as   = "script";

	        // Add our script tag if successful, fallback to iframe if not
	        link.addEventListener("load", promote);
	        link.addEventListener("error", function() {
	            iframeLoader(true);
	        });

	        // Have a fallback in case Preload does nothing or is slow
	        setTimeout(function() {
	            if (!promoted) {
	                iframeLoader(true);
	            }
	        }, LOADER_TIMEOUT);

	        // Note the timestamp we started trying to Preload
	        BOOMR_lstart = new Date().getTime();

	        // Append our link tag
	        parentNode.appendChild(link);
	    }
	    else {
	        // No Preload support, use iframe loader
	        iframeLoader(false);
	    }

	    // Save when the onload event happened, in case this is a non-NavigationTiming browser
	    function boomerangSaveLoadTime(e) {
	        window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
	    }

	    if (window.addEventListener) {
	        window.addEventListener("load", boomerangSaveLoadTime, false);
	    }
	    else if (window.attachEvent) {
	        window.attachEvent("onload", boomerangSaveLoadTime);
	    }
	})();
	</script>     		

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
				<span class="border-2 border-c-primary text-xs px-1 ml-4 mt-1 text-gray-700 font-semibold">TKB90: 86.33%</span>
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

	<div class="c-download bg-white px-4 pt-2 lg:hidden md:hidden block">
		<img src="https://view.adjust.com/impression/1ar4n2t?label=Web_Sticky_Download_Label&engagement_type=fallback_click&redirect_android=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Did.empatkali&redirect_ios=https%3A%2F%2Fapps.apple.com%2Fus%2Fapp%2Fempatkali%2Fid1440454442" alt="">
		<label class="text-black block mb-1 text-xs">Belum punya aplikasi EmpatKali?</label>
		<div class="flex justify-between items-center pb-2">
			<div class="flex items-center">
				<a href="https://app.adjust.com/1ar4n2t?label=Web_Sticky_Download_Label&engagement_type=fallback_click&redirect_android=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Did.empatkali&redirect_ios=https%3A%2F%2Fapps.apple.com%2Fus%2Fapp%2Fempatkali%2Fid1440454442" target="_blank" class="mr-2">
					<img src="https://images.empatkali.co.id/download-istore.png" alt="" class="h-10">
				</a>
				<a href="https://app.adjust.com/1ar4n2t?label=Web_Sticky_Download_Label&engagement_type=fallback_click&redirect_android=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Did.empatkali&redirect_ios=https%3A%2F%2Fapps.apple.com%2Fus%2Fapp%2Fempatkali%2Fid1440454442" target="_blank">
					<img src="https://images.empatkali.co.id/download-play-store.png" alt="" class="h-10">
				</a>
			</div>
			<a href="#" class="text-black text-2xl border-2 border-black inline-block w-5 h-5 flex items-center justify-center rounded-full close">&times;</a>
		</div>
	</div>
</header>