<?php
/**
 * Partial template for content in page.php
 *
 * @package WorldSkills-child
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php
	if ( ! is_page_template( 'page-templates/no-title.php' ) ) {
		the_title(
			'<header class="entry-header"><h1 class="page-title">',
			'</h1></header><!-- .entry-header -->'
		);
	}

	echo get_the_post_thumbnail( $post->ID, 'large' );
	?>

	<div class="ws-content mb-5">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->