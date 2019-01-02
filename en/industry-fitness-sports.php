<?php
/*
 * Template Name: EN Industry Fitness Sports
 * Template Post Type: page
 */
?>
<?php get_header(); ?>


<div class="main-content">
    <div class="main-content__left">
        <p class="fourthversion-section-subtitle">Fitness & Sports</p>
        <h1 class="main-title">Invite New Fitness Clients to Your Studio</h1>
        <p class="main-description">Keep your clients engaged in what your gym offers. Inform people on what’s so special about exercises, workouts, or even yoga mats. Explain how you can help them find zen and keep those endorphins pumping.</p>
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
                    <p class="float-column__tittle">Eyes Make the Body Work</p>
                    <p class="float-column__text">Use editable 100,000+ pic ideas to show the dream-body to your persona.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/2discount.svg" alt="Discount" class="benefits__icon"></div>
                    <p class="float-column__tittle">Sell More Gym Memberships </p>
                    <p class="float-column__text">Promote free passes, discounts and group or individual training sessions, using intuitive Facebook ads.</p>
                </div>
            </div>
            <div class="float-column">
                <div class="float-column__text-box">
                    <div class="benefits__icon-container"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/3Spark.svg" alt="Horn" class="benefits__icon"></div>
                    <p class="float-column__tittle">Spark Conversation About Your Trainings</p>
                    <p class="float-column__text">You will always hear about the reviews and mentions that people are spreading about your trainers and gyms.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <p class="fourthversion-section-subtitle">why promorepublic?</p>
        <p class="fourthversion-section-main-title">Spread the Word About Your Classes and Get More People to Your Studios</p>
        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/fitness_offer1.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Make People Know Your Workouts are Impressive</p>
                <p class="odd-even-description">Embrace the desire to start training with just one pic and capture all eyes and ears to know what people say after their classes. PromoRepublic sees and hears words your customers say about you.</p>
            </div>
        </div>

        <div class="even-row">
            <div class="even-column-left">
                <p class="odd-even-title">People Go, Your Workouts Go</p>
                <p class="odd-even-description">Use Facebook and Instagram targeting ads to invite your current and new clients to come for wow-effect group training.</p>
            </div>
            <div class="even-column-right">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/fitness_offer2.jpg" alt="Promorepublic" class="odd-image">
            </div>
        </div>

        <div class="odd-row">
            <div class="odd-column-left">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/industries/fitness_offer3.jpg" alt="Promorepublic" class="odd-image">
            </div>
            <div class="odd-column-right">
                <p class="odd-even-title">Effortless Planning and Time-Saving Posting </p>
                <p class="odd-even-description">PromoRepublic automatically schedules your posts in a calendar. Everything goes live on the right day and at right time. </p>
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
$demo_link = '//get.promorepublic.com/demo-fitness-sports/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>
