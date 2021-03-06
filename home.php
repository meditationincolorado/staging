<?php
/**
 * The template for displaying home page
 * Template Name: Homepage Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage NKT_Template_1
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- <?php include('banner-cta.php'); ?> -->
<?php include('nav.php'); ?>
<div id="hero-section">
	<?php include('hero.php'); ?>
	<?php include('mobile-nav.php'); ?>
	<style>#mobile-nav ul {margin:0px 0px 10vh 0px;}</style>
</div>
<?php include('subnav.php'); ?>
<?php include('features.php'); ?>

<!-- <?php include('footer-contact.php'); ?> -->
<?php get_footer(); ?>

