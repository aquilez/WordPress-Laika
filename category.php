<?php get_header(); ?>

	<div id="content" class="twelve columns">

		<h1><?php printf(__('Category Archives: %s', 'laika'), '<span>' . single_cat_title('', FALSE) . '</span>'); ?></h1>

		<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>

				<?php get_template_part('dry/loop', 'category'); ?>

			<?php endwhile; ?>

			<?php get_template_part('dry/pagination', 'category'); ?>

		<?php else : ?>

			<?php get_template_part('dry/no-results', 'category'); ?>

		<?php endif; ?>

	</div><!-- #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>