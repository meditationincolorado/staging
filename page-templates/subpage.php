<?php
/**
 * Template Name: Subpage
 *
 * @package WordPress
 * @subpackage NKT_Template_1
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php include(get_template_directory() . '/nav.php'); ?>

<?php $google_api_key = 'AIzaSyAnL4zStsZJPP02QcauWi52QUHUReLg9UE'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	$title = get_the_title();
	$thumb_id = get_post_thumbnail_id();
 	$isDefined = is_int($thumb_id); 
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];	
?>

	<div id="subpage-hero" class="row cover center_vert_parent" style='background-image: url("<?php echo $thumb_url; ?>");'>
		<div class="tint"></div>
			<hgroup class="col-xs-12 col-xs-10 col-xs-offset-1 center_vert">
				<h1><?php echo get_the_title() ?></h1>
				<p><?php echo $post->subpage_blurb; ?></p>
			</hgroup>
		<?php include(get_template_directory() . '/mobile-nav.php'); ?>
	</div>

	<!-- Subnav -->
	<?php include(get_template_directory() . '/subpage_subnav.php'); ?>

	<!-- Content -->

	<?php if ($post->post_name == 'cart') { ?>

		<?php echo do_shortcode("[woocommerce_cart]"); ?>

	<?php } ?>

	<?php if ($post->post_name == 'checkout') { ?>

		<?php echo do_shortcode("[woocommerce_checkout]"); ?>

	<?php } ?>

	<?php include(get_template_directory() . '/custom-content.php'); ?>
	
<?php endwhile; endif; ?>


<?php get_footer(); ?>

