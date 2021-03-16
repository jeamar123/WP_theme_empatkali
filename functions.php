<?php

define('THEME_VERSION', wp_get_theme()->get('Version'));

function empatkali_register_styles() {
	wp_enqueue_style( 'fontawesome-styles', get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.css');
	wp_enqueue_style( 'empatkali-styles', get_template_directory_uri().'/assets/css/app.css', [], THEME_VERSION);
}
add_action( 'wp_enqueue_scripts', 'empatkali_register_styles' );


// Count views
function empatkali_set_post_views($postID) {
	$count_key = 'empatkali_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ( $count == '' ) {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}


// Omit unnecessary headers to WP editor (tiny mce)
function omit_unnecessary_headers($args) {
	$args['block_formats'] = 'Paragraph=p;Heading 3=h3;Heading 4=h4';
	return $args;
}
add_filter('tiny_mce_before_init', 'omit_unnecessary_headers' );


add_theme_support( 'menus' );

// Remove p tags
// remove_filter('the_content','wpautop');


// Load javascript based on pages
function wpb_hook_javascript_footer() {
	if ( is_front_page() ) {
		js_page_home_page();
	} else if (is_page('partnership')) {
    	js_page_partnership();
	} else if (is_page('contact-us')) {
    	js_page_contact_us();
	} else if (is_page('faq')) {
    	js_page_faq();
	} else if (is_page('view-partners')) {
    	js_page_view_partners();
	} else if (is_page('blog')) {
    	js_page_blog();
	}
}
add_action('wp_footer', 'wpb_hook_javascript_footer');


// Add support for adding thumbnails
add_theme_support( 'post-thumbnails' );


// @Note:
// - create separate helper
// - should not accept multiple spaces ( )
// - document ready
function js_page_home_page() {
	?>
    <script>
		function ready(fn) {
			if (document.readyState != 'loading'){
				fn();
			} else {
				document.addEventListener('DOMContentLoaded', fn);
			}
		}

		ready(function () {
			let slideIndex = 0;
			showSlides();

			function showSlides() {
				let slides = document.getElementsByClassName('c4x-slides'),
					dots = document.getElementsByClassName("dot");

				for (let i = 0; i < slides.length; i++ ) {
					slides[i].style.display = 'none';
				}
				slideIndex++;
				if ( slideIndex > slides.length ) {
					slideIndex = 1;
				}
				for (let i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = 'flex';
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 5000);
			}
		});
    </script>
    <?php
}

function js_page_partnership() {
	?>
    <script>
    	let frm = document.getElementById('frmMerchantInquiry'),
    		inputs = frm.elements;

		/*frm.querySelector('input[name=telephone]').addEventListener('keyup', function(e) {
			frm.querySelector('input[name=telephone]').value.replace(/[0-9]/g, '--');
		})*/

    	frm.addEventListener('submit', function (event) {
    		event.preventDefault();

			// get loader class
			let loader = document.querySelector('.empatkali-loader');

    		// Blacklisted URLs
			let urlInput = inputs['website_url'].value
				.replace('http://', '')
				.replace('https://', '')
				.replace('www.', '')
				.split(/[/?#]/)[0];

			let blackListedUrls = ['instagram.com', 'tokopedia.com', 'bukalapak.com'];
			let blacklist = blackListedUrls.filter((url) => url === urlInput).length;

			if (blacklist > 0) {
				alert('Silakan masukkan url website Anda, bukan alamat social media maupun url market place.');
				return;
			}

    		let req = {
		        firstname: inputs['firstname'].value.trim(),
		        lastname: inputs['lastname'].value.trim(),
		        business_name: inputs['business_name'].value.trim(),
		        email: inputs['email'].value.trim(),
		        phone: inputs['telephone'].value.trim(),
		        website_url: inputs['website_url'].value.trim(),
		        message: inputs['message'].value.trim(),
    		}

			loader.style.display = 'block';
    		fetch('https://cms.empatkali.co.id/cms/merchant-inquiry', {
    			method: 'POST',
    			headers: {
    				'Content-Type': 'application/json',
    			},
    			body: JSON.stringify(req)
    		})
    			.then(response => response.json())
    			.then(res => {
					// gtag_report_conversion('https://empatkali.co.id/daftar')
					alert('Successfully Sent!');
					// clear fields
					frm.reset();
					// hide loader
					loader.style.display = 'none';
    			})

		    // Event snippet for EmpatKali - Website Lead (Daftar Form) conversion page
		    // In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button.
		    function gtag_report_conversion(url) {
		      var callback = function () {
		        if (typeof(url) != 'undefined') {
		          window.location = url
		        }
		      }
		      gtag('event', 'conversion', {
		          'send_to': 'AW-786153224/IIvKCKqJ8pgBEIj-7vYC',
		          'event_callback': callback
		      })
		    }
    	})
    </script>
    <?php
}

function js_page_contact_us() {
	?>
	<script>

		function ready(fn) {
			if (document.readyState != 'loading'){
				fn();
			} else {
				document.addEventListener('DOMContentLoaded', fn);
			}
		}

		ready(function () {

		    var theMap = new L.Map('the-map',{
		            center: [-6.248757, 106.781731],
		            zoom: 17,
		            zoomControl: false,
		            attributionControl: false
		        })
		    
		    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
		        detectRetina: true
		    }).addTo(theMap)
		    
		    L.control.scale({
		        position: 'bottomright'
		    }).addTo(theMap)

		    L.control.zoom({
		        position: 'topright'
		    }).addTo(theMap)

			var icon = L.divIcon({
			  html: '<i class="fa fa-map-marker-alt text-4xl"></i>',
			  iconSize: [20, 20],
			});
		    var theMarker = L.marker([-6.248757, 106.781731], {
		            icon: icon
		        })

		    theMap.addLayer(theMarker)
		});

	</script>
	<?php
}

function js_page_faq() {
	?>
	<script>

		function ready(fn) {
			if (document.readyState != 'loading'){
				fn();
			} else {
				document.addEventListener('DOMContentLoaded', fn);
			}
		}

		ready(function() {
			// Get the element with id="faqDefaultOpen" and click on it
			document.getElementById("faqDefaultOpen").click();

			let acc = document.getElementsByClassName("accordion");
			let i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					/* Toggle between adding and removing the "active" class,
					to highlight the button that controls the panel */
					this.classList.toggle("active-accordion");

					/* Toggle between hiding and showing the active panel */
					var panel = this.nextElementSibling;

					if (panel.style.display === "block") {
						panel.style.display = "none";
						panel.classList.remove('active-panel');
					} else {
						panel.style.display = "block";
						panel.className += ' active-panel';
					}
				});
			}

			// searchFaq();
		});

		function openFaq(evt, faqTab) {
			// Declare all variables
			let i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active-accordion", "");
			}

			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active-accordion", "");
				tablinks[i].parentElement.className = tablinks[i].parentElement.className.replace(" border-opacity-100", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(faqTab).style.display = "block";
			evt.currentTarget.className += " active-accordion";
			evt.currentTarget.parentElement.className += " border-opacity-100";
		}

		// Search FAQ
		function searchFaq() {
			let input = document.querySelector('.c4x-faq .search input'),
				filter = input.value.toLowerCase(),
				tabContainer = document.querySelector('.tab-container'),
				lists = tabContainer.getElementsByTagName('button');

			let buttonText;
			// iterate through items
			for (let i=0; i<lists.length; i++) {
				buttonText = lists[i].textContent || lists[i].innerText;
				if ( buttonText.toLowerCase().indexOf(filter) > -1 ) {
					lists[i].style.display = '';
				} else {
					lists[i].style.display = 'none';
				}
			}
		}


	</script>
	<?php
}

