<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
	<header>
		<h1><?php the_title(); ?></h1>
	</header>

	<?php if(has_post_thumbnail()) : ?>
		<figure class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</figure>
	<?php endif; ?>

	<div class="post-content">
		<?php the_content(); ?>
	</div>

	<nav>
		<?php wp_link_pages('before=&after='); ?>
	</nav>
</article>