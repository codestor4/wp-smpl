<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">
		<?php 
		if ( is_category() ):?>
			<h1 class="pb-4">Category: <?php single_cat_title(); ?></h1>
		<?php elseif ( is_tag() ): ?>
			<h1 class="pb-4">Tag: <?php single_tag_title(); ?></h1>
		<?php endif; 
		?>
		<?php get_template_part( 'includes/section', 'archive' ); ?>
		<?php get_template_part( 'includes/section', 'pagination' ); ?>
	</div>
</section>

<?php get_footer(); ?>
