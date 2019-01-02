<?php
/*
 * Template Name: EN Careers
 * Template Post Type: page
 */
?>
<?php get_header(); ?>


<h1 class="about-main-title -white-color">Join the people behind the social media platform</h1>
<div class="about-nav-wrap">
    <div class="about__nav-wrap">
        <nav class="about__nav">
            <a class="about__nav-link" href="/en/about/">About us</a>
            <a class="about__nav-link" href="/en/press/">Press</a>
            <a class="about__nav-link -active" href="/en/careers/">Jobs</a>
        </nav>
    </div>
</div>
</section>


<section class="about__section careers__section">
    <div class="about__wrap">
        <div class="about__sub-container">
            <h1 class="about__h1">We are hiring</h1>
        </div>
        <div class="jobs-video-wrapper">
            <iframe src="https://www.youtube.com/embed/JsYOi5COkYU?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/about/team.jpg" alt="PromoRepublic Team" class="careers__team-photo">
        </div>
        <div class="about__sub-container">
            <div class="positions about__text" style="margin-top: 20px;">
                <h2 class="about__h2 careers__h2">Open positions</h2>

                <?php
                $args = array(
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'category_name' => 'Vacancy'
                );
                $arr_posts = new WP_Query($args);

                if ($arr_posts->have_posts()) :

                    while ($arr_posts->have_posts()) :
                        $arr_posts->the_post();
                        ?>
                        <div class="vacancies">
                        <a href="<?php the_permalink(); ?>" class="vacancies__link"><?php the_title(); ?></a>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
