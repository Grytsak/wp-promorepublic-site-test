<?php
/*
 * Template Name: EN Sitemap
 * Template Post Type: page
 */
?>
<?php get_header(); ?>



</div>
</section>

<section class="site-map">
    <div class="container">
        <div class="fourthversion-section-main-title">PromoRepublic Site Map</div>
        <ul class="site-map__list">
            <?php
            $args = array(
                'post_type' => 'page',
                'post_status' => 'publish',
                'category_name' => 'SEO Article'
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :

                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</section>



<?php get_footer(); ?>
