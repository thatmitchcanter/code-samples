<?php
/**
 * Template Name: Linktree
 * Description: Linktree Page
 * @package WordPress
 * @subpackage monochromatic
 */

/* Meta, Title, Responsive, and Document Setup Tags */
get_header(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog==" crossorigin="anonymous"></script>
<style>

#linktrees section .row{
		max-width: 680px;
		margin: 0 auto;
		width: 100%;
		justify-content: center;
	}

	section#mitchcanter{
		background: #000;
		background-size: 312px !important;
		padding: 5rem;
	}

	section#greyhawk{
		background-image: url(https://greyhawkdigital.com/wp-content/uploads/2020/05/799.jpg);
		background-repeat: no-repeat;
		background-position: center center;
		background-attachment: scroll;
		background-size: cover;
		padding: 5rem;
	}

	section#mitchcraft{
		background: #000 url(https://greyhawkdigital.com/wp-content/uploads/2021/06/cmdr_mitchcraft.jpg) repeat center center !important;
		background-size: cover;
		padding: 5rem;
	}

	#linktrees img{
		height: 150px;
		width: auto;
		margin-bottom: 2rem;
	}

	section#mitchcraft img{
		height: auto;
		width: 300px;
	}

	#linktrees p{
		font-weight: 900;
		color: white;
		text-align: center;
	}

	.links{
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.links a{
		border: 2px solid white;
		font-weight: 900;
		display: block;
		padding: 1rem;
		text-decoration: none;
		color: white;
		background: none;
		transition: .2s all ease;
		text-align: center;
	}

	.links a .fa-twitch,
	.links a .fa-instagram,
	.links a .fa-twitter,
	.links a .fa-youtube{
		color: white !important;
	}

	.links a:hover{
		background: linear-gradient(to right, #70cbd0, #7dc99f, #f7f05c, #fcbb80, #f27db2, #a471b1);
		color: black;
		border: 2px solid rgba(0,0,0,0);
	}
	.links a:hover .fa-twitch,
	.links a:hover .fa-instagram,
	.links a:hover .fa-twitter,
	.links a:hover .fa-youtube{
		color: black !important;
	}
</style>

<section id="linktrees">
	<section id="mitchcraft"><div class="row">
		<img src="https://greyhawkdigital.com/wp-content/uploads/2021/06/mitchcraft-logo.png" alt="CMDR Mitchcraft" />
		<ul class="links">
			<li><a target="_blank" href="https://ko-fi.com/cmdrmitchcraft"><i class="fas fa-coffee"></i>&nbsp; Support Mitch By Donating/Subscribing</a></li>
			<li><a target="_blank" href="http://cmdr.mitchcraft.me"><i class="fab fa-youtube"></i>&nbsp; YouTube</a></li>
		</ul>
	</div></section>
	<section id="mitchcanter"><div class="row">
		<img src="https://mitchcanter.me/wp-content/uploads/2021/07/Mitch-Headshot-2021-sq-300x300.jpg" alt="Mitch Canter" />
		<p>Mitch Canter <br /><small></small></p>
		<ul class="links">
			<li><a target="_blank" href="https://mitchcanter.me"><i class="fas fa-link"></i>&nbsp; Blog</a></li>
			<li><a target="_blank" href="https://twitter.com/thatmitchcanter"><i class="fab fa-twitter"></i>&nbsp; Twitter</a></li>
			<li><a target="_blank" href="https://instagram.com/thatmitchcanter"><i class="fab fa-instagram"></i>&nbsp; Instagram</a></li>
			<li><a target="_blank" href="https://www.youtube.com/mitchcanter"><i class="fab fa-youtube"></i>&nbsp; YouTube</a></li>
			<li><a target="_blank" href="https://www.linkedin.com/in/thatmitchcanter"><i class="fab fa-linkedin"></i>&nbsp; LinkedIn</a></li>
		</ul>
	</div></section>
	<section id="greyhawk"><div class="row">
		<img src="https://greyhawkdigital.com/wp-content/uploads/2020/07/greyhawk-stacked-4000px.png" alt="Greyhawk" />
		<p>Greyhawk Digital <br /><small>WordPress Development, Web Design, &amp; Digital Strategy<br /> for Businesses, Brands, &amp; Content Creators</small></p>
		<ul class="links">
			<li><a target="_blank" href="https://greyhawkdigital.com"><i class="fas fa-link"></i>&nbsp; Website</a></li>
		</ul>
	</div></section>
</section>

<?php
/* Lower Script Calls & Meta */
get_footer();
?>
