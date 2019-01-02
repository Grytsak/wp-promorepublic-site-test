<?php
/*
 * Template Name: section integrated socials
 * Template Post Type: post
 */
?>

<p class="social-description"><?php the_field('integrated_socials_description') ?></p>
<div class="main-content__social-container">


    <?php
    if (have_rows('integrated_socials_icons')):

        // loop through the rows of data
        while (have_rows('integrated_socials_icons')) : the_row();
            // display a sub field value
            $image = get_sub_field('integrated_socials_icon');
            $cssClass = get_sub_field('integrated_socials_css_class');
            ?>

            <img class="main-content__social <?php echo $cssClass ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>

            <?php
        endwhile;
    endif;
    ?>

</div>
