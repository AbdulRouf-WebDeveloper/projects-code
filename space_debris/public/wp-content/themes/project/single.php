<?php get_header();?>
<!-- Main Content -->
<div class="container">
     <!-- Each Post -->
    <div id="content">

		<div id="primary" class="single">

		<?php if(have_posts()) : 
				while(have_posts()) : 
					the_post(); ?>

		<article>

			<h1><?php the_title(); ?></h1>

			<span class="meta">Posted on <?=esc_html(get_the_date())?> by 
					<a href="<?=esc_url(get_author_posts_url($post->post_author))?>"><?php the_author(); ?></a></span>

			<?php the_content(); ?>

		</article><!-- #post-## -->

		<?php endwhile; 
				endif; ?>

		<?php the_posts_navigation(); ?>

       <?php comments_template(); ?>

	</div><!-- /primary -->

		

</div><!-- /content -->
   
</div> <!-- end of /container -->

<?php get_footer();?>

