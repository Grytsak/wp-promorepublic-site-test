<?php
/*
 * Template Name: section features
 * Template Post Type: post
 */
?>

<section class="features">
    <div class="container">
        <p class="fourthversion-section-main-title"><?php the_field('features_title') ?></p>
        <div class="features__container">
            <div class="features__column">
                <ul class="features-list">

                    <?php if (have_rows('features_content_left_column')):
                        while (have_rows('features_content_left_column')): the_row();

                            $titleLeft = get_sub_field('feature_title_left');
                            $descriptionLeft = get_sub_field('feature_description_left');
                            $popupImageLeft = get_sub_field('feature_popup_image_left');
                            $comingSoonLeft = get_sub_field('feature_coming_soon_left');
                            ?>

                            <li>
                                <p class="features-list__title"><?php echo $titleLeft; ?></p>
                                <div class="features-list__description"><?php echo $descriptionLeft; ?>
                                    <?php if ( $popupImageLeft): ?>
                                    <b class="features-list__view" data-src="<?php echo $popupImageLeft; ?>">View <i></i></b>
                                    <?php endif ?>
                                    <?php if ($comingSoonLeft): ?>
                                        <span>coming soon</span>
                                    <?php endif; ?>
                                </div>

                            </li>

                        <?php endwhile;
                    endif; ?>

                </ul>
            </div>
            <div class="features__column">
                <ul class="features-list">

                    <?php if (have_rows('features_content_right_column')):
                        while (have_rows('features_content_right_column')): the_row();

                            $titleRight = get_sub_field('feature_title_right');
                            $descriptionRight = get_sub_field('feature_description_right');
                            $popupImageRight = get_sub_field('feature_popup_image_right');
                            $comingSoonRight = get_sub_field('feature_coming_soon_right');
                            ?>

                            <li>
                                <p class="features-list__title"><?php echo $titleRight; ?></p>
                                <div class="features-list__description"><?php echo $descriptionRight; ?>
                                    <?php if ( $popupImageRight): ?>
                                        <b class="features-list__view" data-src="<?php echo $popupImageRight; ?>">View <i></i></b>
                                        <span><?php echo $comingSoonRight ?></span>
                                    <?php endif; ?>
                                    <?php if ($comingSoonRight): ?>
                                        <span>coming soon</span>
                                    <?php endif; ?>
                                </div>

                            </li>

                        <?php endwhile;
                    endif; ?>

                </ul>
            </div>
        </div>
    </div>

    <div class="features-popup popup">
        <div class="features-popup__container popup-container">
            <img src="" alt="Screenshot">
            <span class="close-features-popup"><i class="fa fa-times-circle"></i></span>
        </div>
    </div>
</section>
