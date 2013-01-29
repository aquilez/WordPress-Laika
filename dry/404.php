<article id="error-404" class="post">
	<header>
		<h1><?php _e('Error 404: Page not Found', 'laika'); ?></h1>
	</header>

	<div class="post-content">
		<p>
			<?php _e('The page cannot be found.', 'laika'); ?>
		</p>

		<p>
			<?php _e('Please check your URL or use the search form below.', 'laika'); ?>
		</p>

		<?php get_search_form(); ?>
	</div>
</article>