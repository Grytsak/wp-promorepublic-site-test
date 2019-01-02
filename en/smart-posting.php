<?php
/*
 * Template Name: EN Smart Posting
 * Template Post Type: page
 */
?>
<?php get_header(); ?>

<div class="main-head">
    <div class="main-head__left">
        <h1 class="main-title" id="smartposting-title">Easily plan, publish<br>and manage your content<br>with Smart Posting</h1>
        <p class="main-description">All your posts and visuals in one place, scheduled in advance<br>and published automatically to multiple social media.</p>
        <div class="main-content__btns-container">
            <a class="main-btn" type="submit" value="Get Started" href="//app.promorepublic.com#signup">try it free</a>
        </div>

        <?php $custom_query = new WP_Query('p=442');
        while($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'site-sections/integrated-socials', get_post_format() )?>

            <?php the_content(); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

    </div>
    <div class="main-head__right">
        <img class="product-header-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/products/Brain.png"
             srcset="<?php echo get_template_directory_uri(); ?>/resources/images/products/Brain.png 1x,
            <?php echo get_template_directory_uri(); ?>/resources/images/products/Brain2x.png 2x" alt="Brain">
    </div>
</div>
</div>
<div class="main-section__bg"></div>
</section>

<section class="benefits">
    <div class="container">
        <div class="btn-container">
            <img class="products__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/products-calendar.svg" alt="Calendar">
        </div>
        <p class="fourthversion-section-main-title">Why to Use<br>Smart Posting</p>
        <div class="float-columns-container">
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/grafic-editor-blue.svg" alt="Grafic Editor" class="benefits__icon"></div>
                    <p class="float-column__tittle">Top-notch<br>visual content</p>
                    <p class="float-column__text">Post ideas library with 100,000+ hand-crafted visuals, integrated photostocks and easy-to-use graphics editor.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/timing-blue.svg" alt="Timing" class="benefits__icon"></div>
                    <p class="float-column__tittle">Planned<br>publishing</p>
                    <p class="float-column__text">Choose date and time and schedule your posts in advance, with just a few clicks. Use “Add to queue” to publish posts automatically.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/network-blue.svg" alt="Instagram" class="benefits__icon"></div>
                    <p class="float-column__tittle">Multiple social<br>media platforms</p>
                    <p class="float-column__text">We are integrated and partnered with every social media platform you would use to promote your business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-main-title">How Smart Posting Helps<br>to Achieve Your Goals</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/SP-1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-subtitle">Smart planner</p>
                <p class="odd-even-title">Schedule ahead to multiple social media</p>
                <p class="odd-even-description">Our platform is here to make your life easy with automated publishing to your social media. Effortlessly create content, plan and publish posts, and manage
                    campaigns in one place. Once you give the thumbs up, our platform automatically posts at the best time for optimal reach!</p>
                <a href="//app.promorepublic.com#signup" class="secondary-btn small-btn">START SCHEDULING</a>
            </div>
        </div>
        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-subtitle">post ideas library</p>
                <p class="odd-even-title">Discover thousands of content ideas and events</p>
                <p class="odd-even-description">6,000+ Templates, handcrafted by a team of professional designers and copywriters. All the promotion mechanics, visuals, and text are packed and ready to be published.</p>
                <a href="//app.promorepublic.com#signup" class="secondary-btn small-btn">DISCOVER IDEAS</a>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/SP-2.jpg" alt="Promorepublic" class="even-image"">
            </div>
        </div>


        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/SP-3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-subtitle">graphics editor</p>
                <p class="odd-even-title">Create stunning posts to stand out on social media</p>
                <p class="odd-even-description">Customize templates or create your posts from scratch, no design skills required. Upload photos of your products logos, use over 200 different fonts, custom shapes and banners.</p>
                <a href="//app.promorepublic.com#signup" class="secondary-btn small-btn">START CREATING</a>
            </div>
        </div>
        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-subtitle">statistics</p>
                <p class="odd-even-title">Get insights about how your business performs on social</p>
                <p class="odd-even-description">Want to know how your posts are performing? We provide you with the latest analysis of important metrics including posts engagements, followers, and ROI.</p>
                <a href="//app.promorepublic.com#signup" class="secondary-btn small-btn">GET INSIGHTS</a>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/SP-4.jpg" alt="Promorepublic" class="even-image"">
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



<?php $custom_query = new WP_Query('p=173');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/popular-posts', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php $custom_query = new WP_Query('p=324');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>


