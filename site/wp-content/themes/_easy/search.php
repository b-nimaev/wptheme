<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package starter
 */

get_header();
?>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php get_sidebar() ?>
				</div>
				<div class="col">
					<?php if ( have_posts() ) : ?>

						<div class="page-header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Результаты:', '_easy' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</div><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
