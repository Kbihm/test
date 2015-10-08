<?php
/*
Template Name: Blog
*/
?>	

<?php get_header(); ?>
	

	<div class="h_wrapper">	
		<div class="left">
        	<div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
				<h1><?php the_title(); ?></h1>
				<div class="content_area">
					<?php the_content(); ?>
				</div><!--  content_area  -->
			<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php  endif; ?>
        
			
	
	
			</div><!-- content -->	
		</div><!-- left -->	
		<div class="clear"></div>	
	</div><!-- h_wrapper -->	

<?php get_footer(); ?>




