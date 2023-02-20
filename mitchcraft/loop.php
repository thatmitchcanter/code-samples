<?php
/**
 * @package WordPress
 * @subpackage monochromatic
 */
?>
<?php monochromatic_before_loop(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class($fresh); ?> id="post-<?php the_ID(); ?>">
	<a class="title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h2 class="post-title">', '</h2>'); ?></a>
	<?php if (!is_page()) { ?>
		<section class="pre-meta">
			<p class="mb-5"><?php the_category(', '); ?></p>
		</section>
		<div class="col-md-10 offset-md-1">
			<figure class="post_thumbnail"><?php the_post_thumbnail('single-image'); ?></figure>
		</div>
	<?php } ?>
		<?php if (is_singular()) { ?>
			<section class="entry entry-singular col-md-8 offset-md-2">
				<?php the_content(); ?>
			</section>
		<?php } else { ?>
			<section class="entry entry-nonsingular col-md-8 offset-md-2">
				<p><?php echo wp_trim_words( get_the_content() , '64' ); ?></p>
		</section>
		<?php } ?>
    <?php if (!is_page()) { ?>
		<section class="post-meta">
			<!-- <p><?php echo get_the_date(); ?></p> -->
			<p><?php the_tags(); ?></p>
		</section>
		<?php if (!is_single()) { ?>
			<section class="cta">
				<a class="btn btn-primary" href="<?php the_permalink(); ?>">Continue Reading</a>
			</section>
		<?php } ?>
    <?php } ?>
</article>
<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<nav id="pagination">
		<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		?>
	</nav><!-- #nav-below -->
<?php endif; ?>

<?php /* Only load comments on single post */ ?>
<?php monochromatic_after_loop(); ?>
