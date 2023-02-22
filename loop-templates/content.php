<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<li class="ws-linklist-item">

<?php 
	$image_id = get_post_thumbnail_id();
	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
	$size = 'thumbnail';
	$image_src = wp_get_attachment_image_src($image_id, $size)[0];
?>

<img class="ws-linklist-thumb" src="<?php echo $image_src ?>" alt="<?php echo $image_alt ?>">
<div class="ws-linklist-body">
		<?php
		the_title(
			sprintf( '<h2 class="ws-linklist-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>
		
		<?php 
	
	$single_excerpt = apply_filters('the_excerpt', get_post_field('post_excerpt', $post_id));
	$single_excerpt = strip_tags($single_excerpt);
	echo '<p class="ws-linklist-desc">' . $single_excerpt . '</p>';

	?>

		<p class="ws-linklist-desc ws-linklist-desc-sm">
			<?php echo get_the_date('d F Y'); ?> 
		</p>
    </div>
    </li>

</article><!-- #post-<?php the_ID(); ?> -->
