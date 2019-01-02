<?php
/*
 * Template Name: EN Agencies Freelancers
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



<div id="header-content" class="main-content">
    <div class="main-content__left">
        <h1 class="main-title" id="agencyfreelancer-title">White-labeled<br> Social Media Platform for Agencies and Freelancers. Content included.</h1>
        <p class="main-description">Save time with our content suggestion and approval features. Get more profits up-selling additional services.</p>
        <div class="main-content__btns-container">
            <a href="//app.promorepublic.com#signup" class="main-btn">Start your free trial</a>
            <a href="//get.promorepublic.com/agency-platform/" class="secondary-btn secondary-btn--white">request a demo</a>
        </div>

        <?php $custom_query = new WP_Query('p=442');
        while($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'site-sections/integrated-socials', get_post_format() )?>

            <?php the_content(); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

    </div>
    <div class="main-content__new-video video-tab video-agency">
        <div class="laptop-wrapper">
            <span class="secondary-btn js-popup-video-btn" data-iframe-src="https://www.youtube.com/embed/5X9bmtROyjY?autoplay=1">
                <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
<image id="Vector_Smart_Object_copy_2" data-name="Vector Smart Object copy 2" width="32" height="32"
       xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAQAAADZc7J/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfiCgkQMy/jfLwbAAABmElEQVRIx62VP0vDQBjGf3cJxmsptEKhUHCpRfBjOLu4ODlIP4SLi5vgLK46uDmIg6uDH0KEWhChInRooUoMND2HpH9sL7lEfaZwz/s89+Te416BAdqlTAmFhwTGBPgMGYjRcq1YEitqVJbXAU2fd+GnGGiHOlXS0aMrQqOBVjTwsCOgM8sxNdBFmjgZ5AAhbfEZfcrp7tnl4NDUas5AOzRyyCOLhnZmCeqZ/v0nPOqxgVbWkzejqlWUoGYgJbc8sGexqIHULhUDVaROgUNOKaQYVLQrKRtv3QTbXLGRyArKkpIl5jqX7CSyJYmyHtYqxxyxYuSUzNjAXS6iti3Ak5O7aMUm54ZVmVUOxK/DogPjjPInWobasSTIJL+hxZthPXDxrX344oS7BM6XDC3yVw4S5TCUDNAp8nv2eU5kNQNXjHSftSXqgxeqnHGdmq4vRgK0YstACkjNBvAofAnCp2eMZ5P3hD95kboZmzmPgC7EBiKkQ5hLHtKJpkN8OYVPO4dFSHsyGf5vsMCfR9s0x++H67Qyx3j/BlEDdO6WACz+AAAAAElFTkSuQmCC"/></svg></i>
                play video</span>
        </div>
    </div>
</div>
</div>
<div class="main-section__bg">
    <video autoplay loop muted playsinline class="factory-bg">
        <source src="../img-new/new-landing/factory_video_bg.mp4" type="video/mp4"/>
        <source src="../img-new/new-landing/factory_video_bg.webm" type="video/webm"/>
        <source src="../img-new/new-landing/factory_video.ogv" type="video/ogg"/>
    </video>
</div>
</section>

<div class="popup js-popup">
    <div class="video-container popup-container">
        <iframe frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <span class="close-agency-popup"><i class="fa fa-times-circle"></i></span>
    </div>
</div>



<?php $custom_query = new WP_Query('p=194');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/numbers', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<section class="products-features">
    <p class="fourthversion-section-main-title">What’s included?</p>
    <div class="products-features__row">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-left">
                    <p class="products-features__title">Collaboration<br> Platform</p>
                    <p class="products-features__description">Invite your clients to collaborate within the platform. Upload or create content, schedule ahead and send links to clients for publishing approval.</p>
                    <a href="//app.promorepublic.com#signup" class="main-btn">START COLLABORATION</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-1.jpg"
                         srcset="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-1.jpg 1x,
                         <?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-1_2x.jpg 2x" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>
    <div class="products-features__row products-features--bg-orange">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-right">
                    <p class="products-features__title -white-color">Smart<br> Posting</p>
                    <p class="products-features__description -white-color">PromoRepublic will choose the best posting time for every your post, depending on your industry and type of a post. Schedule ahead to Facebook, Instagram, Twitter and LinkedIn pages - all in one place.</p>
                    <a href="//app.promorepublic.com#signup" class="secondary-btn secondary-btn--white">START SCHEDULING</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-2.png"
                         srcset="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-2.png 1x,
                         <?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-2_2x.png 2x" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>
    <div class="products-features__row">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-left">
                    <p class="products-features__title">Post Ideas<br> Library</p>
                    <p class="products-features__description">
                        PromoRepublic already has an ideas library of 100,000+ editable templates and royalty free images, that you can customize with our Drag’n’Drop Editor.
                    </p>
                    <a href="//app.promorepublic.com#signup" class="main-btn">DISCOVER IDEAS</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshotsagency-product-3.jpg"
                         srcset="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-3.jpg 1x,
                         <?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-3_2x.jpg 2x" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="how-work">
    <div class="container">
        <p class="fourthversion-section-main-title">How Does It Work?</p>
        <div class="how-work__container">
            <div class="how-work__column">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/upload_agency.svg" alt="Icon" class="how-work__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/arrow_agency.svg" alt="Arrow" class="how-work__arrow">
                <p class="how-work__description">Agency uploads content or easily creates it within the platform.</p>
            </div>
            <div class="how-work__column">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/approve_agency.svg" alt="Icon" class="how-work__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/arrow_agency.svg" alt="Arrow" class="how-work__arrow">
                <p class="how-work__description">Client approves content, edits it or schedules additional posts.</p>
            </div>
            <div class="how-work__column">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/report_agency.svg" alt="Icon" class="how-work__icon">
                <p class="how-work__description">Agency and Client get Performance Report. </p>
            </div>
        </div>
    </div>
</section>



<section class="products-features products-features--products">
    <p class="fourthversion-section-main-title">Increase Your Revenue<br> by Selling Additional Services</p>
    <div class="products-features__row products-features--bg-blue">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-left">
                    <p class="products-features__title -white-color">Social<br> Monitoring</p>
                    <p class="products-features__description -white-color">Manage brand awareness, find potential influencers while simultaneously tracking multiple social media in one place.</p>
                    <a href="/en/pricing.php#agency" class="products-features__agency-price -white-color">STARTS FROM $49</a>
                    <div></div>
                    <a href="/en/smart-monitoring.php" class="secondary-btn secondary-btn--white">LEARN MORE</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-4.png"
                         srcset="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-4.png 1x,
                         <?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-4_2x.png 2x" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>
    <div class="products-features__row">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-right">
                    <p class="products-features__title">Intelligent<br> Ads</p>
                    <p class="products-features__description">Implement Paid Ads Campaigns to your services to showcase your clients on a global level and get more sales.</p>
                    <a href="/en/pricing.php#agency" class="products-features__agency-price">STARTS FROM $49</a>
                    <div></div>
                    <a href="/en/intelligent-ads.php" class="main-btn">LEARN MORE</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/screenshotsagency-product-5.jpg"
                         srcset="<?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-5.jpg 1x,
                         <?php echo get_template_directory_uri(); ?>/resources/images/screenshots/agency-product-5_2x.jpg 2x" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>
</section>



<?php $custom_query = new WP_Query('p=175');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/features', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

<?php
$pricingLink = '/en/pricing.php#agency';
$custom_query = new WP_Query('p=270');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/free-trial.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query
?>


<section class="about-platform">
    <div class="container">
        <p class="fourthversion-section-main-title">It's not<br> Just About the Platform</p>
        <div class="about-platform__container">
            <div class="about-platform__column">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/label_agency.svg" alt="Icon" class="about-platform__img">
                <p class="about-platform__title">White-label and Sales materials</p>
                <p class="about-platform__description">White-labeled software and materials you can use at every stage of your agency’s marketing funnel.</p>
            </div>
            <div class="about-platform__column">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/trainings_agency.svg" alt="Icon" class="about-platform__img">
                <p class="about-platform__title">Trainings and Webinars</p>
                <p class="about-platform__description">Guidance, support, and training to help your agency improve its client engagements.</p>
            </div>
            <div class="about-platform__column">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/agency.svg" alt="Icon" class="about-platform__img">
                <p class="about-platform__title">Agency Community</p>
                <p class="about-platform__description">Powerful networking opportunities to help your agency grow and succeed.</p>
            </div>
        </div>
    </div>
</section>

<section class="agency-webinars">
    <svg class="bottom-triangle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="white" points="0,100 100,0 100,100"></polygon>
    </svg>
    <div class="container">
        <div class="agency-webinars__container">
            <div class="agency-webinars__columns">
                <div class="agency-webinars__text-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/logo/webinars-agency-logo.svg" alt="Agency&Freelancer Academy" class="agency-webinars__logo">
                    <p class="agency-webinars__description">Join free weekly webinars to get inspiration and guidance. Our Social Media Management expert will teach you tricks & tips for all social
                        networks!</p>
                    <a href="//get.promorepublic.com/free-agency-webinars/" class="main-btn">BOOK A SEAT</a>
                </div>
            </div>
            <div class="agency-webinars__columns">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/agencies-freelancers/webinars-agency-img-dylan.png" alt="Dylan" class="agency-webinars__dylan-photo">
                <div class="agency-webinars__speaker-text">
                    <p>Speaker</p>
                    <p>Dylan Hey</p>
                    <p>Digital marketer,<br> agency owner</p>
                </div>
            </div>
        </div>
    </div>
    <svg class="bottom-triangle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="white" points="0,100 100,0 100,100"></polygon>
    </svg>
</section>


<section class="success-story">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="white" points="0,100 100,0 100,100"></polygon>
    </svg>
    <div class="container">
        <p class="fourthversion-section-main-title">A story of success</p>
        <div class="success-story__text-box">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/agencies_logo.png" alt="Logo" class="success-story__logo">
            <p class="success-story__company-name">GEX Management</p>
            <p class="success-story__quote md-text">“Before discovering PromoRepublic, we were spending 10 or 15 minutes per post - and that was just for basic visual content - using Canva for design and
                Hootsuite for scheduling finished posts. Once we starting working with PromoRepublic, we were suddenly spending no more than 5 minutes on it.”</p>
            <a href="/en/ss-agency.php" class="success-story__link">Read the full success story of GEX Management &gt;&gt;</a>
        </div>
    </div>
    <div class="success-story__bg"></div>
</section>



<?php $custom_query = new WP_Query('p=272');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/mentioned', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php $custom_query = new WP_Query('p=278');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/clients', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<section class="popular-posts">
    <div class="container">
        <p class="fourthversion-section-title">Social Media Resources<br> by PromoRepublic</p>
        <p class="fourthversion-section-subtitle">featured articles</p>
        <div class="popular-posts__posts-container">
            <div class="popular-posts__column">
                <a href="//promorepublic.com/en/blog/social-media-marketing-report-create-explain-client/" class="poular-posts__link" target="_blank">
                    <span class="poular-posts__link-inner-content poular-posts--agency"></span>
                </a>
            </div>
            <div class="popular-posts__column">
                <a href="//promorepublic.com/en/blog/4-ways-you-can-better-collaborate-with-your-clients/" class="poular-posts__link" target="_blank">
                    <span class="poular-posts__link-inner-content poular-posts--agency"></span>
                </a>
            </div>
            <div class="popular-posts__column">
                <a href="//promorepublic.com/en/blog/building-content-plan-checklist/" class="poular-posts__link" target="_blank">
                    <span class="poular-posts__link-inner-content poular-posts--agency"></span>
                </a>
            </div>
        </div>
        <div class="btn-container"><a href="//promorepublic.com/en/blog/" class="main-btn" target="_blank">see all articles</a></div>
    </div>
</section>



<section class="why-us">
    <p class="fourthversion-section-main-title">Why us?</p>
    <p class="why-us__description">Compare PromoRepublic to other platforms. See why it stands out for agencies & freelancers!</p>
    <a class="why-us__img-link" href="//get.promorepublic.com/social-media-software-for-agencies/">
        <img class="why-us__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/why-us/compare-table.jpg"
             srcset="<?php echo get_template_directory_uri(); ?>/resources/images/why-us//compare-table.jpg 1x,
                        <?php echo get_template_directory_uri(); ?>/resources/images/why-us/compare-table2x.jpg 2x"
             alt="Why PromoRepublic Table">
    </a>
    <div class="btn-container"><a href="//get.promorepublic.com/social-media-software-for-agencies/" class="main-btn">compare</a></div>
</section>



<?php
$demo_link = '//get.promorepublic.com/agency-platform/';
$custom_query = new WP_Query('p=297');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-demo-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>


<?php get_footer(); ?>

