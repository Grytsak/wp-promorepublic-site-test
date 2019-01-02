<?php
/*
 * Template Name: section industries
 * Template Post Type: post
 */
?>

<section class="industry" id="industry">
    <div class="container">
        <p class="fourthversion-section-main-title"><?php the_field('industries_title'); ?></p>
        <p class="industry__description"><?php the_field('industries_description') ?></p>
        <div class="image-box-container">

            <?php if (have_rows('industries_links')):
                while (have_rows('industries_links')): the_row();
                    $image = get_sub_field('industries_image');
                    $link = get_sub_field('industries_link');
                    $linkText = get_sub_field('industries_link_text');
                    ?>

                    <a href="<?php echo $link ?>" class="image-box">
                        <span class="image-box__inner-content" style="background-image: url(<?php echo $image['url'] ?>);">
                            <p class="image-box__text"><?php echo $linkText ?></p>
                        </span>
                    </a>

                <?php endwhile;
            endif; ?>

        </div>
        <div class="industry__not-find-container">
            <p><?php the_field('industries_not_find_industry_text'); ?></p>
            <?php $trialLink = get_field('industries_start_free_trial_link'); ?>
            <a href="<?php echo $trialLink['url'] ?>"><?php echo $trialLink['title'] ?></a>
        </div>
    </div>
</section>
