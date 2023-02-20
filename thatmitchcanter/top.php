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
			<div class="section"><span class="desc pink">Hello, I'm</span> mitch canter. </div>
			<div class="section"><span class="desc purple">I’m a</span> WordPress developer </div>
			<div class="section"><span class="desc orange">Living In</span> nashville, tn. </div>
		</h1>
	</div>

	<h5 class="rainbow">mitch canter</h5>

	<div class="navigation" id="social-nav">
		<a class="twitch" href="https://twitch.tv/CMDRMitchcraft" target="_blank"><i class="fab fa-twitch"></i></a>
		<a class="twitter" href="https://twitter.com/thatmitchcanter" target="_blank"><i class="fab fa-twitter"></i></a>		
		<a class="linkedin" href="https://linkedin.com/in/thatmitchcanter" target="_blank"><i class="fab fa-linkedin"></i></a>
		<a class="youtube" href="https://youtube.com/CMDRMitchcraft" target="_blank"><i class="fab fa-youtube"></i></a>
		<a class="github" href="https://github.com/thatmitchcanter" target="_blank"><i class="fab fa-github"></i></a>
	</div>

</header>

<nav id="navigation">
	<?php
		if (has_nav_menu('navigation')) { ?>
		<div class="navigation" id="header-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
		</div>
	<?php } ?>
	<div class="navigation" id="social-nav-mobile">
		<a class="linkedin" href="https://linkedin.com/in/thatmitchcanter" target="_blank"><i class="fab fa-linkedin"></i></a>
		<a class="twitter" href="https://twitter.com/thatmitchcanter" target="_blank"><i class="fab fa-twitter"></i></a>
		<a class="twitch" href="https://twitch.tv/cmdr_mitchcraft" target="_blank"><i class="fab fa-twitch"></i></a>
		<a class="youtube" href="http://cmdr.mitchcraft.me" target="_blank"><i class="fab fa-youtube"></i></a>
		<!-- <a class="instagram" href="https://instagram.com/thatmitchcanter" target="_blank"><i class="fab fa-instagram"></i></a> -->
		<a class="github" href="https://github.com/thatmitchcanter" target="_blank"><i class="fab fa-github"></i></a>
	</div>
</nav>
