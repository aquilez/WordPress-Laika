<?php

/**
 * Set content area width. It's used by wordpress internally.
 */

$content_width = 700;

/**
 * Enqueue default styles/scripts
 */
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/custom.js');
	wp_enqueue_style('base',      get_template_directory_uri() . '/assets/css/base.css');
	wp_enqueue_style('layout',    get_template_directory_uri() . '/assets/css/layout.css');
	wp_enqueue_style('style',     get_template_directory_uri() . '/assets/css/style.css');

	if(is_singular())
	{
		wp_enqueue_script('comment-reply');
	}
});

/**
 * Register widgetized areas
 */

register_sidebar(array(
	'name'           => 'Sidebar',
	'id'             => 'sidebar-widgets',
	'before_widget'  => '<div class="widget %2$s">',
	'after_widget'   => '</div>',
	'before_title'   => '<h3>',
	'after_title'    => '</h3>',
));

/**
 * Add support for extra features
 */

add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');

/**
 * Register navigation menu
 */

register_nav_menu('header', 'Header Menu');

/**
 * Do not count trackbacks on comments count
 */

add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	if ( ! is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
		return count($comments_by_type['comment']);
	} else {
		return $count;
	}
}

/**
 * Callback for comments display
 */

function whiteboard_comments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>

		<?php if ($comment->comment_approved == '0') : ?>

			<p class="waiting-for-approval">
				<em>Your comment is awaiting approval.</em>
			</p>

		<?php endif; ?>

		<div class="comment-text">
			<?php comment_text(); ?>
		</div>

		<div class="comment-meta">
			<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
			<?php edit_comment_link('Edit Comment', '', ''); ?>
			By <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?>
			<p class="gravatar"><?php echo get_avatar($comment, '36'); ?></p>
		</div>
<?php
}

/**
 * Callback for trackbacks display
 */

function whiteboard_pings($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<?php comment_author_link() ?>
	</li>
<?php
}