<?php get_header(); ?>

	<div id="content" class="twelve columns">

		<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>

				<?php get_template_part('dry/single', get_post_format()); ?>

			<?php endwhile; ?>

			<?php comments_template('', TRUE); ?>

		<?php else : ?>

			<?php get_template_part('dry/404', 'single'); ?>

		<?php endif; ?>

	</div><!-- #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>