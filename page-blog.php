<?php get_header(); ?>

<section class="hero pt-20 bg-c-primary text-white">
	<div class="mx-auto flex lg:flex-row md:flex-row flex-col py-20">
		<div class="lg:w-7/12 md:w-7/12 w-full flex flex-col justify-center items-start lg:pl-40 md:pl-40 pl-5 pr-5 lg:text-left md:text-left text-center">
			<h2 class="text-4xl leading-tight mb-3 font-thin">Berita terbaru seputar <span class="font-bold tracking-wider">EMPATKALI</span></h2>
			<p class="font-light text-sm">Baca artikel menarik seputar <strong>FASHION</strong>, <strong>FINANCE</strong>, <strong>BUSINESS</strong>, dan topik lainnya</p>
			<?php get_search_form(); ?>
		</div>
		<div class="lg:w-5/12 md:w-5/12 w-full lg:mt-0 md:mt-0 mt-10">
			<img src="https://images.empatkali.co.id/rebranding/hero-blog.png" class="w-11/12" alt="">
		</div>
	</div>
</section>

<section class="bg-c-primary border-t-2 border-white text-white">
	<nav class="lg:w-10/12 md:w-10/12 w-full mx-auto flex items-center py-4 lg:px-0 md:px-0 px-5">
		<label class="font-bold lg:mb-0 md:mb-0 mb-5">KATEGORI</label>
		<ul class="flex lg:flex-no-wrap md:flex-no-wrap flex-wrap">
		<?php

		// @refactor
		// - should still display category page even if there's no content
		$terms = get_terms( array(
			'taxonomy' => 'category',
			'parent' => 0
		) );

		if ( $terms ) {
			foreach ( $terms as $term ) {
				echo
					'<li class="border-l border-white ml-5 pl-5">
						<a href="' . esc_url( get_category_link( $term->term_id ) ) . '" class="font-thin uppercase">' . $term->name . '</a>
					</li>';
			}
		}

		?>
		</ul>
	</nav>
</section>


<section>
	<div class="pt-20">
		<h4 class="w-8/12 mx-auto text-3xl font-hairline leading-none mb-10 pb-5 border-b border-c-primary text-center">ARTIKEL TERBARU</h4>
		<div class="flex lg:flex-row md:flex-row flex-col opacity-100">

			<?php

			// Display
			$q_Latest_Articles = new WP_Query(array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'publish_date',
				'order' => 'DESC',
				'posts_per_page' => 4
			));

			if ( $q_Latest_Articles->have_posts() ) : while ( $q_Latest_Articles->have_posts() ): $q_Latest_Articles->the_post(); ?>

			<div class="lg:w-1/4 md:w-1/4 w-full relative" style="height: 24rem">
				<a href="<?php echo get_permalink(); ?>">
					<?php
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						if ( has_post_thumbnail() ) {
							echo '<img src="' . esc_url($featured_img_url) . '" class="w-full h-full object-cover" alt="">';
						} else {
							echo '<img src="https://images.empatkali.co.id/rebranding/default.png" />';
						}
					?>
					<div class="absolute bottom-0 text-white bg-c-primary w-full h-40 py-6 px-5 bg-opacity-75">
						<h4 class="mb-2"><?php the_title(); ?></h4>
						<div class="text-xs">Kategori
							<?php foreach (get_the_category() as $category): ?>
								<span><?php echo $category->name; ?></span>
							<?php endforeach; ?>
						</div>
						<span class="text-xs">Terbit <?php echo get_the_date('F jS, Y'); ?></span>
					</div>
				</a>
			</div>

			<?php
			endwhile;
			endif;
			?>

		</div>
	</div>
</section>


<section>
	<div class="py-20">
		<h4 class="w-8/12 mx-auto text-3xl font-hairline leading-none mb-10 pb-5 border-b border-c-primary text-center">PALING BANYAK DIBACA</h4>
		<div class="flex lg:flex-row md:flex-row flex-col w-10/12 mx-auto">

			<?php

			$q_Popular_Articles = new WP_Query(array(
				// 'post_type' => 'post',
				'post_status' => 'publish',
				'meta_key' => 'empatkali_post_views_count',
				'orderby' => 'meta_value_num',
				'order' => 'DESC',
				'posts_per_page' => 4
			));

			if ( $q_Popular_Articles->have_posts() ) : while ( $q_Popular_Articles->have_posts() ): $q_Popular_Articles->the_post(); ?>

			<div class="lg:w-1/4 md:w-1/4 w-full mr-5 last:mr-0 lg:mb-0 md:mb-0 mb-5">
				<a href="<?php echo get_permalink(); ?>">
					<?php
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					if ( has_post_thumbnail() ) {
						echo '<img src="' . esc_url($featured_img_url) . '" class="rounded w-full h-48 object-cover" alt="">';
					} else {
						echo '<img src="https://images.empatkali.co.id/rebranding/default.png" class="rounded w-full h-48 object-cover" />';
					}
					?>
					<h4 class="mt-2 text-sm"><?php the_title(); ?></h4>
				</a>
			</div>

			<?php
				endwhile;
				endif;
				wp_reset_query();
			?>
		</div>
	</div>
</section>


<section>
	<div class="py-20">
		<h4 class="w-8/12 mx-auto text-3xl font-hairline leading-none mb-10 pb-5 border-b border-c-primary text-center">ARTIKEL LAINNYA</h4>
		<div class="flex lg:flex-row md:flex-row flex-col lg:mx-0 md:mx-0 mx-5">
			<?php
				// if ( have_posts() ) : while ( have_posts() ): the_post();
			?>

			<?php

			// Display
			$q_Latest_Articles = new WP_Query(array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'publish_date',
				'order' => 'DESC',
				'posts_per_page' => 4
			));

			if ( $q_Latest_Articles->have_posts() ) : while ( $q_Latest_Articles->have_posts() ): $q_Latest_Articles->the_post(); ?>

			<div class="lg:w-1/4 md:w-1/4 w-full mr-5 last:mr-0 lg:mb-0 md:mb-0 mb-5">
				<a href="<?php echo get_permalink(); ?>">
					<?php
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					if ( has_post_thumbnail() ) {
						echo '<img src="' . esc_url($featured_img_url) . '" class="rounded w-full h-48 object-cover" alt="">';
					} else {
						echo '<img src="https://images.empatkali.co.id/rebranding/default.png" class="rounded w-full h-48 object-cover" alt="" />';
					}
					?>
					<h4 class="mt-2 text-sm"><?php the_title(); ?></h4>
				</a>
			</div>

			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>
</section>
 
<?php get_footer(); ?>