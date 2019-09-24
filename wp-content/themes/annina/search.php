<?php
/**
 * The template for displaying search results pages.
 *
 * @package annina
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="content-annina-title annDouble">
					<h1 class="page-title">
					<?php
					/* translators: %s: search query */
					printf( esc_html__( 'Search Results for: %s', 'annina' ), '<span>' . get_search_query() . '</span>' );
					?>
					</h1>
				</div><!-- .content-annina -->
			</header><!-- .page-header -->
			
			<?php /* Start the Loop */ global $i; $i = 0; ?>
			<div class="annina" id="mainAnnina">
			<div class="grid-sizer"></div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				$i++;
				?>

			<?php endwhile; ?>
			</div><!-- #mainAnnina -->

			<?php 
				the_posts_pagination( array(
					'prev_text'          => '<i class="fa fa-angle-double-left spaceRight"></i>' . esc_html__( 'Previous', 'annina' ),
					'next_text'          => esc_html__( 'Next', 'annina' ) . '<i class="fa fa-angle-double-right spaceLeft"></i>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'annina' ) . ' </span>',
				) );
			?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
