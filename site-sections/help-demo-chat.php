<?php
/*
 * Template Name: section help demo chat
 * Template Post Type: post
 */
?>

<section class="help">
    <div class="container">
        <p class="fourthversion-section-main-title"><?php the_field('help_title'); ?></p>
        <div class="help__blocks-container">

            <div class="help__block">
                <div class="help__icon-container"><img class="help__icon" src="<?php the_field('help_demo_icon'); ?>" alt="Help"></div>
                <p class="help__description"><?php the_field('help_demo_description'); ?></p>
                <a href="<?= $demo_link ? $demo_link : '//get.promorepublic.com/demo/'; ?>" class="main-btn main-btn--blue"><?php the_field('help_demo_cta_text'); ?></a>
            </div>
            <div class="help__block">
                <div class="help__icon-container"><img class="help__icon" src="<?php the_field('help_chat_icon'); ?>" alt="Question"></div>
                <p class="help__description"><?php the_field('help_chat_description'); ?></p>
                <div onclick="Intercom('showNewMessage')" class="main-btn"><?php the_field('help_chat_cta_text'); ?></div>
            </div>

        </div>
    </div>
</section>