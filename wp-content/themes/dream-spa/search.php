<?php
/**
 * The search template file
 * @package WordPress
 * @subpackage spasalon
 */
get_header();
?>

<!-- Blog & Sidebar Section -->
<section id="section">
	<div class="container">
		<div class="row">

			<!--Blog Detail-->
			<div class="col-md-8 col-xs-12">
				<div class="site-content">

					<?php if( have_posts() ): ?>

						<header class="page-header">

							<h1 class="page-title">
								<?php printf( __( 'Search Results for: %s', 'dream-spa' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
							</h1>

						</header><!-- .page-header -->

						<?php while( have_posts() ): the_post(); ?>

							<?php get_template_part('content',''); ?>

						<?php endwhile; ?>

						<div class="paginations">
						<?php
						// Previous/next page navigation.
						the_posts_pagination( array(
						'prev_text'          => __('Previous','dream-spa'),
						'next_text'          => __('Next','dream-spa')
						) ); ?>
						</div>

					<?php else: ?>

						<?php get_template_part('content','none'); ?>

					<?php endif; ?>

				</div>
			</div>
			<!--/End of Blog Detail-->

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>
<!-- End of Blog & Sidebar Section -->

<div class="clearfix"></div>

<?php get_footer(); ?>
