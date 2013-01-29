<?php get_header(); ?>

	<div id="content" class="twelve columns">

		<h1><?php _e('Search results for:', 'laika'); ?> <?php the_search_query(); ?></h1>

		<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>

				<?php get_template_part('dry/loop', 'search'); ?>

			<?php endwhile; ?>

			<?php get_template_part('dry/pagination', 'search'); ?>

		<?php else : ?>

			<?php get_template_part('dry/no-results', 'search'); ?>

		<?php endif; ?>
	</div><!-- #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>