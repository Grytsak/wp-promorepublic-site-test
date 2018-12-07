<?php get_header(); ?>

<div class="switcher-container">
    <fieldset class="switch">
        <input id="pricing-smb" name="offer" type="radio" checked>
        <label class="secondary-btn" for="pricing-smb" onclick="togglePricingSwitcher(event)">FOR SMALL BUSINESSES</label>
        <input id="pricing-agency" name="offer" type="radio">
        <label class="secondary-btn" for="pricing-agency" onclick="togglePricingSwitcher(event)">FOR AGENCIES AND FREELANCERS</label>
    </fieldset>
</div>
<div class="pricing-tabs">
    <div class="pricing-tab pricing-tab--smb active">
        <h1>Pick Self-Service or Full Service</h1>
        <p class="pricing-description">Try products free for 14 days. <br> Upgrade or downgrade any time.</p>
        <p class="social-description">We integrate and partner with social media that matter to your business.</p>
        <div class="main-content__social-container">
            <img src="../img-new/socials/twitter-white.svg" alt="Twitter" class="main-content__social main-content-twitter">
            <img src="../img-new/socials/facebook-white.svg" alt="Facebook" class="main-content__social">
            <img src="../img-new/socials/instagram-white.svg" alt="Instagram" class="main-content__social main-content-instagram">
            <img src="../img-new/socials/pinterest-white.svg" alt="Pinterest" class="main-content__social">
            <img src="../img-new/socials/linkedin-white.svg" alt="LinkedIn" class="main-content__social">
        </div>
        <div class="product-offer-container">
            <div class="product-offer">
                <div class="product-offer__self-container">
                    <div class="product-offer__item">
                        <div class="product-offer__block">
                            <img src="../img-new/new-landing/product_icons/calendar-green.svg" alt="Calendar" class="product-offer__icon">
                            <div class="product-offer__title">
                                Smart Posting <i class="product-offer__info-icon"></i>
                                <div class="tool-tip">Automate posting to social with smart slots and templates library.</div>
                            </div>
                            <ul class="product-offer__list">
                                <li>Automated Publishing</li>
                                <li>Post Ideas Library</li>
                                <li>Graphics Editor</li>
                            </ul>
                            <p class="product-offer__price">Starting at <b class="product-offer--price-bold">$<span>9</span>/mo</b></p>
                        </div>
                    </div>
                    <div class="product-offer__item">
                        <div class="product-offer__block">
                            <img src="../img-new/new-landing/product_icons/monitoring-pink.svg" alt="Monitoring" class="product-offer__icon">
                            <div class="product-offer__title">
                                Social Monitoring <i class="product-offer__info-icon"></i>
                                <div class="tool-tip">Engage with your customers wherever they talk about you.</div>
                            </div>
                            <ul class="product-offer__list">
                                <li>Negative mentions</li>
                                <li>Customer support</li>
                            </ul>
                            <p class="product-offer__price">Starting at <b class="product-offer--price-bold">$<span>49</span>/mo</b></p>
                        </div>
                    </div>
                    <div class="product-offer__item">
                        <div class="product-offer__block">
                            <img src="../img-new/new-landing/product_icons/ads-blue.svg" alt="Ads" class="product-offer__icon">
                            <div class="product-offer__title">
                                Intelligent Ads <i class="product-offer__info-icon"></i>
                                <div class="tool-tip">Get more customers from Facebook and Instagram Ads!</div>
                            </div>
                            <ul class="product-offer__list">
                                <li>Paid Ads Proven Mechanics</li>
                                <li>Retargeting Automation</li>
                                <li>ROI Tracking</li>
                            </ul>
                            <p class="product-offer__price">Starting at <b class="product-offer--price-bold">$<span>49</span>/mo</b></p>
                        </div>
                    </div>
                </div>
                <div class="product-offer__item self-service">
                    <div class="product-offer__block product-offer__block--small ">
                        <p class="product-offer__title product-offer__title--big">Self-Service</p>
                        <p class="product-offer__explanation">Get ROI from Social using our Products.</p>
                        <p class="product-offer__descrpition">Ideal for small businesses. Get presence, engage with customers and sell more. </p>
                        <div class="product-offer__btns-container product-offer-selfservice">
                            <a href="//app.promorepublic.com#signup" class="main-btn">try it free</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-offer">
                <div class="product-offer__item">
                    <div class="product-offer__block">
                        <img src="../img-new/new-landing/product_icons/calendar_plus-green.svg" alt="Calendar" class="product-offer__icon">
                        <div class="product-offer__title">
                            Smart Posting as a Service <i class="product-offer__info-icon"></i>
                            <div class="tool-tip">Put your social media on autopilot with content creation services.</div>
                        </div>
                        <p class="product-offer__title-plus">+</p>
                        <ul class="product-offer__list">
                            <li>Automated Content Creation</li>
                            <li>Weekly Performance Reports</li>
                            <li>Custom Rich Media Creation</li>
                            <li>Dedicated Account Manager</li>
                        </ul>
                    </div>
                </div>
                <div class="product-offer__item">
                    <div class="product-offer__block">
                        <img src="../img-new/new-landing/product_icons/monitoring-pink.svg" alt="Monitoring" class="product-offer__icon">
                        <div class="product-offer__title">
                            Social Monitoring <i class="product-offer__info-icon"></i>
                            <div class="tool-tip">Engage with your customers wherever they talk about you.</div>
                        </div>
                        <p class="product-offer__title-plus">+</p>
                        <ul class="product-offer__list">
                            <li>Custom Setup</li>
                            <li>Monthly Report</li>
                            <li>Custom Channels</li>
                        </ul>
                    </div>
                </div>
                <div class="product-offer__item">
                    <div class="product-offer__block">
                        <img src="../img-new/new-landing/product_icons/ads-blue.svg" alt="Ads" class="product-offer__icon">
                        <div class="product-offer__title">
                            Intelligent Ads <i class="product-offer__info-icon"></i>
                            <div class="tool-tip">Get more customers from Facebook and Instagram Ads!</div>
                        </div>
                        <p class="product-offer__title-plus">+</p>
                        <ul class="product-offer__list">
                            <li>Pixel and Retargeting Setup</li>
                            <li>Offline Conversion Measurement</li>
                            <li>Social ROI Report</li>
                            <li>Facebook Ad Expert Consultation</li>
                        </ul>
                    </div>
                </div>
                <div class="product-offer__item full-service">
                    <div class="product-offer__block">
                        <p class="product-offer__title product-offer__title--big">Full Service</p>
                        <p class="product-offer__explanation">It’s when WE manage <br> all our products for you. </p>
                        <p class="product-offer__descrpition">Reach peak performance quickly without spending time or resources.</p>
                        <p class="product-offer__price">Starting at <b class="product-offer--price-bold">$<span>249</span>/mo</b></p>
                        <div class="product-offer__btns-container">
                            <a href="//get.promorepublic.com/fullservice-pricing-page/" class="main-btn">request a demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-tab pricing-tab--agency">
        <h1>Exceptional Social Media<br>Marketing for Agencies</h1>
        <p class="social-description">We integrate and partner with social media that matter to your business.</p>
        <div class="main-content__social-container">
            <img src="../img-new/socials/twitter-white.svg" alt="Twitter" class="main-content__social main-content-twitter">
            <img src="../img-new/socials/facebook-white.svg" alt="Facebook" class="main-content__social">
            <img src="../img-new/socials/instagram-white.svg" alt="Instagram" class="main-content__social main-content-instagram">
            <img src="../img-new/socials/pinterest-white.svg" alt="Pinterest" class="main-content__social">
            <img src="../img-new/socials/linkedin-white.svg" alt="LinkedIn" class="main-content__social">
        </div>
        <div class="product-offer-container">
            <div class="product-offer product-offer__agency-package product-offer--agency">
                <div class="product-offer__agency-container">
                    <div class="product-offer__agency-item">

                        <div class="product-offer__title">
                            <img src="../img-new/new-landing/product_icons/calendar_plus-green.svg" alt="Calendar" class="product-offer__icon">
                            Smart Posting + Collaboration
                            <i class="product-offer__info-icon"></i>
                            <div class="tool-tip">This unique workflow will transform the way you serve clients. As an agency partner, you will receive exclusive partner resources and training to help increase your revenue per client, implement ROI-oriented services, and improve client retention.</div>
                        </div>
                        <div class="product-offer__list-container">
                            <div class="product-offer__list-item">
                                <div class="product-offer__block">
                                    <ul class="product-offer__list">
                                        <li>Automated Publishing</li>
                                        <li>Post Ideas Library</li>
                                        <li>Graphics Editor</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-offer__list-item">
                                <div class="product-offer__block">
                                    <ul class="product-offer__list">
                                        <li class="new-feature">Collaboration and<br> Approval Flow</li>
                                        <li class="new-feature">30+ pages to connect</li>
                                        <!-- <li class="new-feature">Reporting to Client</li>
                                        <li class="new-feature">White Label Options</li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="product-offer__list-item">
                                <div class="product-offer__block">
                                    <ul class="product-offer__list">
                                        <li class="new-feature">Trainings and Webinars</li>
                                        <li class="new-feature">Agency Community</li>
                                        <li class="new-feature">Sales Materials</li>
                                    </ul>
                                    <p class="product-offer__price">Starting at <b class="product-offer--price-bold">$<span>99</span>/mo</b></p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="product-offer__agency-item">
                        <div class="product-offer__block">
                            <img src="../img-new/new-landing/product_icons/monitoring-pink.svg" alt="Monitoring" class="product-offer__icon">
                            <div class="product-offer__title">
                                Social Monitoring <i class="product-offer__info-icon"></i>
                                <div class="tool-tip">Engage with your customers wherever they talk about you.</div>
                            </div>
                            <ul class="product-offer__list">
                                <li>Negative mentions</li>
                                <li>Customer support</li>
                            </ul>
                            <p class="product-offer__price">Starting at <b class="product-offer--price-bold">$<span>49</span>/mo</b></p>
                        </div>
                    </div>
                    <div class="product-offer__agency-item">
                        <div class="product-offer__block">
                            <img src="../img-new/new-landing/product_icons/ads-blue.svg" alt="Ads" class="product-offer__icon">
                            <div class="product-offer__title">
                                Intelligent Ads <i class="product-offer__info-icon"></i>
                                <div class="tool-tip">Get more customers from Facebook and Instagram Ads!</div>
                            </div>
                            <ul class="product-offer__list">
                                <li>Paid Ads Proven Mechanics</li>
                                <li>Retargeting Automation</li>
                                <li>ROI Tracking</li>
                            </ul>
                            <p class="product-offer__price">Starting at <b class="product-offer--price-bold">$<span>49</span>/mo</b></p>
                        </div>
                    </div>
                </div>
                <div class="agency-package-block">
                    <p class="product-offer__title product-offer__title--big">Agency <br>Package</p>
                    <p class="product-offer__descrpition">Save time, serve more clients and grow revenues per client with robust collaboration, posting tools and reporting.</p>
                    <div class="product-offer__btns-container">
                        <a href="//app.promorepublic.com#signup" class="main-btn">try it free</a>
                        <a href="//calendly.com/promorepublic/promorepublic-control-center-for-agencies-i/10-17-2018" class="secondary-btn">Request Demo</a>
                    </div>
                </div>
            </div>
            <div class="product-offer product-offer__content-bundle product-offer--agency">
                <div class="product-offer__item">
                    <div class="product-offer__img-container"></div>
                </div>
                <div class="product-offer__item">
                    <div class="product-offer__block product-offer__block--big">
                        <ul class="product-offer__list" style="margin-top:0;">
                            <!-- <li>20 Unique Templates Tailored for Your Business</li> -->
                            <li>Personalized Visual Branding</li>
                            <li>All Types of Content (Promotional, Educational, Engaging, Motivation & Fun)</li>
                            <li>Ready-To-Go Templates (both editable and reusable)</li>
                            <li>Onboarding Tutorial to help Manage Your Social Media Marketing</li>
                        </ul>
                        <p class="product-offer__price product-offer--price-static">Starting at <b class="product-offer--price-bold">$<span>99</span></b></p>
                    </div>
                </div>
                <div class="product-offer__item">
                    <div class="product-offer__block">
                        <p class="product-offer__title product-offer__title--big">Content <br>Bundle</p>
                        <p class="product-offer__descrpition">20 Unique Templates Tailored for Your Business</p>
                        <div class="product-offer__btns-container">
                            <a href="javascript:void(0);" onclick="Intercom('showNewMessage', 'Hi! I am interested in taking advantage of the CONTENT BUNDLE deal. Please schedule a free demo for my Agency with the PromoRepublic Team.');" class="main-btn">Request Demo</a>
                            <!--                            <a href="//get.promorepublic.com/demo-pricing-page/" class="secondary-btn">learn more</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-offer product-offer__white-label product-offer--agency">
                <div class="product-offer__item">
                    <div class="product-offer__img-container"></div>
                </div>
                <div class="product-offer__item">
                    <div class="product-offer__block product-offer__block--small">
                        <ul class="product-offer__list">
                            <li>Use as your own software with personalized logo and domain name.</li>
                            <li>Get your own bundle of White-labeled Sales & Educational material</li>
                            <li>Offer social monitoring at your own prices & outsource your Ads Management</li>
                        </ul>
                        <!-- <p class="product-offer__descrpition">Get in touch to form the price together.</p> -->
                    </div>
                </div>
                <div class="product-offer__item">
                    <div class="product-offer__block">
                        <p class="product-offer__title product-offer__title--big">White Label<br> Solution</p>

                        <div class="product-offer__btns-container">
                            <a href="//calendly.com/promorepublic/promorepublic-control-center-for-agencies-i/10-17-2018" class="main-btn">Request Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="main-section__bg"></div>
