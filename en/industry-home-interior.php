<?php
/*
 * Template Name: EN Industry Home Interior
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



    <div class="main-content">
        <div class="main-content__left">
            <p class="fourthversion-section-subtitle">Home & Interior</p>
            <h1 class="main-title">Make Homes More Beautiful with Social Media Promotion</h1>
            <p class="main-description">Bring comfort and relaxation from offline to online. With PromoRepublic, create a content plan proving your design isn’t just beautiful, but also functional and suits people’s lifestyle completely. Through individually adapted tone of voice, bring your items to the social media world and show off how unique they really are. From cool eco-friendly and sustainable items to high-tech architecture projects - use the right design language on social media..</p>
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
                        <p class="float-column__tittle">Know What<br>You Are</p>
                        <p class="float-column__text">Show you have a great eye for design, using our post ideas library in the most aesthetic of ways.</p>
                    </div>
                </div>
                <div class="float-column">
                    <div class="float-column__text-box">
                        <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/2reach.svg" alt="Horn" class="benefits__icon"></div>
                        <p class="float-column__tittle">Reach New Clients with Your Design</p>
                        <p class="float-column__text">Promote your home decor and design with Facebook local awareness ads.</p>
                    </div>
                </div>
                <div class="float-column">
                    <div class="float-column__text-box">
                        <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/3mentions.svg" alt="People talk" class="benefits__icon"></div>
                        <p class="float-column__tittle">Make People Trust Your Taste</p>
                        <p class="float-column__text">Keep up with every mention, review, and word people say about your design projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="offers">
        <div class="container">
            <p class="fourthversion-section-subtitle">why promorepublic?</p>
            <p class="fourthversion-section-main-title">How Promorepublic Helps Home & Interior Businesses to Achieve Their Business Goals</p>
            <div class="odd-row">
                <div class="odd-column-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/home_offer1.jpg" alt="Promorepublic" class="odd-image">
                </div>
                <div class="odd-column-right">
                    <p class="odd-even-title">Have a Good Online Presence</p>
                    <p class="odd-even-description">Make your color, material, and interior style look much more creative with editable post ideas. With a right word, show off your expert eye.</p>
                </div>
            </div>

            <div class="even-row">
                <div class="even-column-left">
                    <p class="odd-even-title">Promote Home Comfort as a New Trend</p>
                    <p class="odd-even-description">A pillow, a candle, or very special paint,  creates the atmosphere. Show people how they can reach the feeling-like-home design by promoting your posts on Facebook and Instagram.</p>
                </div>
                <div class="even-column-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/home_offer2.jpg" alt="Promorepublic" class="odd-image">
                </div>
            </div>

            <div class="odd-row">
                <div class="odd-column-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/home_offer3.jpg" alt="Promorepublic" class="odd-image">
                </div>
                <div class="odd-column-right">
                    <p class="odd-even-title">Free Yourself from Time-Consuming Post Planning</p>
                    <p class="odd-even-description">Automatic scheduling in PromoRepublic calendar saves your time and lets you choose what content to post.</p>
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
$demo_link = '//get.promorepublic.com/demo-home-interior/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>