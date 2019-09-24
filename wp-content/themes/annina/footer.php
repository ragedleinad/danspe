<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package annina
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info content-annina-title annDouble smallPart">
			<div class="text-copy">
			<?php
			$copyrightText = get_theme_mod('annina_theme_options_copyrighttext', '&copy; '.date('Y').' '. get_bloginfo('name'));
			if ($copyrightText || is_customize_preview()): ?>
				<span class="custom"><?php echo wp_kses($copyrightText, annina_allowed_html()); ?></span>
			<?php endif; ?>
			<span class="sep"> | </span>			
			<?php
			/* translators: 1: theme name, 2: theme developer */
			printf( esc_html__( 'WordPress Theme: %1$s by %2$s.', 'annina' ), '<a target="_blank" href="https://crestaproject.com/downloads/annina/" rel="nofollow" title="Annina Theme">Annina Free</a>', 'CrestaProject' );
			?>
			</div>
			<div id="toTop"><i class="fa fa-angle-up fa-lg"></i></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #content -->
<?php wp_footer(); ?>

</body>
</html>
