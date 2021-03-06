<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 *
 * <?php include(get_template_directory() . '/subpage_subnav.php'); ?>
 */

get_header(); ?>
<?php include(get_template_directory() . '/nav.php'); ?>

<?php $google_api_key = 'AIzaSyAnL4zStsZJPP02QcauWi52QUHUReLg9UE'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	$thumb_id = get_post_thumbnail_id();
 	$isDefined = is_int($thumb_id); 
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];	
?>

	<div id="subpage-hero" class="row cover center_vert_parent" style='background-image: url("<?php echo $thumb_url; ?>");'>
		<div class="tint"></div>
			<hgroup class="col-xs-12 col-xs-10 col-xs-offset-1 center_vert">
				<h1><?php echo get_the_title(); ?></h1>
				<p><?php echo $post->subpage_blurb; ?></p>
			</hgroup>
		<?php include(get_template_directory() . '/mobile-nav.php'); ?>
	</div>

	<!-- Content -->

	<div id="content" class="row single-php">
	<?php 
    			$bkgColor = ($post->feature_section_background_color) ? 'background-color: ' . $post->feature_section_background_color . '; ' : '';
    			$fontColor = ($post->font_color) ? 'color: ' . $post->font_color . '; ': '';
    			$style = 'style="' . $bkgColor . $fontColor . '"';
    		?>
	<section class="nav-section" <?php echo $style; ?>>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
		<article id="<?php echo $anchorTag; ?>">
	        		<a name="<?php echo $anchorTag; ?>"></a>
					<?php the_content(); ?>

			<!-- <?php
				$args = array( 
		      'post_type' => 'post',
		      'posts_per_page' => 5,
		      'category_name' => 'About Page',
		      'orderby' => 'subpage_section_order',
		      'order'   => 'ASC',
		    );

		        $subpageFeatures = new WP_Query($args);
		        while ($subpageFeatures->have_posts()) : $subpageFeatures->the_post(); ?>
		        	<article id="<?php echo get_the_title(); ?>">
			        	<h2><?php echo get_the_title(); ?></h2>
			        	<?php echo the_content(); ?>
		        	</article>
		        <?php endwhile;
		        wp_reset_postdata();
			?> -->
			</article>
		</div>
		<div style="clear:both"></div>
		</section>
<?php endwhile; endif; ?>


<?php get_footer(); ?>

