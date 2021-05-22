<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DarkTheme
 */

?>

<!--Change the Following area If needed -->
<section class="search_area_df">
<div class="container">		 
		<div class="row clearfix">
			
			
			
			<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="search_tx_box">
					<h4 class="sr_title">
						
						<?php esc_html_e( 'Search not Found', 'DarkTheme' ); ?>
					</h4>
					<div class="search_text">	
						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'DarkTheme' ); ?>
                    
					</div>
					
					<div class="search_page_btn">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-three"><?php esc_html_e( 'Back to Home', 'DarkTheme' ); ?><span class="icon flaticon-next-4"></span></a>
					</div>
				

					
				</div>
			</div>
	</div>
</div>
</section>

