<div class="mt-10 lg:w-2/3 md:w-2/3 w-full relative rounded-md shadow-sm">
	<form method="get" action="<?php echo esc_url( home_url('/') ); ?>" id="frmBlogSearch">
		<input type="text" class="focus:outline-none block w-full pl-4 pr-8 sm:text-sm border-gray-300 rounded-full text-black py-2" placeholder="Search" name="s" autocomplete="off" required>
		<div class="absolute inset-y-0 right-0 mr-2 flex items-center">
			<button type="submit">
				<i class="fas fa-search text-c-primary"></i>
			</button>
		</div>
	</form>
</div>