<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package WorldSkills 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav class="navbar navbar-expand-md ws-navbar-main ws-navbar-stripe">
    <div class="container">
	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


<?php if ( 'container' === $container ) : ?>
	<div class="container">
<?php endif; ?>

		<!-- Your site title as branding in the menu -->
			<?php if ( has_custom_logo() ) : ?>

			<?php the_custom_logo(); ?>

			<?php else : ?>		
				<div class="navbar-brand m-0">	
					<a class="navbar-link" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
			</div>	
			<?php endif; ?>
	
		<!-- end custom logo -->
		
		<button class="navbar-toggler collapsed ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            Menu
        </button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

<?php if ( 'container' === $container ) : ?>
	</div><!-- .container -->
<?php endif; ?>

</nav><!-- .site-navigation -->

<?php if ( is_front_page () ) : ?>
	<?php if( has_custom_logo() ):  ?>
        <?php 
            // Get Custom Logo URL
            $custom_logo_id = get_theme_mod( 'wp_theme_mods' );
        ?>

	<div class="container">
    
	<div class="ws-hero-logo w-25">

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
           title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
           rel="home">
		   
            <img src="<?php echo $custom_logo_id['wp_header_logo'] ?>" 
                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

        </a>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>
