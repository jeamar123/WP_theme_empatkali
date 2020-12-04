<?php get_header();

// @Note:
// - add pagination

?>

<section class="c4x-blog-search pt-20 bg-c-38424b bg-opacity-25">
  <div class="py-10 w-10/12 mx-auto">
    <h2 class="text-3xl font-thin text-c-38424b uppercase">
      Search results for: "<?php echo esc_html(get_search_query(false)); ?>"
    </h2>
  </div>
</section>

<div class="w-10/12 mx-auto pt-10 pb-20">

  <ul class="flex flex-wrap search-result">

    <?php

      $q_Search = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        's' => $_GET['s']
      ));

      if ( $q_Search->have_posts() ) : while ( $q_Search->have_posts() ): $q_Search->the_post();

      // if ( have_posts() ) : while ( have_posts() ): the_post();
    ?>
    <li class="mr-6 mb-6" style="width: calc(33.3333% - 1.5rem)">
      <a href="<?php echo get_the_permalink(); ?>" title="<?php echo the_title(); ?>">
        <?php
          $categoryPostTitle =  mb_strimwidth(get_the_title(), 0, 35, '[...]');
          echo '<h4 class="text-lg font-bold">'.$categoryPostTitle.'</h4>';
        ?>

        <div class="flex text-xs mb-3">
          <div class="inline-flex">
            <label class="mr-1 text-c-98A2AB">Kategori</label>
            <ul>
              <?php
                $getPostCategories = get_the_category();
                $postCategories = count( $getPostCategories ) > 0 ? $getPostCategories[0]->name : 'No Category';
                echo "<li>{$postCategories}</li>";
              ?>
            </ul>
          </div>
          <span class="mx-1">&bull;</span>
          <div>
            <label class="mr-1 text-c-98A2AB">Terbit</label>
            <span><?php echo get_the_date('F jS, Y'); ?></span>
          </div>
        </div>

        <div class="mb-3">
          <?php
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if ( has_post_thumbnail() ) {
              echo '<img src="' . esc_url($featured_img_url) . '" class="w-full rounded object-cover" style="height: 13rem;" />'/*h-52*/;
            } else {
              echo '<img src="https://images.empatkali.co.id/rebranding/default.png" class="w-full rounded object-cover" style="height: 13rem;" />'/*h-52*/;
            }
          ?>
        </div>

        <p class="truncate mb-3"><?php echo get_the_excerpt(); ?></p>
        <button type="button" class="border w-full bg-c-38424b text-white rounded-full py-1 text-sm">BACA SELANJUTNYA</button>
      </a>
    </li>
    <?php
    endwhile;
    endif;

    /* Restore original Post Data */
    // wp_reset_postdata();
    ?>
  </ul>

  <div class="text-center">
    <?php
      /*global $wp_query;
      echo paginate_links(array(
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $wp_query->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'type'         => 'plain',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        'prev_text'    => __( '&laquo; Previous' ),
        'next_text'    => __( 'Next &raquo;' ),
        'add_args'     => false,
        'add_fragment' => '',
      ));*/
    ?>
  </div>

</div>
 
<?php get_footer(); ?>