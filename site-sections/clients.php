<?php
/*
 * Template Name: section clients
 * Template Post Type: post
 */
?>

<section class="clients -fourthversion">
    <div class="container">


        <p class="fourthversion-section-title"><?php the_field('clients_title'); ?></p>
        <p class="fourthversion-section-subtitle"><?php the_field('clients_description'); ?></p>
        <div class="float-columns-container ">

            <?php
            if (have_rows('clients_content')):

                // loop through the rows of data
                while (have_rows('clients_content')) : the_row();

                    // display a sub field value
                    $avatar = get_sub_field('client_avatar');
                    $feedback = get_sub_field('clients_feedback');
                    $name = get_sub_field('client_name');
                    $position = get_sub_field('client_position');
                    $company = get_sub_field('client_company');
                    $companyLink = get_sub_field('client_company_link');

                    ?>

                    <div class="float-column">
                        <div class="float-column__text-box">
                            <span class="clients__avatar" style="background-image: url(<?php echo $avatar['url'] ?>);"></span>
                            <p class="float-column__text"><?php echo $feedback ?></p>
                            <p class="clients__name"><?php echo $name ?></p>
                            <p class="clients__proffesion"><?php echo $position ?> <a href="<?php echo $companyLink ?>" class="clients__work-link"><?php echo $company ?></a></p>
                        </div>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <?php $clientsCTA = get_field('clients_cta'); ?>
        <div class="clients__btn-container"><a class="main-btn main-btn_white" href="<?php echo $clientsCTA['url']; ?>"><?php echo $clientsCTA['title']; ?></a></div>
    </div>
</section>

