<?php
/**
 * Template Name: Home
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
				<?php 
				$args = array( 'post_type' => 'Banner', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();  ?>
				<?php if ( has_post_thumbnail()) : ?>

    <div class="container home"  style="background-image:url(<?php 
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
							echo $large_image_url[0];
						?>)">

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

	  <div class="home-content">
			<div class="message" > 
			 <h2><?php the_title(); ?></h2>
			<h6 class="brandColor--black"><?php the_content(); ?></h6>
     		<a class="button" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_sendmoneynow.png" width="214"></a> 
			</div>
		</div><!-- eo home-content -->
			 <?php endif; ?>
			<?php endwhile; ?>


	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
	<?php endwhile; ?>

      <br clear="all">


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>