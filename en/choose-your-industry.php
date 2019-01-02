<?php
/*
 * Template Name: EN Choose Your Industry
 * Template Post Type: page
 */
?>
<?php get_header(); ?>

    </div>
    </section>


<?php $custom_query = new WP_Query('p=207');
while ($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part('site-sections/industries', get_post_format()) ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>


<?php get_footer(); ?>