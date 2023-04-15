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
					if ( have_posts() ) :
						woocommerce_content(); 
					 endif; 
					?>

				</main><!-- #main -->
			</section><!-- #primary -->
		</div>
	</div>
</div>
<?php
get_footer();
?>