<?php
/**
 * The template for displaying category pages
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<main id="content">

<div class="container"><div class="row"><div class="col-sm-12">   
<?php ws_breadcrumb() ?>

</div></div></div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">    
            <div class="row">
                <div class="col-sm-8">

<?php if ( have_posts() ) { ?>

    <h1 class="ws-h-icon h2"> <?php single_cat_title(); ?></h1>

    <?php if (category_description() ) : ?>
<div><?php category_description(); ?></div>
<?php endif; ?>

<ul class="ws-linklist">
        
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

</ul>   

			</main>

			<?php
			// Display the pagination component.
			understrap_pagination();
			?>

</div></div>
</div></div>
</div>

</main>

<?php
get_footer();