<?php
/*
 * Template Name: EN Success Stories
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



<div class="ss-top-message">
    <h1 class="ss-top-message__title">Success Stories</h1>
    <p class="ss-top-message__text">
        Case studies such as these inspire and motivate us.<br/>
        See how businesses similar to yours are growing with PromoRepublic.
    </p>
</div>
</div>
</section>
<div class="ss-page">
    <section class="ss-section ss-section--z-up">
        <div class="ss-container">
            <div class="ss-photo-menu">
                <div class="ss-photo-menu__item-wrap">
                    <div class="ss-photo-menu__item">
                        <a
                            class="ss-photo-menu__card"
                            href="/en/ss-wild-and-roaming/"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/main/wild-and-roaming.jpg')"
                        >
                            <div class="ss-photo-menu__card-in">
                                <h3 class="ss-photo-menu__card-title">Wild & Roaming</h3>
                                <span class="ss-photo-menu__card-text">Wild leggings for wild humans</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ss-photo-menu__item-wrap">
                    <div class="ss-photo-menu__item">
                        <a
                            class="ss-photo-menu__card"
                            href="/en/ss-agency/"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/main/agency.jpg')"
                        >
                            <div class="ss-photo-menu__card-in">
                                <h3 class="ss-photo-menu__card-title">GEX Management</h3>
                                <span class="ss-photo-menu__card-text"><b>Architects</b> in Dallas</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ss-photo-menu__item-wrap">
                    <div class="ss-photo-menu__item">
                        <a
                            class="ss-photo-menu__card"
                            href="/en/ss-retail/"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/main/retail.jpg')"
                        >
                            <div class="ss-photo-menu__card-in">
                                <h3 class="ss-photo-menu__card-title">Little & Lively</h3>
                                <span class="ss-photo-menu__card-text"><b>Baby & Kids Fashion</b> in Abbotsford</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ss-photo-menu__item-wrap">
                    <div class="ss-photo-menu__item">
                        <a
                            class="ss-photo-menu__card"
                            href="/en/ss-florist/"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/main/florist.jpg')"
                        >
                            <div class="ss-photo-menu__card-in">
                                <h3 class="ss-photo-menu__card-title">Fleuriste San Remo</h3>
                                <span class="ss-photo-menu__card-text"><b>Florist</b> in Montreal, Quebec</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ss-photo-menu__item-wrap">
                    <div class="ss-photo-menu__item">
                        <a
                            class="ss-photo-menu__card"
                            href="/en/ss-therapy/"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/main/therapy.jpg')"
                        >
                            <div class="ss-photo-menu__card-in">
                                <h3 class="ss-photo-menu__card-title">North South Physical <br/>Therapy</h3>
                                <span class="ss-photo-menu__card-text"><b>Therapy</b> in Revere, Massachusetts</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ss-photo-menu__item-wrap">
                    <div class="ss-photo-menu__item">
                        <a
                            class="ss-photo-menu__card"
                            href="/en/ss-restaurant/"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/success-stories/main/restaraunt.jpg')"
                        >
                            <div class="ss-photo-menu__card-in">
                                <h3 class="ss-photo-menu__card-title">The Big Cheezy</h3>
                                <span class="ss-photo-menu__card-text"><b>Restaurant</b> in New Orleans</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ss-map">
        <div class="ss-container">
            <div class="numbers">
                <div class="numbers__wrap -thirdversion">
                    <div class="numbers-block -thirdversion">
                        <p class="numbers__number">85K</p>
                        <p class="numbers__text">
                            Small business owners
                        </p>
                    </div>
                    <div class="numbers-block -thirdversion">
                        <p class="numbers__number">25</p>
                        <p class="numbers__text">
                            Countries
                        </p>
                    </div>
                    <div class="numbers-block -thirdversion">
                        <p class="numbers__number">3M</p>
                        <p class="numbers__text">
                            Posts created
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php $custom_query = new WP_Query('p=546');
    while($custom_query->have_posts()) : $custom_query->the_post();
        get_template_part( 'site-sections/try-block', get_post_format() )?>

        <?php the_content(); ?>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
</div>




<?php get_footer(); ?>
