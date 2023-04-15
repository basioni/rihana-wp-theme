<?php 
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<section id="primary" class="content-area">
				<main id="main" class="site-main">
					<header class="page-header">
						<h1>
						<?php
						wp_title('');
						?>
						</h1>
					</header><!-- .page-header -->

					<?php

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</section><!-- #primary -->
		</div>
	</div>
</div>
<?php
get_footer();
?>