<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- favicomatic -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/favicomatic/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/favicomatic/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="/img/favicomatic/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/img/favicomatic/favicon-16x16.png" sizes="16x16"/>
    <meta name="application-name" content="PromoRepublic"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="/img/favicomatic/mstile-144x144.png"/>

    <title></title>

    <link rel="alternate" hreflang="en" href="https://promorepublic.com/en/">
    <link rel="alternate" hreflang="ru" href="https://promorepublic.com/ru/">
    <link rel="alternate" hreflang="uk" href="https://promorepublic.com/ua/">
    <!-- <link rel="alternate" hreflang="pt" href="https://promorepublic.com/pt/" > -->

    <meta name="description" content="">
    <!--    <meta name="keywords" content="PromoRepublic, SMM, content ideas, social media content, social media strategy, social media management, social media marketing, social media management tools">-->
    <meta name="keywords" content="">
    <meta name="author" content="PromoRepublic, Inc.">

    <meta name="google-site-verification" content="Fcdvjwf7TuU1qaP4i2PGOlQWATD4JD97K_rGyf_MP7o"/>
    <meta name="google-site-verification" content="VkSM9vYcRKCeIPLVJMGPtfr379962SBvCSkkDkY89v8"/>
    <meta property="og:type" content="website"/>
    <meta property="fb:app_id" content="1444699882480685" />


    <meta name="apple-itunes-app" content="app-id=1189674685">

    <script src="<?php echo get_theme_file_uri('dist/bundle.js') ?>" async></script>

    <?php wp_head(); ?>
</head>
<body class="<?php echo writeModificator(); ?>">

<?php

function writeModificator()
{
    if(strpos($_SERVER['REQUEST_URI'], '?') === false) {
        $uri = $_SERVER['REQUEST_URI'];
    } else {
        $uri = substr_replace($_SERVER['REQUEST_URI'], '', strpos($_SERVER['REQUEST_URI'], '?'));
    }

    switch ($uri) {
        case '/en/newindex.php':
        case '/en/index.php':
            return '-fourthversion -landing';
            break;
        case '/en/agencies-freelancers.php':
            return ' -fourthversion -agency-main';
            break;
        case '/en/success-stories.php':
            return '-thirdversion -ss -ss-main';
            break;
        case '/en/ss-florist.php':
            return '-ss -ss-florist -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-restaraunt.php':
            return '-ss -ss-restaraunt -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-therapy.php':
            return '-ss -ss-therapy -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-agency.php':
            return '-ss -ss-agency -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-retail.php':
            return '-ss -ss-retail -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-wild-and-roaming.php':
            return '-ss -ss-wild-and-roaming -ss-logo -ss-overlay -inverted';
            break;
        case '/en/agencies.php':
            return '-agency';
            break;
        case '/en/press.php':
            return 'about__main-section -inverted -fourthversion';
            break;
        case '/en/about.php':
            return 'about__main-section -inverted -fourthversion';
            break;
        case '/en/careers.php':
            return 'about__main-section -inverted -fourthversion';
            break;
        case '/en/career.php':
            return 'about__main-section -inverted';
            break;
        case '/en/features.php':
            return '-inner-page';
            break;
        case '/en/pricing.php':
            return '-fourthversion -pricing';
            break;
        case '/en/smart-posting.php':
            return '-fourthversion -products -smart-posting';
            break;
        case '/en/intelligent-ads.php':
            return '-fourthversion -products -intelligent-ads';
            break;
        case '/en/smart-monitoring.php':
            return '-fourthversion -products -smart-monitoring';
            break;
        case '/en/retail-ecommerce.php':
            return ' -fourthversion -industry -retail_ecommerce';
            break;
        case '/en/food-restaurants.php':
            return ' -fourthversion -industry -food_restaurants';
            break;
        case '/en/fitness-sports.php':
            return ' -fourthversion -industry -fitness_sports';
            break;
        case '/en/health-beauty.php':
            return ' -fourthversion -industry -health_beauty';
            break;
        case '/en/education-coaching.php':
            return ' -fourthversion -industry -education_coaching';
            break;
        case '/en/business-finances.php':
            return ' -fourthversion -industry -business_finances';
            break;
        case '/en/home-interior.php':
            return ' -fourthversion -industry -home_interior';
            break;
        case '/en/real-estate.php':
            return ' -fourthversion -industry -real_estate';
            break;
        case '/en/choose-your-industry.php':
            return ' -thirdversion -seo-article -industries-page';
            break;
        case '/integrations-hubspot/index.php':
            return '-inner-page';
            break;
        case '/integrations-buffer/index.php':
            return '-inner-page';
            break;
        case '/affiliate/index.php':
            return '-inner-page';
            break;
        case '/affiliate-partners/index.php':
            return ' -aff-partners -inverted';
            break;
        case '/en/social-commerce-for-small-business.php':
            return ' -thirdversion -seo-article -social-commerce-for-small-business';
            break;
        case '/en/facebook-post-ideas.php':
            return ' -thirdversion -seo-article -facebook-post-ideas';
            break;
        case '/en/facebook-content-strategy.php':
            return ' -thirdversion -seo-article -facebook-content-strategy';
            break;
        case '/en/monitor-mention-on-social-media.php':
            return ' -thirdversion -seo-article -monitor-mention-on-social-media';
            break;
        case '/en/why-to-schedule-posts-on-facebook.php':
            return ' -thirdversion -seo-article -why-to-schedule-posts-on-facebook';
            break;
        case '/en/sitemap.php':
            return ' -thirdversion -seo-article';
            break;


        case '/en/':
            return '-fourthversion -landing';
            break;
        case '/en/agencies-freelancers/':
            return ' -fourthversion -agency-main';
            break;
        case '/en/pricing/':
            return '-fourthversion -pricing';
            break;
        case '/en/smart-posting/':
            return '-fourthversion -products -smart-posting';
            break;
        case '/en/intelligent-ads/':
            return '-fourthversion -products -intelligent-ads';
            break;
        case '/en/social-monitoring/':
            return '-fourthversion -products -smart-monitoring';
            break;
        case '/en/retail-ecommerce/':
            return ' -fourthversion -industry -retail_ecommerce';
            break;
        case '/en/food-restaurants/':
            return ' -fourthversion -industry -food_restaurants';
            break;
        case '/en/fitness-sports/':
            return ' -fourthversion -industry -fitness_sports';
            break;
        case '/en/health-beauty/':
            return ' -fourthversion -industry -health_beauty';
            break;
        case '/en/education-coaching/':
            return ' -fourthversion -industry -education_coaching';
            break;
        case '/en/business-finances/':
            return ' -fourthversion -industry -business_finances';
            break;
        case '/en/home-interior/':
            return ' -fourthversion -industry -home_interior';
            break;
        case '/en/real-estate/':
            return ' -fourthversion -industry -real_estate';
            break;
        case '/en/choose-your-industry/':
            return ' -thirdversion -seo-article -industries-page';
            break;
        case '/en/about/':
            return 'about__main-section -inverted -fourthversion';
            break;
        case '/en/press/':
            return 'about__main-section -inverted -fourthversion';
            break;
        case '/en/careers/':
            return 'about__main-section -inverted -fourthversion';
            break;
        case '/en/agencies/':
            return '-agency';
            break;
        case '/en/features/':
            return '-inner-page';
            break;
        case '/en/success-stories/':
            return '-thirdversion -ss -ss-main';
            break;
        case '/en/ss-wild-and-roaming/':
            return '-ss -ss-wild-and-roaming -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-florist/':
            return '-ss -ss-florist -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-restaurant/':
            return '-ss -ss-restaraunt -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-therapy/':
            return '-ss -ss-therapy -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-agency/':
            return '-ss -ss-agency -ss-logo -ss-overlay -inverted';
            break;
        case '/en/ss-retail/':
            return '-ss -ss-retail -ss-logo -ss-overlay -inverted';
            break;
        case '/en/social-commerce-for-small-business/':
            return ' -thirdversion -seo-article -social-commerce-for-small-business';
            break;
        case '/en/facebook-post-ideas/':
            return ' -thirdversion -seo-article -facebook-post-ideas';
            break;
        case '/en/facebook-content-strategy/':
            return ' -thirdversion -seo-article -facebook-content-strategy';
            break;
        case '/en/monitor-mention-on-social-media/':
            return ' -thirdversion -seo-article -monitor-mention-on-social-media';
            break;
        case '/en/why-to-schedule-posts-on-facebook/':
            return ' -thirdversion -seo-article -why-to-schedule-posts-on-facebook';
            break;
        case '/en/sitemap/':
            return ' -thirdversion -seo-article';
            break;
        case '/integrations-hubspot/':
            return '-inner-page';
            break;
        case '/integrations-buffer/':
            return '-inner-page';
            break;
    }
    
    if (preg_match('#/en/careers/(.+?)#', $uri)) {
        return 'about__main-section -inverted -fourthversion';
    }
}
?>


