<?php get_header();?>
<!-- Main Content -->
<div class="container">

        <div id="primary" class="single">
        <img src="<?=get_template_directory_uri()?>/images/page_header.jpg" alt="random-pic">

         <?=get_search_form();?>

         <h3>Archive</h3>

         <ul class="cat">

          <?php wp_get_archives(); ?>

        </ul>

        <h3>Categories</h3>

        <ul class="cat">

          <?php wp_list_categories(['title_li' => '']); ?>

        </ul>
        <?php get_sidebar();?>
        
        <h1>News</h1>

        <?php if(have_posts()) : 
                while(have_posts()) : 
                    the_post(); ?>

        <article>

            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

            <span class="meta">Posted on <?=esc_html(get_the_date())?> by 
                    <a href="<?=esc_url(get_author_posts_url($post->post_author))?>"><?php the_author(); ?></a></span>

            <?php the_excerpt(); ?>

        </article><!-- #post-## -->

        <?php endwhile; 
                endif; ?>

        <?php the_posts_navigation(); ?>

        </div>

   

</div> <!-- end of /container -->

<?php get_footer();?>

