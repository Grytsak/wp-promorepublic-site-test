<?php
/*
 * Template Name: EN Industry Business Finances
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



<div class="main-content">
    <div class="main-content__left">
        <p class="fourthversion-section-subtitle">Business & Finances</p>
        <h1 class="main-title">Increase Brand Awareness & Attract Clients For Your Law Firm or Consulting Business</h1>
        <p class="main-description">Earn customer trust by spreading relevant news, services, and words of advice. Get, “oh-my” feedback from social and increase your chances to turn the audience into a friend.</p>
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
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/1rocket.svg" alt="Rocket" class="benefits__icon"></div>
                    <p class="float-column__tittle">Skyrocket the Social Media Posting</p>
                    <p class="float-column__text">First, get people to enjoy polished content. They’ll be full of educational material they can take out and apply in the real world. Your content will be a better alternative than any other mediocre torrent of buzzwords that can be easily found and easily forgotten.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/2closer.svg" alt="Handshake" class="benefits__icon"></div>
                    <p class="float-column__tittle">Staying Even Closer</p>
                    <p class="float-column__text">The only thing more eye-catching than a pic produced in high volume is content produced rarely, but relatedly to the X-factor your customer has. Create great educational material using and get more followers.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/3time.svg" alt="Watch" class="benefits__icon"></div>
                    <p class="float-column__tittle">Save Time, Plan Smart</p>
                    <p class="float-column__text">You know what they say: time is money, planning is routine. No matter in what location of the world you find yourself, every piece of your content will be automatically scheduled and posted on time. Your audience will never miss a word from you.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-subtitle">why promorepublic?</p>
        <p class="fourthversion-section-main-title">Attract New Clients from Social Media and Let Your Peers Know About Your Expertise</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/business_offer1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Creating Post Ideas to Engage</p>
                <p class="odd-even-description">Build useful and expert content around your brand. Seed the insights in a non-ordinary way using templates found in PromoRepublic library.</p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Ideal Content Proportion for Better Planning</p>
                <p class="odd-even-description">The math of how many posts per day and its timing can be effortless. The questions, “when?” and “what?” have the answers. And the best part? PromoRepublic will do that job for you.</p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/business_offer2.jpg" alt="Promorepublic" class="odd-image">
            </div>
        </div>

        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/business_offer3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Always Know What Others Say About You</p>
                <p class="odd-even-description">Inspired by reviews, beautiful visuals, or well-written cohesive texts people share their love and respect by way of likes and feedback. PromoRepublic helps you not to miss a word.</p>
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
$demo_link = '//get.promorepublic.com/demo-business-finances/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>




<?php get_footer(); ?>