</section>
<!--  <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">-->
<div class="pricing-box -fourthversion" style="min-height: 1900px; position: relative; padding-bottom: 50px">
    <style>
        .pricing-container {
            margin: 0 auto;
        }

        .pricing-widget {
            background-color: #ffffff;
            padding: 25px 0;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            font-size: 16px;
        }

        .btn-pricing-period-select {
            color: #008aba;
            border-color: #008aba !important;
        }

        .btn-pricing-period-select.active {
            color: #fff;
            border-color: #008aba;
            background-color: #008aba;
        }

        .btn-pricing-period-select:hover {
            color: #fff;
            background-color: #008aba;
        }

        .pricing-table-new {
            background-color: #ffffff;
        }

        .pricing-table-new > tbody > tr > td.pricing-group-title {
            font-size: 18px;
            text-transform: uppercase;
            border: 1px solid transparent;
            padding: 0;
            height: 35px;
            line-height: 55px;
        }

        .pricing-table-new > tbody > tr > td.pricing-scheme {
            height: 65px;
            line-height: 90px;
            width: 160px;
            font-weight: normal;
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
            border: none;
            padding: 0;
        }

        .pricing-table-new > tbody > tr > td.pricing-scheme1 {
            border: 1px solid #008aba;
            color: #008aba;
            position: relative;
        }

        .pricing-table-new > tbody > tr > td.pricing-scheme1:after {
            content: '';
            height: 1px;
            position: absolute;
            background-color: #008aba;
            top: -1px;
            left: 0;
            width: 100%;
        }

        .pricing-table-new > tbody > tr > td.pricing-scheme2 {
            border: 1px solid #00bde9;
            background-color: #00bde9;
            color: #ffffff;
        }

        .pricing-table-new > tbody > tr > td.pricing-scheme3 {
            border: 1px solid #008aba;
            background-color: #008aba;
            color: #ffffff;
        }

        .pricing-table-new > tbody > tr > td.pricing-scheme4 {
            border: 1px solid #353f55;
            background-color: #353f55;
            color: #ffffff;
        }

        .pricing-table-new > tbody > tr > td.pricing-scheme5 {
            border: 1px solid #1e232e;
            background-color: #1e232e;
            color: #ffffff;
        }

        .pricing-table-new > tbody > tr > td {
            text-align: center;
            border: 1px solid #d9d9d9;
            padding: 15px 25px;
            /* position: relative; */
        }

        .pricing-table-new > tbody > tr > td.pricing-desc-column {
            text-align: right;
            color: #585858;
        }

        .pricing-table-new > thead > tr > th.pricing-separator-column,
        .pricing-table-new > tbody > tr > td.pricing-separator-column {
            width: 25px;
            border-top: none;
            border-bottom: none;
            padding: 0;
        }

        .pricing-table-new > tbody > tr > td.available {
            color: #4ab868;
            font-size: 18px;
            line-height: 18px;
        }

        .pricing-table-new > tbody > tr > td.available.-not {
            color: #000;
        }

        .pricing-table-new > tbody > tr > td.pricing-price {
            font-size: 18px;
            color: #000000;
        }

        .pricing-table-new .pricing-price-num {
            font-size: 35px;
            font-weight: bold;
        }

        .pricing-muted {
            color: #9a9a9a;
        }

        .sn1 .social-title {
            color: #3b5998;
        }

        .sn3 .social-title {
            color: #4099ff;
        }

        .sn8 .social-title, .sn9 .social-title {
            color: #0077b5;
        }

        .pricing-table-new .pricing-best-value-marker {
            position: absolute;
            background-color: #f83;
            color: #fff;
            top: -14px;
            left: 0;
            line-height: 28px;
            font-size: 14px;
            max-width: 100%;
            border-radius: 16px;
            text-transform: uppercase;
        }

        .pricing-table-new .pricing-best-value-marker::before {
            font: normal normal normal 14px/1 'PromoRepublic';
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            content: "\e924";
            position: absolute;
            background-color: #f83;
            top: -12px;
            left: 0;
            width: 54px;
            height: 54px;
            line-height: 54px;
            border-radius: 100%;
            z-index: 100;
            font-size: 32px;
            text-align: center;
            transform: rotate(45deg);
        }

        .pricing-table-new .pricing-best-value-marker > p {
            text-align: left;
            white-space: nowrap;
            padding-left: 60px;
            padding-right: 18px;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        #loader {
            position: absolute;
            left: 50%;
            top: 40%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -150px 0 0 -50px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #adadad;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        #idIframe {
            display: none;
        }

        @media (max-width: 480px) {
            .iframe-col-xs {
                width: 100%;
                min-height: 3300px !important;
            }
        }

        @media (min-width: 481px) {
            .iframe-col-sm-11 {
                width: 90%;
            }
        }

        @media (min-width: 768px) {
            .iframe-col-md-12 {
                width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .iframe-col-lg-offset-1 {
                margin-left: 8.33333333%;
            }

            .iframe-col-lg-10 {
                width: 83.33333333%;
            }
        }

    </style>


    <section class="clients -fourthversion">
        <div class="container">
            <p class="fourthversion-section-title">Some love from our clients</p>
            <p class="fourthversion-section-subtitle">and 11,500 other happy businesses</p>
            <div class="float-columns-container ">
                <div class="float-column">
                    <div class="float-column__text-box">
                        <span class="clients__avatar"></span>
                        <p class="float-column__text"><b>“We grew our sales 30% from social!</b><br>I use PromoRepublic a portion of the time to schedule and design posts. Sometimes we just pull a great quote from
                            their Post Ideas section that I know will speak to our base. Often, though, it’s to do a straight-up product promotion.”</p>
                        <p class="clients__name">Stacy Woodward</p>
                        <p class="clients__proffesion">Owner of <a href="/en/ss-wild-and-roaming.php" class="clients__work-link">Wild & Roaming</a></p>
                    </div>
                </div>
                <div class="float-column">
                    <div class="float-column__text-box">
                        <span class="clients__avatar"></span>
                        <p class="float-column__text"><b>“We grew our following from 300 relevant fans to over 15,000 in under months!</b> Before discovering PromoRepublic, we were spending 10 or 15 minutes per
                            post - and that was just for basic visual content - using Canva for design and Hootsuite for scheduling finished posts. Once we starting working with PromoRepublic, we were suddenly
                            spending no more than 5 minutes on it.”</p>
                        <p class="clients__name">Carl Dorvil</p>
                        <p class="clients__proffesion">CEO at <a href="/en/ss-agency.php" class="clients__work-link">GEX Management</a></p>
                    </div>
                </div>
                <div class="float-column">
                    <div class="float-column__text-box">
                        <span class="clients__avatar"></span>
                        <p class="float-column__text"><b>“We spent 1 hour a week on social media with PromoRepublic and increased our post engagement to 1356 likes and comments per post on average!</b> The more we
                            posted, the more the neighborhood seemed to appreciate that we were active and not just sitting back and saying, ‘Come in and spend.’”</p>
                        <p class="clients__name">Brian Fairbanks</p>
                        <p class="clients__proffesion">Social Media Strategist at <a href="/en/ss-restaraunt.php" class="clients__work-link">The Big Cheezy</a></p>
                    </div>
                </div>
            </div>
            <div class="clients__btn-container"><a class="main-btn main-btn_white" href="/en/success-stories.php">see more stories</a></div>
        </div>
    </section>

    <div class="faq -fourthversion">
        <div class="container">
            <div class="faq__title section-title">
                FAQs
            </div>

            <div class="faq-items">
                <div class="faq-item">
                    <div class="faq-item__title">
                        What features does the trial include?
                    </div>
                    <div class="faq-item__text">
                        The trial is for our Starter package, which includes our content calendar, graphics editor and access to thousands of templates. This enables you to get a feel for our platform and
                        see how easy it is to create, schedule, and post content to your connected social media channels.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item__title">
                        What if I pick the wrong plan?
                    </div>
                    <div class="faq-item__text">
                        No problem! If you pick the wrong plan and want to change reach out to a member of our Customer Success team at
                        <a href="mailto:support@promorepublic.com">support@promorepublic.com</a> and they will assist you in finding the perfect plan for your needs.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item__title">
                        Are there contracts or commitments?
                    </div>
                    <div class="faq-item__text">
                        Nope. After your 14-day free trial, you’ll be asked to pick a plan and enter your payment info. This is billed monthly and you can cancel at any time. If you cancel before the end of
                        a billing period, you’ll retain access until that billing period is over.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item__title">
                        What are my payment options?
                    </div>
                    <div class="faq-item__text">
                        Online payment methods include major credit cards and Paypal. We also offer a 20% discount for annual payments.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item__title">
                        What is happening with previous packages?
                    </div>
                    <div class="faq-item__text">
                        If you are already using PromoRepublic in any package, monthly or annual subscription, you can continue to use it until cancellation, after that you will only be able to choose new
                        packages. All new features like Pinterest, Rich media content types, Retargeting and Analytics will only be in new packages. You can read additional information about our new
                        platform
                        <a href="https://promorepublic.com/en/blog/welcome-new-version-promorepublic/" target="_blank">here</a><!-- and review your old package features here-->.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item__title">
                        If I am AppSumo customer, how I can get new packages?
                    </div>
                    <div class="faq-item__text">
                        If you purchased PromoRepublic with <a href="https://appsumo.com/promorepublic-plan/" target="_blank">AppSumo deal</a> or
                        <a href="https://briefcasehq.com/" target="_blank">Briefcase</a> you can continue using it with the same features (including 30 profiles and access to Post ideas library). We are
                        continuing to evolve our DIY tool functionality which is at the core of our new platform, so you will be able to take advantage of these updates including the Time Slots, video
                        uploading, and post recycling. If you are interested in moving from DIY content creation and scheduling to automated campaign based platform, you will have to sign up separately. For
                        further information please check out our
                        <a href="/">website</a> and review your old package features in profile settings.
                    </div>
                </div>
            </div>

            <div class="faq__bottom">
                <div class="faq-item">
                    <div class="faq-item__title">
                        Can't find the answer you’re looking for?
                    </div>
                    <div class="faq-item__text">
                        Feel free to <a href="mailto:support@promorepublic.com">contact us</a> for more information or visit our
                        <a href="//help.promorepublic.com/">support center</a>.<br/>
                        We’re here to help!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  document.domain = 'promorepublic.com';

  function showIframe() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("idIframe").style.display = "block";
    //document.getElementById("prBtnWrap").style.position = "static";
    iframeLoaded();
  }

  function iframeLoaded() {
    var iFrameID = document.getElementById('idIframe');
    if (iFrameID) {
      // here you can make the height, I delete it first, then I make it again
      iFrameID.height = "";
      iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
    }
  }

</script>

<?php get_footer(); ?>

