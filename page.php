<?php get_header(); ?>

<section class="hero pt-20 bg-c-38424b bg-opacity-25">
  <div class="py-10 w-10/12 mx-auto">
    <h2 class="text-3xl font-thin text-c-38424b uppercase">
      <?php echo the_title(); ?>
    </h2>
  </div>
</section>

<div class="w-10/12 mx-auto py-10">
	<div class="c4x-content">
		<?php the_content(); ?>
	</div>
</div>
 
<?php get_footer(); ?>