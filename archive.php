<?php get_header(); ?>

	<div id="content" class="twelve columns">

		<h1>
			<?php if(is_day()) : ?>
				<?php printf(__('Daily Archives: <span>%s</span>', 'laika'), get_the_date()); ?>
			<?php elseif(is_month()) : ?>
				<?php printf(__('Monthly Archives: <span>%s</span>', 'laika'), get_the_date('F Y')); ?>
			<?php elseif(is_year()) : ?>
				<?php printf(__('Yearly Archives: <span>%s</span>', 'laika'), get_the_date('Y')); ?>
			<?php else : ?>
				Blog Archives
			<?php endif; ?>
		</h1>


		<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>

				<?php get_template_part('dry/loop', 'archive'); ?>

			<?php endwhile; ?>

			<?php get_template_part('dry/pagination', 'index'); ?>

		<?php else : ?>

			<?php get_template_part('dry/no-results', 'archive'); ?>

		<?php endif; ?>

	</div><!-- #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>