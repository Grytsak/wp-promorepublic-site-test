<?php
/*
 * Template Name: section quote block
 * Template Post Type: post
 */
?>

<section class="ss-section">
    <div class="ss-container">
        <div class="ss-quote">
            <p class="ss-quote__text"><?php the_field('quote_block_text'); ?></p>
            <p class="ss-quote__author"><?php the_field('quote_block_author'); ?></p>
            <p class="ss-quote__author-sub"><?php the_field('quote_block_author_position'); ?></p>
        </div>
    </div>
</section>
