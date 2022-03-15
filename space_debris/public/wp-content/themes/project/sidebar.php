 <!-- Featured Content -->
 <div class="side_wrap">
        <?php $slides = get_pages(['include' => '21,26,28']);?>
        <?php foreach($slides as $slide ) : ?>
        <div class="side-content">
              <div class="side-item">
                <h2><?=esc_html(get_the_title($slide))?></h2>
                <a href="<?=esc_attr(get_the_permalink($slide))?>"><?=get_the_post_thumbnail($slide);?></a>
                
            </div>

        </div>
        <?php endforeach; ?>
    </div>