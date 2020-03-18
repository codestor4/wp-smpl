<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">
		<?php get_template_part( 'includes/section', 'archive' ); ?>
		<div class="text-center theme-pagination">
			<?php get_template_part( 'includes/section', 'pagination' ); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
