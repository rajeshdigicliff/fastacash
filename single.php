<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	<nav class="secondaryNav">
			<?php wp_nav_menu( array( 'theme_location' => 'header-features-menu', 'menu_class' => 'container' ) ); ?>
	</nav>
</header>


	<main class="mainContent" role="main">
		<div class="container">
			<section class="mediaContent mainContent__wordpressContent">
				<!-- insert wordpress content here -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

	<h2><?php the_title(); ?></h2>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
	<?php the_content(); ?>			

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

	<?php comments_template( '', true ); ?>

</article>
<?php endwhile; ?>


			</section>
		</div> <!-- eo .container -->
	</main>


<hr class="greyStrip" />
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

