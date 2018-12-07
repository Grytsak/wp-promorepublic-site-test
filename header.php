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

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css">


<!--    <link href="--><?php //echo  get_template_directory_uri(); ?><!--/resources/css/style.css" rel="stylesheet" data-test="test">-->
<!--     Main compiled script -->

<!--    <script src="--><?php //echo  get_template_directory_uri(); ?><!--/resources/js/main.js" async></script>-->
<!--     End Main compiled script -->

    <?php wp_head(); ?>
</head>
<body class="-fourthversion">


<section class="main-section -fourthversion">
    <div class="container">
        <div class="header-spacer"></div>
        <header class="main-header -thirdversion">


                <div class="navigation-container">
                    <a href="/" class="pr-logo main-header__logo" rel="noindex"></a>
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
                                <span onclick="toggleProductsMenu()">Products</span>
                                <div class="inner-list-container">
                                    <ul class="main-nav__level-two inner-list">
                                        <li>
                                            <a href="/en/smart-posting.php" class="main-nav__inner-item" rel="noindex">Smart Posting</a>
                                        </li>
                                        <li>
                                            <a href="/en/intelligent-ads.php" class="main-nav__inner-item" rel="noindex">Intelligent Ads</a>
                                        </li>
                                        <li>
                                            <a href="/en/smart-monitoring.php" class="main-nav__inner-item" rel="noindex">Social Monitoring</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main-nav__item">
                                <a href="/en/success-stories.php" rel="noindex">Success stories</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="/pricing" rel="noindex">Pricing</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="/en/about.php" rel="noindex">About</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="//promorepublic.com/en/blog/" rel="noindex">Blog</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="/en/agencies-freelancers.php" rel="noindex">Agencies</a>
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

