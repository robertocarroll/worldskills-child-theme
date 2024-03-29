<?php
/**
 * Template Name: Hero Overlay Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();