<section class="p-0">
    <div class="container">
        <div class="bg-540b23"
        <?php if (get_sub_field('background_color')) :?>
              style='background-color:<?php echo get_sub_field('background_color') ?> !important;'
          <?php endif; ?>>
            <div class="row">
                <div class="col-sm-7">
                    <div class="p-bn">
                        <div class="title-group m-b-0">
                            <?php if(get_sub_field('minium_title')):?>
                            <h5 class="sub-title"><?php echo get_sub_field('minium_title')?></h5>
                            <?php endif;?>
                            <?php if(get_sub_field('title')):?>
                            <h2><?php echo get_sub_field('title')?></h2>
                            <?php endif;?>
                            <p class="line-mix line-mix-f star-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <?php if(get_sub_field('description')):?>
                            <p><?php echo get_sub_field('description')?></p>
                            <?php endif;?>
                            <?php if(get_sub_field('button_title')):?>
                            <a href="<?php echo get_sub_field('button_link')?>" class="ht-btn ht-btn-2 m-t-30 rad-0"><?php echo get_sub_field('button_title') ?></a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">

                    <div class="bg-image-2"
                        <?php if (get_sub_field('background_image')) :?>
                            style='background-image:url("<?php echo get_sub_field('background_image') ?>")'
                        <?php endif; ?>
                    ></div>
                </div>
            </div>
        </div>
    </div>
</section>
