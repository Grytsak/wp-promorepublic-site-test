<?php
/*
 * Template Name: EN Seo Article
 * Template Post Type: page
 */
?>
<?php get_header(); ?>

</div>
</section>


<?php
while (have_posts()) : the_post(); ?>

    <div class="article-container">
        <?php the_content(); ?>
    </div>

    <?php
endwhile;
wp_reset_query();
?>

<?php get_footer(); ?>
