<?php
/**
 * The template for displaying news posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mildenhall
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main posts-page">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				single_post_title( '<h1 class="page-title">', '</h1>' );
                ?>
			</header><!-- .page-header -->
            <div class="posts-description">
                <p>General news and views covering what members are up to.</p>
            </div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
