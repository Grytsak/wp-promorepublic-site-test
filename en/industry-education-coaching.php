<?php
/*
 * Template Name: EN Industry Education Coaching
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



<div class="main-content">
    <div class="main-content__left">
        <p class="fourthversion-section-subtitle">Education & Coaching</p>
        <h1 class="main-title">Make People Excited about Your Educational Content </h1>
        <p class="main-description">Smart is a trend. Promote your courses and educational materials to both the young and old.
            Exercise their brains and get more people to come to your classes from social media.
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
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/1smart_spread.svg" alt="Smart Spreading" class="benefits__icon"></div>
                    <p class="float-column__tittle">Smart Spreading</p>
                    <p class="float-column__text">Talk about things you can teach, targeting local people in Facebook and Instagram.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/2edu.svg" alt="Education" class="benefits__icon"></div>
                    <p class="float-column__tittle">Educate More Heads</p>
                    <p class="float-column__text">Choose an editable pattern in the PromoRepublic idea library to create an attractive post about your educational materials and courses.
                    </p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/3quali.svg" alt="Award" class="benefits__icon"></div>
                    <p class="float-column__tittle">Stay Always Qualitative</p>
                    <p class="float-column__text">Every word a person says, every mention someone writes will be visible for you. You can it keep under your control.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-subtitle">why promorepublic?</p>
        <p class="fourthversion-section-main-title">Engage & Convert More People To Your Classes and Lectures</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/education_offer1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Engage More People to Dive into Education</p>
                <p class="odd-even-description">Make an advanced promotional post to pull off your leading lectors and insightful courses in Facebook and Instagram. PromoRepublic creates ads that works.</p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Make Everybody Feel Like You’re on Top</p>
                <p class="odd-even-description">Use smart visual language to catch the eye of your follower and fuel the desire to get your course. PromoRepublic has a big post library, and choose what fits you well.</p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/education_offer2.jpg" alt="Promorepublic" class="odd-image">
            </div>
        </div>

        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/education_offer3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Easy Content Planning is Possible</p>
                <p class="odd-even-description">PromoRepublic makes automatic post scheduling for you and helps guiding communities in Facebook groups. Take a rest and get inspired.</p>
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
$demo_link = '//get.promorepublic.com/demo-education-coaching/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>




<?php get_footer(); ?>
