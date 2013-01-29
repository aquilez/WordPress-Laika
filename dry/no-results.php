<div class="no-results">
	<p>
		<?php _e('Sorry, we didn\'t find any entries.', 'laika'); ?>
	</p>

	<p>
		<?php printf(__('We apologize for any inconvenience, please <a href="%1$s">return to the home page</a> or use the search form below.'), home_url()); ?>
	</p>

	<?php get_search_form(); ?>
</div>