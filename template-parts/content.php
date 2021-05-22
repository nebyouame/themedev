<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DarkTheme
 */

?>
<article>
 <div class="single-blog-post">
  <div class="blog_post">
	<div class="img-box">		
		<?php DarkTheme_post_thumbnail(); ?>				
		 <?php DarkTheme_meta_info(); ?>
      	
	</div><!-- /.img-box -->
	<div class="text-box">
	<div class="text">
		 
		<h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
		<!-- the_excerp/text -->
		 <div class="entry-content">
		   <?php the_excerpt();?>
        </div><!-- .entry-content -->
	
	
	<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn btn-style-thirteen"><div class="btn-title"><?php esc_html_e('Read More', 'DarkTheme');?></div></a>	
	
	</div></div>	
	</div>
</div><!-- /.single-blog-post -->
</article>
