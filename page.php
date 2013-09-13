<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
    <div class="container">
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>
	<nav class="secondaryNav">
			<?php wp_nav_menu( array( 'theme_location' => 'company-menu') ); ?>
	</nav>

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
<hr class="greyStrip" />
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>