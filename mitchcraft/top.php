<?php
/**
 * @package WordPress
 * @subpackage monochromatic
 */
?>

<div class="toggle-holder">
	<div id="toggle">
		<div class="menu-line"></div>
	</div>
</div>

<header id="header" class="text-light">
	<div class="row">
		<h1 class="site-description my-0">
			<div class="section"><span class="desc green">Content Creator</span></div>
			<div class="section"><span class="desc blue">Twitch Streamer</span></div>
			<div class="section"><span class="desc purple">Product Manager</span></div>
			<div class="section"><span class="desc pink">Digital Strategist</span></div>
			<div class="section"><span class="desc orange">Spoony Bard</span></div>
		</h1>
	</div>

	<?php if (is_home()) { ?>
		<?php $hide = 'mobile-hide';?>
	<?php } else { ?>

	<?php } ?>
	<h2 class="mobile-hide"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" class="img-fluid"/></a></h2>

	<div class="navigation mobile-hide" id="social-nav">
		<a class="twitter" href="https://twitter.com/CMDR_Mitchcraft" target="_blank"><i class="fa-brands fa-twitter"></i></a>
		<a class="youtube" href="https://youtube.com/CMDRMitchcraft" target="_blank"><i class="fa-brands fa-youtube"></i></a>
		<a class="tiktok-icon" href="https://tiktok.com/@CMDR_Mitchcraft" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
		<a class="github" href="https://github.com/thatmitchcanter" target="_blank"><i class="fa-brands fa-github"></i></a>
		<a class="discord" href="https://discord.gg/EHneHWp" target="_blank"><i class="fa-brands fa-discord"></i></a>
		<a class="twitch" href="https://twitch.tv/CMDRMitchcraft" target="_blank"><i class="fa-brands fa-twitch"></i></a>

</div>

</header>

<nav id="navigation">
	<?php
		if (has_nav_menu('navigation')) { ?>
		<div class="navigation" id="header-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
		</div>
	<?php } ?>

</nav>
