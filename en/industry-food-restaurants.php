<?php
/*
 * Template Name: EN Industry Food Restaurants
 * Template Post Type: page
 */
?>
<?php get_header(); ?>


<div class="main-content">
    <div class="main-content__left">
        <p class="fourthversion-section-subtitle">Food & Restaurants</p>
        <h1 class="main-title">Fill More Seats by Promoting Your Place on Social</h1>
        <p class="main-description">Make them love you online, and they will come to your restaurant. Use PromoRepublic to create the content calendar for the full week and promote your best dishes and specials
            for the most loyal visitors.</p>
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
                    <p class="float-column__tittle">People Eat With Their Eyes</p>
                    <p class="float-column__text">Use our 100,000 post ideas library to show off your best dishes and specials.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/heart-stars.svg" alt="Heart" class="benefits__icon"></div>
                    <p class="float-column__tittle">Keep it Five Stars</p>
                    <p class="float-column__text">We’ll keep you updated about mentions and reviews for your eatery.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/horn.svg" alt="Horn" class="benefits__icon"></div>
                    <p class="float-column__tittle">Go Beyond the Physical Space</p>
                    <p class="float-column__text">Promote your best dishes with geolocated ads on Facebook and Instagram.</p>
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
        <p class="success-story__description">Cheeeeesee! How many kinds of grilled cheeses have you tried? The story of The Big Cheezy speaks for itself: one of a kind, loaded grilled cheese restaurant wanted
            to become more well known and recognizable in NOLA.<br>
            <a href="/en/ss-restaraunt.php">How we help them</a></p>
        <div class="success-story__text-box">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/food_logo.png" alt="Logo" class="success-story__logo">
            <p class="success-story__company-name">the big cheezy</p>
            <p class="success-story__quote md-text">“The more we posted, the more the neighborhood seemed to appreciate that we were active and not just sitting back and saying, ‘Come in and spend.’”</p>
            <a href="/en/ss-restaraunt.php" class="success-story__link">Read the full success story of The Big Cheezy >></a>
        </div>
    </div>
    <div class="success-story__bg"></div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-subtitle">why promorepublic?</p>
        <p class="fourthversion-section-main-title">How Promorepublic Helps Restaurants To Achieve Business Goals</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/food_offer1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Show Off Your Best Dishes in Our Creative Library of Editable Templates </p>
                <p class="odd-even-description">Speak to your followers through breathtaking content. Make people associate your content with your brand. First they love you online, then they’ll visit you offline.</p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Get Rid of That Excel Planning for Content</p>
                <p class="odd-even-description">PromoRepublic will automatically pick the best posting time for your food place, all you have to do is curate the content.</p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/food_offer2.jpg" alt="Promorepublic" class="odd-image">
            </div>
        </div>

        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/food_offer3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Drive People to Events</p>
                <p class="odd-even-description">Tell your new and loyal visitors about upcoming events and parties by using geolocation ads on Facebook and Instagram.</p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Monitor<br>The Reputation<br>of Your Place</p>
                <p class="odd-even-description">Use Social Monitoring to find out who’s talking about your place. Respond to reviews and mentions directly from PromoRepublic.</p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/food_offer4.jpg" alt="Promorepublic" class="odd-image">
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
$demo_link = '//get.promorepublic.com/demo-food-restaurants/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>
