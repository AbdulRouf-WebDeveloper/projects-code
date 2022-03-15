<?php get_header();?>
<h1>Bringing Space Debris Home!</h1>
    <div class="hero">
       <?=do_shortcode('[slide-anything id="68"]');?>
    </div>
    
 <!-- Featured Content -->
    <div class="wrapper">
        <?php $slides = get_pages(['include' => '21,28,26']);?>
        <?php foreach($slides as $slide ) : ?>
        <div class="column">
              <div class="item">
                <h2><?=esc_html(get_the_title($slide))?></h2>
                <a href="<?=esc_attr(get_the_permalink($slide))?>"><?=get_the_post_thumbnail($slide);?></a>
                <p><?=get_the_excerpt($slide);?></p>
                <button class="more"><a href="<?=get_the_permalink($slide)?>">Read More >></a></button>
            </div>

        </div>
        <?php endforeach; ?>
    </div>
   
</div> <!-- end of /container -->

<?php get_footer();?>

