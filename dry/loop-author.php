<li>

	<h3>
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</h3>

	<small>
		<?php printf(__('Written on %1$s at %2$s.', 'laika'), get_the_date(), get_the_time()); ?>
	</small>

</li>