<?php
/*
 * Template Name: EN Industry Health Beauty
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



<div class="main-content">
    <div class="main-content__left">
        <p class="fourthversion-section-subtitle">Health & Beauty</p>
        <h1 class="main-title">Become Their Health & Beauty Partner For Life and Show That You Care</h1>
        <p class="main-description">Unleash your practice and provide the highest levels of care for your clients. A stone massage in spa, a hairstyle in barbershop, make-up in a beauty salon, or a teeth whitening in dentist’s office -  promote your services and engage more people who need you the most. And, then, make them fall in love with what you do.</p>
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
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/1time-savv.svg" alt="Watch" class="benefits__icon"></div>
                    <p class="float-column__tittle">Time-Savvy and Smart</p>
                    <p class="float-column__text">When all-inclusive has a positive meaning. Planning, creating, and automatic posting all in one. It’s a strong foundation for the future brand awareness and creative content creation.
                    </p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/2best.svg" alt="Heart" class="benefits__icon"></div>
                    <p class="float-column__tittle">Only Best and Relevant</p>
                    <p class="float-column__text">The posts are related to your industry, the tips and recommendations you share are useful and help people to stay healthy, beautiful, and happy.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/3budget.svg" alt="Money Box
" class="benefits__icon"></div>
                    <p class="float-column__tittle">For Any Budget and Demand</p>
                    <p class="float-column__text">Do more with less. There’s no need to have a great number of tools, you need only one to provide a great customer experience and create a place that meets their educational needs.</p>
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
        <p class="success-story__description">Smart attitude and care make hearts bit harder. Having ears to the ground and listening people’s wishes is what helps businesses succeed, even in their even stages. North South Physical Therapy managed to create a place like home online and offline.<br>
            <a href="/en/ss-therapy.php">Read how they went social</a></p>
        <div class="success-story__text-box">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/health_logo.png" alt="Logo" class="success-story__logo">
            <p class="success-story__company-name">North South Physical Therapy</p>
            <p class="success-story__quote md-text">"We always were short of time to create social from scratch. We like PromoRepublic for the educational medical posts. Our followers adore them, too"</p>
            <a href="/en/ss-therapy.php" class="success-story__link">Read the full success story of North South Physical Therapy >></a>
        </div>
    </div>
    <div class="success-story__bg"></div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-subtitle">why promorepublic?</p>
        <p class="fourthversion-section-main-title">How Promorepublic Helps Health & Beauty Businesses Achieve Their Business Goals</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/health_offer1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Get More Local Followers</p>
                <p class="odd-even-description">PromoRepublic creates ads that show you in the best light. Promote the content that won’t make eyes dry and engage to come and stay with you. Real people will come to your page to take a look of what you share and say a big thanks after that.</p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Make Your First Impression Great</p>
                <p class="odd-even-description">Take a look at content calendar PromoRepublic suggests. Make a great post. Give people a surprise emotion, and they’ll find time to knock on your door or buy beauty products.</p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/health_offer2.jpg" alt="Promorepublic" class="odd-image">
            </div>
        </div>

        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/health_offer3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Good Words Makes Client Trust</p>
                <p class="odd-even-description">Keep all your mentions and reviews under your control. PromoRepublic takes care of what people are saying about you to make your reputation 5 stars. </p>
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
$demo_link = '//get.promorepublic.com/demo-health-beauty/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>




<?php get_footer(); ?>
