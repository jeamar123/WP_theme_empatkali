<h4 class="w-8/12 text-xl font-hairline leading-none mb-4 pb-4 border-b border-c-primary">KATEGORI</h4>

<ul>
<?php

$terms = get_terms( array(
	'taxonomy' => 'category',
	'parent' => 0
) );

if ( $terms ) {
	foreach ( $terms as $term ) {
		echo
			'<li class="mb-1 last:mb-0">
				<a href="'. esc_url( get_category_link( $term->term_id ) ) .'" class="flex justify-between text-sm">
				' . $term->name . '
					<span>'. $term->count .'</span>
				</a>
			</li>';
	}
}

?>
</ul>


<?php

$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

	$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page'=> 3, // Number of related posts that will be shown.
		'ignore_sticky_posts'=>1
	);

	$my_query = new wp_query( $args );
	// Displays only on single page
	if( $my_query->have_posts() && is_single() ) { ?>

		<hr class="border-gray-500 my-10">
		<h4 class="w-8/12 text-xl font-hairline leading-none mb-10 pb-4 border-b border-c-primary">ARTIKEL TERKAIT</h4>

		<ul>

		<?php
			while( $my_query->have_posts() ) {
				$my_query->the_post();
		?>
				<li class="border-b last:border-0 border-gray-400 mb-10 last:mb-0 pb-5">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">

					<?php

					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					if ( has_post_thumbnail() ) {
						echo '<img src="' . esc_url($featured_img_url) . '" class="w-full h-48 object-cover">';
					} else {
						echo '<img src="https://images.empatkali.co.id/rebranding/default.png" class="w-full h-48 object-cover" />';
					}

					?>
					<h4 class="mt-5">
						<?php the_title(); ?>
					</h4>

					</a>
				</li>

		<?php
			}
			echo '</ul>';
	}
}
$post = $orig_post;
wp_reset_query();

?>