<?php get_header(); ?>

	<div id="content" class="twelve columns">

		<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>

				<?php get_template_part('dry/loop', 'index'); ?>

			<?php endwhile; ?>

			<?php get_template_part('dry/pagination', 'index'); ?>

		<?php else : ?>

			<?php get_template_part('dry/no-results', 'index'); ?>

		<?php endif; ?>

	</div><!-- #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>