<?php
/*
 * Template Name: Career
 * Template Post Type: page
 */
?>
<?php get_header(); ?>


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


<?php
while (have_posts()) : the_post(); ?>

    <div class="about__sub-container en-career">
        <?php the_content(); ?>
    </div>

    <?php
endwhile;
wp_reset_query();
?>

<?php get_footer(); ?>
