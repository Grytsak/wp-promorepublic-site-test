<?php
/*
 * Template Name: section popular posts
 * Template Post Type: post
 */
?>

<section class="popular-posts">
    <div class="container">
        <p class="fourthversion-section-title"><?php the_field('popular_posts_title') ?></p>
        <p class="fourthversion-section-subtitle"><?php the_field('popular_posts_description') ?></p>
        <div class="popular-posts__posts-container">

            <?php
            if (have_rows('popular_posts_links')):

                // loop through the rows of data
                while (have_rows('popular_posts_links')) : the_row();

                    // display a sub field value
                    $image = get_sub_field('popular_posts_image');
                    $link = get_sub_field('popular_posts_post_links');
                    ?>

                    <div class="popular-posts__column">
                        <a href="<?php echo $link ?>" class="poular-posts__link" target="_blank">
                            <span class="poular-posts__link-inner-content"
                            style="background-image: url(<?php echo $image['url'] ?>);"></span>
                        </a>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>

        </div>
        <?php $CTA = get_field('popular_posts_cta'); ?>
        <div class="btn-container"><a href="<?php echo $CTA['url']; ?>" class="main-btn" target="_blank"><?php echo $CTA['title']; ?></a></div>
    </div>
</section>
