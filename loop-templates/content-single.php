<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<main id="content">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="container"><div class="row"><div class="col-sm-12">    
<div class="row ws-content">

    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">

        <p class="mt-4 mb-0">
		<?php the_time('d F Y'); ?>   </p>

    </div>

</div>

</div></div></div>

<div class="container"><div class="row"><div class="col-sm-12">    
<div class="row">

    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">

        
<div class="ws-content">
<?php the_title( '<h1 class="ws-heading-title">', '</h1>' ); ?>
</div>

    </div>

</div>

</div></div></div>

<div class="container"><div class="row"><div class="col-sm-12">    
<div class="row">

    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">

        
<div class="ws-content">

    <?php 
	
	$single_excerpt = apply_filters('the_excerpt', get_post_field('post_excerpt', $post_id));
	$single_excerpt = strip_tags($single_excerpt);
	echo '<h2 class="ws-heading-standfirst">' . $single_excerpt . '</h2>';

	?>
</div>

    </div>

</div>

</div></div></div>

<? if( has_post_thumbnail( $post_id ) ): ?>
<div class="container"><div class="row"><div class="col-sm-12">    
<div class="row">

    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">

        
<div class="ws-content">

                    <figure class="mb-4">

	

        <img title="image title" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">

	</div>

</div>

</div>

</div></div></div>

<? endif; ?>


<div class="container"><div class="row"><div class="col-sm-12">    
<div class="row">

    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">

        
<div class="ws-content mb-5">

		<?php the_content(); ?>

		</div>

</div>

</div>

</div></div></div>


</article><!-- #post-## -->

<?php ws_breadcrumb() ?>

</main>