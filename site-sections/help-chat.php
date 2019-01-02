<?php
/*
 * Template Name: section help chat
 * Template Post Type: post
 */
?>

<section class="help">
    <div class="container">
        <p class="fourthversion-section-main-title"><?php the_field('help_chat_title'); ?></p>
        <div class="help__blocks-container">

            <div class="help__block">
                <div class="help__icon-container"><img class="help__icon" src="<?php the_field('help_chat_image'); ?>" alt="Question"></div>
                <p class="help__description"><?php the_field('help_chat_text'); ?></p>
                <div onclick="Intercom('showNewMessage')" class="main-btn"><?php the_field('help_chat_cta_text'); ?></div>
            </div>

        </div>
    </div>
</section>
