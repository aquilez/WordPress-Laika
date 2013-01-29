<?php get_header(); ?>

<?php
	if(isset($_GET['author_name']))
	{
		$author = get_userdatabylogin($author_name);
	}
	else
	{
		$author = get_userdata(intval($author));
	}
?>

	<div id="content" class="twelve columns">

		<div class="author">

			<h1><?php _e('About:', 'laika'); ?> <?php echo $author->display_name; ?></h1>

			<p class="avatar">
				<?php echo get_avatar($author->user_email, $size = '80'); ?>
			</p>

			<?php if(!empty($author->description)) : ?>
				<p>
					<?php echo $author->description; ?></a>
				</p>
			<?php endif; ?>

		</div>


		<div id="recent-posts">

			<?php if(have_posts()) : ?>

				<ul>

					<?php while(have_posts()) : the_post(); ?>

							<?php get_template_part('dry/loop', 'author'); ?>

					<?php endwhile; ?>

				</ul>

				<?php get_template_part('dry/pagination', 'author'); ?>

			<?php else : ?>

				<?php get_template_part('dry/no-results', 'author'); ?>

			<?php endif; ?>

		</div>

	</div><!-- #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>