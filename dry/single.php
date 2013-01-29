<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1><?php the_title(); ?></h1>
	</header>

	<?php if(has_post_thumbnail()) : ?>
		<figure class="post-thumbnail">
			<?php the_post_thumbnail('thumbnail'); ?>
		</figure>
	<?php endif; ?>

	<div class="post-content">
		<?php the_content(); ?>
	</div>

	<nav>
		<?php wp_link_pages('before=&after='); ?>
	</nav>

	<div id="post-author">
		<h3><?php _e('Author:', 'laika'); ?> <?php the_author_posts_link() ?></h3>

		<p class="gravatar">
			<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
		</p>

		<div id="author-description">
			<?php the_author_meta('description') ?>

			<div id="author-link">
				<p>
					<?php _e('View all posts by:', 'laika'); ?> <?php the_author_posts_link() ?>
				</p>
			</div>
		</div>
	</div>

	<footer>
		<p>
			<?php printf(__('Written on %1$s at %2$s, by <a href="%3$s">%4$s</a>', 'laika'), get_the_date(), get_the_time(), get_author_posts_url(get_the_author_meta('id')), get_the_author()); ?>
		</p>

		<p>
			<?php _e('Categories:'); ?> <?php the_category(', ') ?>
			<br />
			<?php the_tags('Tags: ', ', ', ' '); ?>
		</p>
	</footer>
</article>
