<header class="mainHeader" role="banner">
	<?php is_front_page() ? $logoname='/images/logo_fastacash_white.png' : $logoname='/images/logo_fastacash.png'; ?>
	<h1 class="headerLogo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); echo $logoname;?>" alt="Fastacash" /></a></h1>
	<nav class="mainNav">
		<label for="openMenu">
				<button class="btn btn--openMenu">Open Menu</button>
		</label>
		<input type="checkbox" id="openMenu" class="chk chk--openMenu" name="openMenu" />
		<?php wp_nav_menu( array( 'theme_location' => 'header-main-menu', 'container' => false ) ); ?>
	</nav>
</header><!-- eo .paneAction -->
