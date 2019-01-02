<?php
/*
 * Template Name: section free trial
 * Template Post Type: post
 */
?>

<section class="info-box free-trial">
    <div class="container">
        <div class="info-box-container">
            <p class="fourthversion-section-main-title"><?php the_field('free_trial_tittle'); ?></p>
            <div class="info-box__buttons-container">
                <?php $signupCTA = get_field('free_trial_signup_cta'); ?>
                <a href="<?php echo $signupCTA['url']; ?>" class="main-btn"><?php echo $signupCTA['title']; ?></a>
                <a href="<?= $pricingLink ? $pricingLink : '/en/pricing.php'; ?>" class="secondary-btn"><?php the_field('free_trial_pricing_cta_text'); ?></a>
            </div>
            <p class="info-box__description"><?php the_field('free_trial_description'); ?></p>
        </div>
    </div>
</section>