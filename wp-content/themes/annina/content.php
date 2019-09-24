<?php
/**
 * @package annina
 */
?>
<?php 
	global $i; 
	$lastbig = get_theme_mod('annina_theme_options_masonrybig', '0');
?>
<?php if ($i == 0 && $lastbig == 1 ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('anninamas w2'); ?>>
<?php else : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('anninamas'); ?>>
<?php endif; ?>
	<div class="content-annina">
	
	<?php
		if ( '' != get_the_post_thumbnail() ) {
			echo '<div class="entry-featuredImg"><a href="' .esc_url(get_permalink()). '"><span class="overlay-img"></span>';
			if ($i == 0 && $lastbig == 1 ) {
				the_post_thumbnail('annina-normal-post');
			} else {
				the_post_thumbnail('annina-masonry-post');
			}
			echo '</a></div>';
		}
	?>
	
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta smallPart">
			<?php annina_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer smallPart annCenter">
		<span class="read-more"><a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e('Read More', 'annina') ?></a><i class="fa spaceLeft fa-caret-right"></i></span>
		<?php edit_post_link( esc_html__( 'Edit', 'annina' ), '<span class="edit-link floatLeft"><i class="fa fa-wrench spaceRight"></i>', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	</div><!-- .content-annina -->
</article><!-- #post-## -->
