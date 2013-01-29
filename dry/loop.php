<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</header>

	<?php if(has_post_thumbnail()) : ?>
		<figure class="post-thumbnail">
			<?php the_post_thumbnail('thumbnail'); ?>
		</figure>
	<?php endif; ?>

	<div class="post-content">
		<?php the_content(); ?>
	</div>

	<footer>
		<p>
			<?php printf(__('Written on %1$s at %2$s, by <a href="%3$s">%4$s</a>', 'laika'), get_the_date(), get_the_time(), get_author_posts_url(get_the_author_meta('id')), get_the_author()); ?>
		</p>

		<p>
			<?php comments_popup_link(__('No Comments', 'laika'), __('1 Comment', 'laika'), __('% Comments', 'laika')); ?>
			<br />
			<?php _e('Categories:', 'laika'); ?> <?php the_category(', ') ?>
			<br />
			<?php if (the_tags(__('Tags: ', 'laika'), ', ', ' ')); ?>
		</p>
	</footer>
</article>
