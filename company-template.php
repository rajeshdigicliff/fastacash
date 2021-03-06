<?php
/**
 * Template Name: Company
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
			<?php wp_nav_menu( array( 'theme_location' => 'company-menu', 'menu_class' => 'container' ) ); ?>
  </div>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<main class="mainContent" role="main">
		<div class="container">
			<section class="mainContent__wordpressContent">
				<!-- insert wordpress content here -->
				<?php the_content(); ?>
				<?php comments_template( '', true ); ?>
			</section>
		</div> <!-- eo .container -->
	</main>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>