function js_page_view_partners() {
	?>

	<script>
		function ready(fn) {
			if (document.readyState != 'loading'){
				fn();
			} else {
				document.addEventListener('DOMContentLoaded', fn);
			}
		}

		ready(function () {
			showMerchantsByCategory(['coming-soon', '5da99bed96ca0e32f480f8b7']);
			showMerchantsByCategory(['accessories', '5da99be196ca0e32f480f8b6']);
			showMerchantsByCategory(['wanita', '5da99bd596ca0e32f480f8b5']);
			showMerchantsByCategory(['pria', '5da99b8e96ca0e32f480f8b2']);
		});

		function showMerchantsByCategory(categoryArr) {
    		fetch(`https://api.empatkali.co.id/admin/api/merchants/category?id=${categoryArr[1]}&limit=1000000`, {
    			headers: {
    				Authorization: "Basic ZW1wYXRrYWxpOnZIPHRWQEBFN3cuWDNjWlM="
    			}
    		})
    			.then(response => response.json())
    			.then(res => {
    				switch ( categoryArr[0] ) {
    					case 'pria':
							for (var i = 0; i < res.length; i++) {
								let listContent = `<figure class="w-1/6 lg:mx-2 md:mx-2 mx-1 my-2">\
														<a href="${res[i].website}" title="${res[i].name}" target="_blank">\
				            								<img src="${res[i].image}" alt="${res[i].name}" class="w-full rounded mb-1">\
				            								<figcaption class="text-center lg:block md:block hidden">${res[i].name}</figcaption>\
				            							</a>\
			          								</figure>`;
								document.querySelector('#c4x-partner-pria div').innerHTML += listContent;
							}
    						break
    					case 'wanita':
							for (var i = 0; i < res.length; i++) {
								let listContent = `<figure class="w-1/6 lg:mx-2 md:mx-2 mx-1 my-2">\
														<a href="${res[i].website}" title="${res[i].name}" target="_blank">\
					            							<img src="${res[i].image}" alt="${res[i].name}" class="w-full rounded mb-1">\
					            							<figcaption class="text-center lg:block md:block hidden">${res[i].name}</figcaption>\
					            						</a>\
			          								</figure>`;
								document.querySelector('#c4x-partner-wanita div').innerHTML += listContent;
							}
    						break
    					case 'accessories':
							for (var i = 0; i < res.length; i++) {
								let listContent = `<figure class="w-1/6 lg:mx-2 md:mx-2 mx-1 my-2">\
														<a href="${res[i].website}" title="${res[i].name}" target="_blank">\
					            							<img src="${res[i].image}" alt="${res[i].name}" class="w-full rounded mb-1">\
					            							<figcaption class="text-center lg:block md:block hidden">${res[i].name}</figcaption>\
					            						</a>\
			          								</figure>`;
								document.querySelector('#c4x-partner-accessories div').innerHTML += listContent;
							}
    						break
    					case 'coming-soon':
							for (var i = 0; i < res.length; i++) {
								let listContent = `<figure class="w-1/6 lg:mx-2 md:mx-2 mx-1 my-2">\
				            							<img src="${res[i].image}" alt="${res[i].name}" class="w-full rounded mb-1">\
				            							<figcaption class="text-center lg:block md:block hidden">${res[i].name}</figcaption>\
			          								</figure>`;
								document.querySelector('#c4x-partner-coming-soon div').innerHTML += listContent;
							}
    						break
    				}
    			})
		}


	</script>

	<?php
}

