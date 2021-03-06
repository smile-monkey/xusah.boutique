<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

get_header(); ?>

	<div class="col-full col-wrapper">
		<div class="content-wrapper">
			<?php do_action( 'storefront_sidebar' ); ?>
			<div class="content-margin"></div>
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php get_template_part( 'loop' ); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->
		</div>

<?php get_footer(); ?>
