<?php get_header();


// Get data
// vm.showMerchantsByCategory(['coming-soon', '5da99bed96ca0e32f480f8b7'])
// vm.showMerchantsByCategory(['accessories', '5da99be196ca0e32f480f8b6'])
// vm.showMerchantsByCategory(['women', '5da99bd596ca0e32f480f8b5'])
// vm.showMerchantsByCategory(['men', '5da99b8e96ca0e32f480f8b2'])


// VUE_APP_API_URL=https://api.empatkali.co.id/admin
// VUE_APP_AUTHORIZATION="Basic ZW1wYXRrYWxpOnZIPHRWQEBFN3cuWDNjWlM="

// Base API
/*$baseApiUrl = 'https://api.empatkali.co.id/admin';

// Query Category
$qPria = */



?>

<div class="page pt-20 bg-c-F3F3F3">
  <div class="py-10 lg:w-10/12 md:w-10/12 w-11/12 mx-auto">
  	<div class="flex border-b-2 border-c-38424b pb-6 mb-10">
	    <div class="w-1/4 text-center">
	    	<i class="fa fa-mouse-pointer text-3xl mb-4"></i>
	    	<span class="block text-sm">1. Select</span>
	    	<p class="lg:text-base md:text-base text-sm">Redirect to Merchant</p>
	    </div>
	    <div class="w-1/4 text-center">
	    	<i class="fa fa-shopping-cart text-3xl mb-4"></i>
	    	<span class="block text-sm">2. Checkout</span>
	    	<p class="lg:text-base md:text-base text-sm">Go to Checkout</p>
	    </div>
	    <div class="w-1/4 text-center">
	    	<i class="fa fa-envelope-open-text text-3xl mb-4"></i>
	    	<span class="block text-sm">3. Receive Instantly</span>
	    	<p class="lg:text-base md:text-base text-sm">Authorise Payment</p>
	    </div>
	    <div class="w-1/4 text-center">
	    	<i class="fa fa-thumbs-up text-3xl mb-4"></i>
	    	<span class="block text-sm">4. Redeem</span>
	    	<p class="lg:text-base md:text-base text-sm">Get your goods shipped</p>
	    </div>
    </div>

    <div>
		  <div id="c4x-partner-pria" class="mb-5">
		  	<h4 class="text-2xl">Pria</h4>
		  	<div class="flex flex-wrap -mx-2"></div>
		  </div>

		  <div id="c4x-partner-wanita" class="mb-5">
		  	<h4 class="text-2xl">Wanita</h4>
		  	<div class="flex flex-wrap -mx-2"></div>
		  </div>

		  <div id="c4x-partner-accessories" class="mb-5">
		  	<h4 class="text-2xl">Accessories</h4>
		  	<div class="flex flex-wrap -mx-2"></div>
		  </div>

		  <div id="c4x-partner-coming-soon">
		  	<h4 class="text-2xl">Coming Soon</h4>
		  	<div class="flex flex-wrap -mx-2"></div>
		  </div>
	  </div>

  </div>
</div>
 
<?php get_footer(); ?>