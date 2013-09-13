<?php
/**
 * Template Name: Support
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	<nav class="secondaryNav">
			<?php wp_nav_menu( array( 'theme_location' => 'support-menu', 'menu_class' => 'container' ) ); ?>
	</nav>
</header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<main class="mainContent" role="main">
		<div class="container">
			<section class="mediaContent mainContent__wordpressContent">
				<!-- insert wordpress content here -->
				<?php the_content(); ?>
				<?php comments_template( '', true ); ?>
			</section>
		</div> <!-- eo .container -->
	</main>
<?php endwhile; ?>
<hr class="greyStrip" />
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>