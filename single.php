<?php

// Create template with sidebar

get_header(); ?>

<section class="c4x-blog pt-20 bg-c-F3F3F3">
	<div class="w-10/12 mx-auto flex lg:flex-row md:flex-row flex-col pt-10 pb-20">

		<div class="lg:w-8/12 md:w-8/12 w-full pr-2">
			<?php if ( have_posts() ) : while ( have_posts() ): the_post(); empatkali_set_post_views( get_the_ID() ); ?>

			<header class="mb-5">
				<h2 class="text-2xl font-bold"><?php the_title(); ?></h2>
				<div class="flex lg:flex-row md:flex-row flex-col text-sm">
					<div>
						<label>Kategori</label>
						<span>
							<?php foreach (get_the_category() as $category): ?>
								<a href="#"><?php echo $category->name; ?>,</a>
							<?php endforeach; ?>
						</span>
					</div>
					<div>
						<label>Terbit</label>
						<span><?php echo get_the_date('F jS, Y'); ?></span>
					</div>
				</div>
			</header>

			<?php
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

			<div class="text-left post-thumbnail-img mb-5">
				<?php if ( has_post_thumbnail() ) { ?>
					<img src="<?php echo esc_url( $featured_img_url )?>">
				<?php } ?>
			</div>

			<div class="c4x-content">
				<?php the_content(); ?>
			</div>

			<?php
			endwhile;
			endif;
			?>
		</div>

		<div class="lg:w-4/12 md:w-4/12 w-full lg:pl-10 md:pl-10 pl-0 lg:mt-0 md:mt-0 mt-5">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>