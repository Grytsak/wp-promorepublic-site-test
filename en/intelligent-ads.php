<?php
/*
 * Template Name: EN Intelligent Ads
 * Template Post Type: page
 */
?>

<?php get_header(); ?>


<div class="main-head">
    <div class="main-head__left">
        <h1 class="main-title" id="ads-title">Drive more Sales<br>from Social Media<br>with Intelligent Ads</h1>
        <p class="main-description">Get more customers from Facebook and Instagram<br>with PromoRepublic Intelligent Ads Technology.</p>
        <div class="main-content__btns-container">
            <a class="main-btn" type="submit" value="Get Started" href="//get.promorepublic.com/intelligent-ads/">request demo</a>
        </div>
        <?php $custom_query = new WP_Query('p=442');
        while($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'site-sections/integrated-socials', get_post_format() )?>

            <?php the_content(); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>
    </div>
    <div class="main-head__right">
        <img class="product-header-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/products/Horn.png"
             srcset="<?php echo get_template_directory_uri(); ?>/resources/images/products/Horn.png 1x,
             <?php echo get_template_directory_uri(); ?>/resources/images/products/Horn2x.png 2x" alt="Horn">
    </div>
</div>
</div>
<div class="main-section__bg"></div>
</section>


<section class="benefits">
    <div class="container">
        <div class="btn-container">
            <img class="products__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-ads.svg" alt="Horn">
        </div>
        <p class="fourthversion-section-main-title">Why to Use<br>Intelligent Ads</p>
        <div class="float-columns-container">
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/like-blue.svg" alt="Grafic Editor" class="benefits__icon"></div>
                    <p class="float-column__tittle">Increase<br>Engagement</p>
                    <p class="float-column__text">Engage your existing followers with diverse campaign tools to convert them into real customers.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/marketing-blue.svg" alt="Timing" class="benefits__icon"></div>
                    <p class="float-column__tittle">Get traffic<br>from Social Media</p>
                    <p class="float-column__text">Run ads to showcase your brand on a global level to get more active followers.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/target-blue.svg" alt="Instagram" class="benefits__icon"></div>
                    <p class="float-column__tittle">Convert Visitors<br>into Customers</p>
                    <p class="float-column__text">Get back the potential customers who left your website without placing an order by setting up Retargeting Campaigns.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-main-title">How Intelligent Ads Helps<br>to Achieve Your Goals</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/IA-1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-subtitle">acqusition campaigns</p>
                <p class="odd-even-title">Get new customers</p>
                <p class="odd-even-description">Deliver your ads to people who are more likely to take certain actions. We analyze your audience data to divide it into separate segments and create individual scripts for each of them.</p>
                <a href="//get.promorepublic.com/intelligent-ads/" class="secondary-btn small-btn">get customers</a>
            </div>
        </div>
        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-subtitle">retention campaigns</p>
                <p class="odd-even-title">Get back old<br>prospects</p>
                <p class="odd-even-description">Show, upsell and cross-sell your website visitors the products that they've viewed earlier. We created unique frameworks, which help customizing Ad Sets and getting the highest conversion rate.</p>
                <a href="//get.promorepublic.com/intelligent-ads/" class="secondary-btn small-btn">get prospects</a>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/IA-2.jpg" alt="Promorepublic" class="even-image"">
            </div>
        </div>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/IA-3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-subtitle">roi reports</p>
                <p class="odd-even-title">Make your<br>social ROI positive</p>
                <p class="odd-even-description">PromoRepublic monitors your performance and activities across social media. Integrate your social analytics with business data to make smarter marketing decisions! </p>
                <a href="//get.promorepublic.com/intelligent-ads/" class="secondary-btn small-btn">get roi report</a>
            </div>
        </div>
        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-subtitle">Rich media content</p>
                <p class="odd-even-title">Get custom content<br>to engage audience</p>
                <p class="odd-even-description">We create bespoke rich media content to expand your reach across social media! PromoRepublic Content Studio focuses on Instagram Stories, Video & GIFs, Facebook Canvas and 360 view content.</p>
                <a href="//get.promorepublic.com/intelligent-ads/" class="secondary-btn small-btn">get rich media</a>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/IA-4.jpg" alt="Promorepublic" class="even-image"">
            </div>
        </div>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/IA-5.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-subtitle">Offline conversion</p>
                <p class="odd-even-title">Get your offline<br>conversion measured</p>
                <p class="odd-even-description">We use your offline purchase data to integrate with social media Ads. Based on it we refine your audience Segments and build smart retargeting scenarios.</p>
                <a href="//get.promorepublic.com/intelligent-ads/" class="secondary-btn small-btn">start measuring</a>
            </div>
        </div>
</section>



<? /* include "site-sections/find-out-more.php"; */ ?>



<?php $custom_query = new WP_Query('p=207');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/industries', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php $custom_query = new WP_Query('p=278');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/clients', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php
$demo_link = '//get.promorepublic.com/intelligent-ads/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>