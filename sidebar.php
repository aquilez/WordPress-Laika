<aside id="sidebar" class="four columns">

	<?php if(!dynamic_sidebar('sidebar-widgets')) : ?>

		<p><?php _e('No widgets found', 'laika'); ?></p>

	<?php endif; ?>

</aside>