<section class="main-section <?php  echo writeModificator(); ?>">
    <div class="container">
        <div class="header-spacer"></div>
        <header class="main-header -thirdversion">


                <div class="navigation-container">
                    <a href="/en/" class="pr-logo main-header__logo" rel="noindex"></a>
                    <div class="main-header__wrap -active">
                        <nav class="main-nav">
                            <?php
                            $pr_features_link;
                            if ($_SERVER['SCRIPT_NAME'] === '/en/index.php') {
                                $pr_features_link = '<li class="main-nav__item">
                                <a href="#pr_features" id="pr_features_link" rel="noindex">
                                    Features
                                </a>
                                <script>
                                    $("#pr_features_link").click(function(){
                                        window.mixpanel.track("Landing click Features Link");
                                        $("html, body").animate({
                                            scrollTop: $( $(this).attr("href") ).offset().top
                                        }, 500);
                                        return false;
                                    });
                                </script>
                            </li>';
                            }
                            ?>

                            <li class="main-nav__item sub-menu-container">
                                <span>Products</span>
                                <div class="inner-list-container">
                                    <ul class="main-nav__level-two inner-list">
                                        <li>
                                            <a href="/en/smart-posting/" class="main-nav__inner-item" rel="noindex">Smart Posting</a>
                                        </li>
                                        <li>
                                            <a href="/en/intelligent-ads/" class="main-nav__inner-item" rel="noindex">Intelligent Ads</a>
                                        </li>
                                        <li>
                                            <a href="/en/social-monitoring/" class="main-nav__inner-item" rel="noindex">Social Monitoring</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main-nav__item">
                                <a href="/en/success-stories/" rel="noindex">Success stories</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="/en/pricing/" rel="noindex">Pricing</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="/en/about/" rel="noindex">About</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="//promorepublic.com/en/blog/" rel="noindex">Blog</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="/en/agencies-freelancers/" rel="noindex">Agencies</a>
                            </li>
                        </nav>
                        <div class="main-header__ham-menu"></div>
                        <div class="main-header__controls">
                            <a href="//app.promorepublic.com/en" class="main-header__sign-in" rel="noindex">Sign in</a>
                            <a href="//app.promorepublic.com#signup" class="pr-btn btn-rect -demo" rel="noindex">Try it free</a>
                        </div>
                    </div>
                </div>


        </header>

