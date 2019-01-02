<?php
/*
 * Template Name: section try block
 * Template Post Type: post
 */
?>

<section class="ss-section ss-section--bg">
    <div class="ss-container ss-container--after-map">
        <div class="ss-try">
            <h2 class="ss-try__title"><?php the_field('try_block_title'); ?></h2>
            <div class="ss-try__btn">
                <?php $CTA = get_field('try_block_cta'); ?>
                <a href="<?php echo $CTA['url'] ?>" class="pr-btn btn-hot-dog -main"><?php echo $CTA['title'] ?></a>
            </div>
            <div class="ss-try__text  ss-text"><?php the_field('try_block_description'); ?></div>
        </div>
    </div>
</section>