function js_page_blog() {
	?>
	<script>
		function ready(fn) {
			if (document.readyState != 'loading'){
				fn();
			} else {
				document.addEventListener('DOMContentLoaded', fn);
			}
		}

		ready(function () {
			let form = document.getElementById('frmBlogSearch');
			form.querySelector('input[name=s]').addEventListener('click', function (e) {
				// Capture initial value
				let initialScreenSize = screen.height;
				// Should be apply only with mobile device
				let mediaQuery = window.matchMedia('(max-width: 480px)');
				if (mediaQuery.matches) {
					// This will check if in case the keyboard pops up hence changed on screen height
					let awts = window.setInterval(function () {
						if ( checkScreenHeight() ) {
							// form.querySelector('input[name=s]').style.border = 'thin solid red';
						} else {
							// form.querySelector('input[name=s]').style.border = 'thin solid blue';
							window.scrollTo(0,  250 );
							clearInterval(awts);
						}
					}, 800);
				}

				function checkScreenHeight() {
					let kbActive = screen.height;
					if (initialScreenSize !== kbActive) {
						return true;
					} else {
						return false;
					}
				}
			})
		});
	</script>
	<?php
}



add_action( 'init', 'rewrite_gopayRequest_route' );
add_filter( 'query_vars', 'gopay_query_vars' );
function rewrite_gopayRequest_route(){
	add_rewrite_rule(
		'connectGopay/([0-9]+)/?$',
		'index.php?value=$matches[1]',
		'top' 
	);
	add_rewrite_tag('%value%','([^&]+)');
	connectGopayRequest();
}
function gopay_query_vars( $query_vars ){
	$query_vars[] = 'value';
	return $query_vars;
}
function connectGopayRequest()	{
	if(@strpos($_SERVER[REQUEST_URI], 'connectGopay')){
		$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$current_url = rtrim($current_url, "/");
		if(preg_match("/\/(\d+)$/",$current_url,$matches)){
			$end=$matches[1];
		}
		$md5 = md5("empatxGOPAYx4x" . $end );
		$url = 'http://redirect.empatkali.co.id/gopay.php?id=' . $end . '&m=' . $md5;
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		$keys = json_decode($result);
		if ($keys->status_code == '200' || $keys->status_code == 200) { 
			// wp_redirect("https://empatkali.co.id/gopay-success");
			header("Location: https://empatkali.co.id/gopay-success");
			exit();
		}else{
			// echo 'error' . $keys->account_status . ', code' . $keys->status_code;
		}
	}
	
}



?>
