<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DarkTheme
 */
 
get_header();
?>
<?php get_template_part('template-parts/bread'); ?>

<div id="primary-404" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'This page could not be found!', 'DarkTheme' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php esc_html_e( 'I am sorry.The page you are looking for is not available.', 'DarkTheme' );?></p>
					
				<div class="error-homepage">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php esc_html_e('Back To Home','DarkTheme'); ?>
					</a>
				</div>

				</div>
			</section>

		</main>
	</div>
  
<?php
get_footer();
