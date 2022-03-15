<?php /* Template Name: join-us-page */?>
<?php get_header();?>
    <!-- Each Post -->
    <div id="content">

		<div id="primary" class="single">

		<?php if(have_posts()) : 
				while(have_posts()) : 
					the_post(); ?>

		<article>
		    <img class="head_img" src="<?=get_template_directory_uri()?>/images/page_header.jpg" alt="page-head">
			<?php get_sidebar();?>
       
			<h1><?php the_title(); ?></h1>
			<hr>
			<div class="thumb_nail">
			   <img src="<?=get_template_directory_uri()?>/images/random-pic.jpg" alt="randomone">
            </div>
			
			<p><?php the_content(); ?></p>

			<div class="form_sec">
				<?=do_shortcode('[wpdevart_forms id=1]');?>
			</div>

		</article><!-- #post-## -->

		<?php endwhile; 
				endif; ?>

		</div><!-- /primary -->

       

</div><!-- /content -->
   
</div> <!-- end of /container -->

<?php get_footer();?>

