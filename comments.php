<div id="comments">

	<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
		<?php die('Please do not load this page directly or we will hunt you down. Thanks and have a great day!'); ?>
	<?php endif; ?>

	<?php if(post_password_required()) : ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'laika'); ?></p>
	<?php endif; ?>

	<?php if(have_comments()) : ?>
		<h3>
			<?php comments_number(__('No Comments', 'laika'), __('1 Comment', 'laika'), __('% Comments', 'laika')); ?>
		</h3>

		<?php if (!empty($comments_by_type['comment'])) : ?>
			<ol id="comments_list">
				<?php wp_list_comments('type=comment&callback=whiteboard_comments'); ?>
			</ol>

			<div id="comments_pagination">
				<?php paginate_comments_links(); ?>
			</div>
		<?php endif; ?>

		<?php if (!empty($comments_by_type['pings'])) : ?>
		<h3><?php _e('Trackbacks', 'laika'); ?></h3>
			<ol id="pings_list">
				<?php wp_list_comments('type=pings&callback=whiteboard_pings'); ?>
			</ol>
		<?php endif; ?>

	<?php else : ?>
		<p><?php _e('No comments yet. You should be kind and add one!', 'laika'); ?></p>
	<?php endif; ?>

	<div id="comments-form">
		<?php if(comments_open()) : ?>
			<?php comment_form(); ?>
		<?php else : ?>
			<p><?php _e('The comments are closed.', 'laika'); ?></p>
		<?php endif; ?>
	</div>

</div><!-- #comments -->