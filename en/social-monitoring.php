<?php get_header(); ?>

<?php
/*
 * Template Name: EN Social Monitoring
 * Template Post Type: page
 */
?>

<div class="main-head">
    <div class="main-head__left">
        <h1 class="main-title" id="monitoring-title">See who’s talking<br>about you on social media<br>with Social Monitoring</h1>
        <p class="main-description">Manage your brand awareness, drive more traffic<br>and find potential influencers while simultaneously tracking<br>multiple social media in one place.</p>
        <div class="main-content__btns-container">
            <a class="main-btn main-btn_white" type="submit" value="Get Started" href="//app.promorepublic.com/#/monitoring">try it free</a>
        </div>

        <?php $custom_query = new WP_Query('p=442');
        while($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'site-sections/integrated-socials', get_post_format() )?>

            <?php the_content(); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

    </div>
    <div class="main-head__right">
        <img class="product-header-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/products/Robot.png"
             srcset="<?php echo get_template_directory_uri(); ?>/resources/images/products/Robot.png 1x, <?php echo get_template_directory_uri(); ?>/resources/images/products/Robot2x.png 2x" alt="Robot">
    </div>
</div>
</div>
<div class="main-section__bg"></div>
</section>


<section class="benefits">
    <div class="container">
        <div class="btn-container">
            <img class="products__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-monitoring.svg" alt="Monitoring">
        </div>
        <p class="fourthversion-section-main-title">Why to Use<br>Social Monitoring</p>
        <div class="float-columns-container">
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/rating-blue.svg" alt="Rating Icon" class="benefits__icon"></div>
                    <p class="float-column__tittle">Manage your<br>brand reputation</p>
                    <p class="float-column__text">Get live updates from Instagram, Facebook and Twitter about your brand in one place.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/radar-blue.svg" alt="Radar" class="benefits__icon"></div>
                    <p class="float-column__tittle">Don’t miss out<br>on mentions</p>
                    <p class="float-column__text">Keep track on each mention separately. Define most valuable ones and engage with the authors.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/stopwatch-blue.svg" alt="Watch" class="benefits__icon"></div>
                    <p class="float-column__tittle">React on time</p>
                    <p class="float-column__text">Seeing post from the dissatisfied customer on time, you can talk to your client and resolve the issue.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-main-title">How Social Monitoring Helps<br>to Achieve Your Goals</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/SM-1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Respond to all Mentions and Comments</p>
                <p class="odd-even-description">Don't miss out on what everyone is saying about your brand across the internet.</p>
                <a href="//app.promorepublic.com/#/monitoring" class="secondary-btn small-btn">respond now</a>
            </div>
        </div>
        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">Find and Join Conversations</p>
                <p class="odd-even-description">Collect every comment or mention online<br>in real time and react immediately.</p>
                <a href="//app.promorepublic.com/#/monitoring" class="secondary-btn small-btn">find conversations</a>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/SM-2.jpg" alt="Promorepublic" class="even-image"">
            </div>
        </div>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/SM-3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Get Compelling Insights</p>
                <p class="odd-even-description">Be ahead of the curve by monitoring<br>your competition on social media.</p>
                <a href="//app.promorepublic.com/#/monitoring" class="secondary-btn small-btn">get insights</a>
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
$demo_link = '//calendly.com/roman-rom/social-commerce-automation-socialmonitoring';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>