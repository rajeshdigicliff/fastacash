<?php
/**
 * Template Name: Pricing
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
    <div class="container">
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>
<br clear="all">
  <div class="subnav">
			<?php wp_nav_menu( array( 'theme_location' => 'support-menu', 'menu_class' => 'container' ) ); ?>
  </div>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
   echo '<div class="content cf" style="background-image:url(' . $large_image_url[0] . ')">';
 }
 ?>
<div class="message">
<div class="pt-title">
	<?php
		if(get_field('banner_title'))
		{
			echo '<h1 class="dropshadow brandColor--white">' . get_field('banner_title') . '</h2>';
		}
	?>
</div>
<div class="pt-desc">
	<?php
		if(get_field('banner_desc'))
		{
			echo '<p>' . get_field('banner_desc') . '</p>';
		}
	?>
	<div class="pricing-table">
		<?php
			if(get_field('for_every'))
			{
				echo '<span>' . get_field('for_every') . '</span>';
			}
		?>
		<?php
			if(get_field('you_pay'))
			{
				echo '<span>' . get_field('you_pay') . '</span>';
			}
		?>
	</div>
</div>
	</div>
	</div>

	<main class="mainContent" role="main">
			<section class="mediaContent mainContent__wordpressContent">
				<!-- insert wordpress content here -->
				<?php the_content(); ?>
				<?php comments_template( '', true ); ?>
			</section>
	</main>




<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>