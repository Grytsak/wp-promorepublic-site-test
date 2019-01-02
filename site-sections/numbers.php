<?php
/*
 * Template Name: section numbers
 * Template Post Type: post
 */
?>

<section class="numbers -fourthversion">
    <div class="container container--little">
        <p class="fourthversion-section-subtitle"><?php the_field('numbers_title'); ?></p>
        <div class="numbers__wrap -thirdversion">
            <?php if (have_rows('numbers_content')):
                while (have_rows('numbers_content')): the_row();
                    $number = get_sub_field('numbers_number');
                    $description = get_sub_field('numbers_description');
                    ?>

                    <div class="numbers-block -thirdversion">
                        <p class="numbers__number numbers__posts"><?php echo $number ?></p>
                        <p class="numbers__text"><?php echo $description ?></p>
                    </div>

                <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
