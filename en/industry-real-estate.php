<?php
/*
 * Template Name: EN Industry Real Estate
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



<div class="main-content">
    <div class="main-content__left">
        <p class="fourthversion-section-subtitle">Real Estate</p>
        <h1 class="main-title">Win More Clients on Social Media for Your Real Estate Agency</h1>
        <p class="main-description">The majority of homebuyers go online searching for the ideal place to live or sell their property.  It makes no difference if  you’re a small, or big, real estate agency, you need to hook them with your voice on social media. With PromoRepublic, you will manage to achieve exposure and expansion.</p>
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
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/1portfolio.svg" alt="Cards" class="benefits__icon"></div>
                    <p class="float-column__tittle">Diversify Your Real Estate Project Portfolio</p>
                    <p class="float-column__text">With the editable templates, posting new images will not only show the whole beauty of homes, but will also give a true valuable information.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/2reviews.svg" alt="Talk" class="benefits__icon"></div>
                    <p class="float-column__tittle">Build Buildings and Referrals</p>
                    <p class="float-column__text">PromoRepublic supports your marketing efforts and helps by gathering feedback about your buildings and lands.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/visual.svg" alt="Eye" class="benefits__icon"></div>
                    <p class="float-column__tittle">Break Space Borders</p>
                    <p class="float-column__text">Your geological targeting has no limit. Voice on Facebook how different your homes are, from luxury to simple minimalism, whether big and small...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-subtitle">why promorepublic?</p>
        <p class="fourthversion-section-main-title">How Promorepublic Helps Real Estate Businesses To Achieve Business Goals</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/estate_offer1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Make Homes and Buildings Get More Reach on Social</p>
                <p class="odd-even-description">Promote your industry knowledge, style and thoughts in Facebook and Social flying under spammy real-estate types.</p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Great Reviews About Your Real Estate Agency</p>
                <p class="odd-even-description">Getting a word from a client increases the chances of being noticed. PromoRepublic sees every mention and gives it back to you.</p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/estate_offer2.jpg" alt="Promorepublic" class="odd-image">
            </div>
        </div>

        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/estate_offer3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Offer Value and High Quality</p>
                <p class="odd-even-description">First an eye sees, then a hand clicks. To get more clicks, ensure the beauty your posts by using a library of ideas that PromoRepublic suggests.</p>
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
$demo_link = '//get.promorepublic.com/demo-realestate/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>
