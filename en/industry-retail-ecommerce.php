<?php
/*
 * Template Name: EN Industry Retail Ecommerce
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



<div class="main-content">
    <div class="main-content__left">
        <p class="fourthversion-section-subtitle">Retail & eCommerce</p>
        <h1 class="main-title">Get More Sales<br>from Social for Your Store!</h1>
        <p class="main-description">Create and post remarkable content for your shop to gain profit and engage your followers. Hook your audience with relevant product ads, monitor your brand mentions, and invite them to come back.
        </p>
        <div class="main-content__btns-container">
            <a class="main-btn big-btn" type="submit" value="Get Started" href="//app.promorepublic.com#signup">try it free</a>
        </div>

        <?php $custom_query = new WP_Query('p=442');
        while($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'site-sections/integrated-socials', get_post_format() )?>

            <?php the_content(); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

    </div>
</div>
</div>
<div class="main-section__bg"></div>
</section>

<section class="benefits">
    <div class="container">
        <p class="fourthversion-section-subtitle">key benefits</p>
        <p class="fourthversion-section-main-title">Why to Use PromoRepublic</p>
        <div class="float-columns-container">
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/visual.svg" alt="Eye" class="benefits__icon"></div>
                    <p class="float-column__tittle">Visuals matter</p>
                    <p class="float-column__text">The human eye is the best critic, and PromoRepublic has 100,000 templates that fits any industry!
                    </p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/users.svg" alt="Eye" class="benefits__icon"></div>
                    <p class="float-column__tittle">Your Clients Are Already on Social</p>
                    <p class="float-column__text">Most of your clients already using social media, you just need to attract them with the right message in the right time!</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/find.svg" alt="Eye" class="benefits__icon"></div>
                    <p class="float-column__tittle">Finding Your Clients in The Social Buzz</p>
                    <p class="float-column__text">People are talking about what they want to buy online, they might even talk about your brand right now! We’re giving you the power to listen to that buzz.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="success-story">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="white" points="0,100 100,0 100,100"></polygon>
    </svg>
    <div class="container">
        <p class="fourthversion-section-main-title">A story of success</p>
        <p class="success-story__description">Little & Lively, a family owned and operated clothing business for little ones, increased their social following by +1,905 followers while spending only 4 hours/week on social media marketing.</p>
        <div class="success-story__text-box">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/retail_logo.png" alt="Logo" class="success-story__logo">
            <p class="success-story__company-name">little & lively</p>
            <p class="success-story__quote">“Our monthly sales can be traced directly back to what we’re doing on social media.”</p>
            <a href="/en/ss-retail.php" class="success-story__link">Read the full success story of Little & Lively >></a>
        </div>
    </div>
    <div class="success-story__bg"></div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-subtitle">why promorepublic?</p>
        <p class="fourthversion-section-main-title">How Promorepublic helps eCommerce and Retail achieve their business goals</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/eCommerce_offers1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Use Our Templates Library to Attract More Store Visitors</p>
                <p class="odd-even-description">Use our post ideas library with over 100,000+ templates, edit to your brand voice and taste to engage with more store visitors. PromoRepublic will pick the best time and types of posts for your online store and your specific niche.
                </p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Convert followers to customers</p>
                <p class="odd-even-description">Whether it’s your existing followers or customers, you can convert them into new sales via retargeting campaigns. PromoRepublic will also help you to track the ROI from Social for your online store.
                </p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/eCommerce_offers2.jpg" alt="Promorepublic" class="odd-image">
            </div>
        </div>

        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/eCommerce_offers3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Turn on Social Listening</p>
                <p class="odd-even-description">People are already talking about your brand and what they want to buy from your online store. You just need to find that tweet or message and respond via PromoRepublic!</p>
            </div>
        </div>
    </div>
</section>



<?php   $pricingLink = "/en/pricing/";
$custom_query = new WP_Query('p=270');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/free-trial.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>


<?php
$demo_link = '//get.promorepublic.com/demo-retail-ecommerce/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>

