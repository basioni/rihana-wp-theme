<?php 
get_header();
?>
<div class="container archives-container">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>
				<?php
				wp_title('');
				?>
				</h1>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'excerpt' );
				// End the loop.
			endwhile;

			// Previous/next page navigation.
			//twentynineteen_the_posts_navigation();
			
			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</main><!-- #main -->
	</section><!-- #primary -->
</div>
<?php
get_footer();
?>