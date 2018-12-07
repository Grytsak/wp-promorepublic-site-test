<?php get_header(); ?>

<style>

    /* TODO: rename btn class */
    .btn-hot-dog {
        border-radius: 50px;
    }

    /* ======== */

    h2 {
        font-size: 40px;
        line-height: 50px;
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: 900;
    }

    .main-section.-thirdversion {
        padding-bottom: 100px;
        position: relative;
        background: #fff;
    }

    .main-section.-thirdversion:before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 50%;
        height: 100%;
        right: 0;
        z-index: 0;
        background: url('../img-new/main-new/top1.jpg') #fff no-repeat left center;
        background-size: auto 80%;
    }

    @media screen and (max-width: 991px) {
        .main-section.-thirdversion:before {
            display: none;
        }
    }

    .main-section.-thirdversion .btn-hot-dog.-main {
        height: 45px;
        margin: 0;
    }

    .main-content {
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .main-content h1 {
        font-size: 38px;
        line-height: 46px;
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: 900;
        text-align: left;
        margin-bottom: 42px;
    }

    .main-content h1 span {
        font-style: italic;
        font-family: 'Lato-Bold', Arial, sans-serif;
        font-weight: 600;
        font-size: 37px;
    }

    .main-content__left {
        max-width: 60%;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: auto;
    }

    .main-content p:nth-child(2) {
        margin-bottom: 42px;
    }

    .main-content__left p {
        font-size: 16px;
        line-height: 24px;
        text-align: left;
    }

    .main-content__button-wrap {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .main-content__social {
        display: block;
        width: 100%;
        margin-top: 42px;
        font-size: 0;
    }

    .main-content__social img {
        width: 24px;
        display: inline-block;
        margin-right: 18px;
    }

    .main-content__button-wrap span {
        margin: 0 10px;
    }

    .main-content__button-wrap .request-demo {
        color: #fd6f29;
    }

    .main-content__right {
        min-height: 420px;
        min-width: 740px;
        position: relative;
        -webkit-background-size: cover;
        background-size: cover;
        margin-left: auto;
    }

    .main-content__video {
        width: 535px;
        position: absolute;
        top: 27px;
        right: 88px;
    }

    .social-media {
        height: 250px;
        background: #fd6f29;
        padding-top: 60px;
    }

    .social-media__wrap {
        text-align: center;
        margin-top: 30px;
    }

    .social-media__icon {
        width: 70px;
        height: 70px;
        display: inline-block;
        margin: 0 8px;
    }

    .social-media__facebook {
        background-image: url('../img-new/main-icons/facebook.svg');
    }

    .social-media__instagram {
        background-image: url('../img-new/main-icons/instagram.svg');
    }

    .social-media__twitter {
        background-image: url('../img-new/main-icons/twitter.svg');
    }

    .social-media__linkedin {
        background-image: url('../img-new/main-icons/linkedin.svg');
    }

    .numbers__number {
        color: #ff8833;
    }

    .templates.-main.-thirdversion {
        background: #f2f2f2;
    }

    .main-templates__h2 {
        color: #3b3b3b;
    }

    .template-grid__btn {
        color: #3b3b3b;
        border: 1px solid #3b3b3b;
    }

    .template-grid__btn:hover {
        color: #3b3b3b;
    }

    .template-grid__btn.-active {
        /*color: #ff8833;*/
        /*color: #f07005;
        border: 1px solid #ff8833;
        box-shadow: inset 0px 0px 10px 0px rgba(255,155,0,.4);*/
        color: #fff;
        background: #fd6f29;
        border: 1px solid #fd6f29;
    }

    .template-grid__more {
        -ms-flex-item-align: center;
        -webkit-align-self: center;
        align-self: center;
        color: #3b3b3b;
        font-family: 'Lato-Regular', Arial, sans-serif;
        font-size: 14px;
        line-height: 30px;
        opacity: .5;
        border: 1px solid transparent;
    }

    .template-grid__layout {
        max-width: 1145px;
    }

    .template-grid__item {
        max-width: 370px;
    }

    .template-grid__img {
        width: 370px;
        height: 310px;
    }

    .tools-section.-thirdversion {
        height: auto;
        background: #fff;
    }

    .tools-section .button-wrap {
        margin: 60px 0;
    }

    .tools.-thirdversion {
        overflow: hidden;
    }

    .tools-section__wrap {
        width: 100%;
        position: relative;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .tools-section__text {
        padding-left: 40px;
    }

    .tools-section__img {
        position: relative;
        top: 0;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
        width: 55%;
    }

    .tools-section__img:after {
        content: '';
        display: block;
        width: 100%;
        padding-bottom: 80%;
    }

    .tools-section__img.-first {
        background-image: url('../img-new/main-new/features/1.jpg');
        left: -5px;
    }

    .tools-section__img.-second {
        background-image: url('../img-new/main-new/features/2.jpg');
        right: -57px;
    }

    .tools-section__img.-third {
        background-image: url('../img-new/main-new/features/3.jpg');
        left: -20px;
    }

    .tools-section__img.-fourth {
        background-image: url('../img-new/main-new/features/4.jpg');
        right: -72px;
    }

    .tools-section__img.-fifth {
        background-image: url('../img-new/main-new/features/5.jpg');
    }

    .tools__h3 {
        color: #3b3b3b;
        font-size: 72px;
        line-height: 50px;
        margin-bottom: 30px;
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: 900;
    }

    .tools__subtitle {
        color: #5c5c5c;
        font-size: 22px;
        margin-bottom: 15px;
    }

    .tools-section__txt {
        font-size: 16px;
        color: #3b3b3b;
        line-height: 24px;
        font-weight: 200;
        font-family: 'Lato-Light', Arial, sans-serif;
        margin-bottom: 20px;
    }

    .tools-section__text {
        width: 47%;
    }

    .tools-section__text.-first,
    .tools-section__text.-third,
    .tools-section__text.-fifth {
        margin-left: auto;
    }

    .tools-section__text.-third {
        padding-right: 80px;
    }

    .tools__link {
        font-size: 16px;
        line-height: 24px;
        color: #fd6f29;
    }

    .pr-features {
        background: #f2f2f2;
        padding: 80px 0;
    }

    .pr-features__h2 {
        color: #3b3b3b;
    }

    .pr-features__grid {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-top: 85px;
        margin-bottom: -90px;
    }

    .pr-features__item {
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 30%;
        margin-bottom: 90px;
    }

    .pr-features__item::before {
        content: "";
        width: 50px;
        height: 50px;
        display: inline-block;
        background-size: cover;
        float: left;
        margin-right: 15px;
    }

    .pr-features__title,
    .pr-features__text {
        display: block;
        overflow: hidden;
        color: #3b3b3b;
    }

    .pr-features__title {
        font-size: 22px;
    }

    .pr-features__text {
        font-size: 16px;
        font-family: 'Lato-Light', Arial, sans-serif;
        font-weight: 200;
        padding: 30px 50px 0 0;
    }

    .pr-features__item.-library::before {
        background: url('../img-new/features/library.svg') no-repeat;
    }

    .pr-features__item.-calendar::before {
        background: url('../img-new/features/calendar.svg') no-repeat;
    }

    .pr-features__item.-timing::before {
        background: url('../img-new/features/timing.svg') no-repeat;
    }

    .pr-features__item.-graphic-editor::before {
        background: url('../img-new/features/graphic-editor.svg') no-repeat;
    }

    .pr-features__item.-photostocks::before {
        background: url('../img-new/features/photostocks.svg') no-repeat;
    }

    .pr-features__item.-mobile::before {
        background: url('../img-new/features/mobile.svg') no-repeat;
    }

    .pr-features__item.-scheduling::before {
        background: url('../img-new/features/scheduling.svg') no-repeat;
    }

    .pr-features__item.-instagram::before {
        background: url('../img-new/features/instagram.svg') no-repeat;
    }

    .pr-features__item.-collab::before {
        background: url('../img-new/features/collab.svg') no-repeat;
    }

    .pr-integrated {
        background: #f2f2f2;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .pr-integrated__wrap {
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .pr-integrated__h2 {
        color: #3b3b3b;
        margin-bottom: 60px;
    }

    .pr-integrated__link {
        height: 65px;
        display: block;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }

    .pr-integrated__link.-hootsuite {
        background-image: url('../img-new/integrations/hootsuite.png');
        width: 185px;
    }

    .pr-integrated__link.-yext {
        background-image: url('../img-new/integrations/yext.png');
        width: 100px;
    }

    .pr-integrated__link.-hubspot {
        background-image: url('../img-new/integrations/hubspot.png');
        width: 160px;
    }

    .pr-integrated__link.-buffer {
        background-image: url('../img-new/integrations/buffer.png');
        width: 160px;
    }

    .pr-integrated__link.-shopify {
        background-image: url('../img-new/integrations/shopify.svg');
        width: 160px;
    }

    .pr-integrated__link.-magento {
        background-image: url('../img-new/integrations/magento.svg');
        width: 160px;
    }

    .pr-pricing {
        padding: 80px 0;
    }

    .pr-pricing__h2 {
        color: #3b3b3b;
        margin-bottom: 30px;
        font-weight: 900;
    }

    .pr-pricing__wrap {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        margin-top: 60px;
        margin-bottom: 75px;
    }

    .pr-pricing__title {
        width: 100%;
        -ms-flex-item-align: start;
        -webkit-align-self: flex-start;
        align-self: flex-start;
        font-size: 30px;
        line-height: 33px;
        letter-spacing: 2px;
        color: #fff;
        text-align: center;
        padding: 30px 0px;
        margin-bottom: 25px;
    }

    .pr-pricing__title.-premium {
        background: #fec200;
    }

    .pr-pricing__title.-pro {
        background: #fead00;
    }

    .pr-pricing__title.-superior {
        background: #fe8f00;
    }

    .pr-pricing__title.-deluxe {
        background: #f65923;
    }

    .pr-pricing__title.-trial {
        font-family: 'Lato-Light', Arial, sans-serif;
        font-weight: 200;
        color: #3b3b3b;
    }

    .pr-pricing__soc-list {
        text-align: center;
        width: 100%;
        margin-bottom: 15px;
    }

    .pr-pricing__soc-list .pr-pricing__soc-list__ico {
        margin: 0 3px;
        font-size: 24px;
        width: 20px;
    }

    .pr-pricing__text__top {
        text-align: center;
        font-size: 16px;
        font-family: 'Lato-Light', Arial, sans-serif;
        font-weight: 200;
        line-height: 24px;
        padding: 0 20px;
    }

    .pr-pricing__text {
        text-align: center;
        font-size: 16px;
        font-family: 'Lato-Light', Arial, sans-serif;
        font-weight: 200;
        line-height: 24px;
        padding: 20px;
        height: 250px;
    }

    .pr-pricing__trial-text {
        font-family: 'Lato-Regular', Arial, sans-serif;
        font-weight: 400;
    }

    .pr-pricing__price {
        width: 100%;
        -ms-flex-item-align: end;
        -webkit-align-self: flex-end;
        align-self: flex-end;
        text-align: center;
        font-size: 26px;
        line-height: 79px;
        color: #3b3b3b;
        margin-top: 45px;
    }

    .pr-pricing__number {
        font-size: 45px;
        font-family: 'Lato-Light', Arial, sans-serif;
        font-weight: 200;
    }

    .pr-pricing__link {
        width: 100%;
        display: block;
        -ms-flex-item-align: end;
        -webkit-align-self: flex-end;
        align-self: flex-end;
        text-align: center;
        font-size: 15px;
        line-height: 24px;
        color: #fd6f29;
        text-decoration: underline;
    }

    .pr-pricing__card {
        max-width: 18%;
        /* display: -webkit-flex;
        display: -ms-flexbox;
        display: flex; */
        display: block;
        align-items: flex-start;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background: #fff;
        box-shadow: 0px 0px 20px 0px rgba(59, 59, 59, .1);
        padding-bottom: 30px;
        border-radius: 10px;
        overflow: hidden;
    }

    .pr-pricing__card.-main {
        position: relative;
        z-index: 100;
        /* border-radius: 13px; */
        /* border: #fe8f00 solid 3px; */
    }

    .pr-pricing__card.-main::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 10px;
        border: solid 3px #fe8f00;
        z-index: -1;
    }

    .pr-pricing__btn {
    }

    .pr-pricing__mobile-wrap {
        display: none;
    }

    .pr-pricing__btn.-mobile {
        display: none;
    }

    .blog-post {
        background: #f2f2f2;
        padding: 100px 0 80px;
    }

    .blog-post__h2 {
        color: #3b3b3b;
    }

    .blog-post__subtitle {
        font-size: 16px;
        font-family: 'Lato-Light', Arial, sans-serif;
        font-weight: 200;
        line-height: 24px;
        text-align: center;
        margin-top: 30px;
    }

    .blog-post__wrap {
        font-size: 0;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        margin: 60px 0;
    }

    .blog-post__post {
        max-width: 30%;
        /*display: inline-block;*/
    }

    .blog-post__img-link {
        display: block;
        margin-bottom: 30px;
    }

    .blog-post__img {
        width: 100%;
        height: auto;
    }

    .blog-post__title {
        font-size: 20px;
        line-height: 28px;
        font-family: 'Lato-Regular', Arial, sans-serif;
        font-weight: 400;
        color: #3b3b3b;
        text-align: center;
        display: block;
        padding: 0 20px;
    }

    .comming-soon.cta.-thirdversion {
        background: #fff;
    }

    .pr-help {
        background: #f2f2f2;
        padding: 80px 0 100px;
    }

    .pr-help__wrap {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .pr-help__col {
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 50%;
    }

    .pr-help__h2 {
        color: #3b3b3b;
        text-align: left;
        font-size: 40px;
        line-height: 48px;
        margin-bottom: 35px;
    }

    .pr-help__left,
    .pr-help__right {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .pr-help__left {
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .pr-help__right {
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between;
    }

    .pr-help__title {
        font-size: 22px;
        color: #3b3b3b;
        margin-bottom: 30px;
    }

    .pr-help__text {
        font-size: 16px;
        line-height: 24px;
        color: #3b3b3b;
        font-family: 'Lato-Light', Arial, sans-serif;
        font-weight: 200;
    }

    .pr-help__link {
        font-size: 22px;
        color: #fd6f29;
    }

    .pr-help__card {
        max-width: 46%;
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
        box-shadow: 0px 0px 20px 0px rgba(59, 59, 59, .1);
        background: #fff;
        padding: 25px;
        border-radius: 10px;
    }

    .pr-help__webinars {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .pr-help__title.-smm,
    .pr-help__title.-webinars {
        position: relative;
    }

    .pr-help__title.-webinars {
        width: 100%;
    }

    .pr-help__title.-smm::after,
    .pr-help__title.-webinars::after {
        content: "";
        width: 35px;
        height: 35px;
        display: inline-block;
        position: absolute;
        top: 0;
        right: 0;
    }

    .pr-help__title.-smm::after {
        background: url("../img-new/main-icons/arrow-smm.svg") no-repeat;
    }

    .pr-help__title.-webinars::after {
        background: url("../img-new/main-icons/arrow-webinar.svg") no-repeat;
    }

    .pr-help__visit-help {
        -ms-flex-item-align: end;
        -webkit-align-self: flex-end;
        align-self: flex-end;
    }

    @media screen and (max-width: 1199px) {
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        h2 {
            font-size: 30px;
            line-height: 38px;
        }

        .main-content h1 {
            /*font-size: 26px;
            line-height: 34px;*/
        }

        .main-content h1 span {
            /*font-size: 26px;*/
        }

        .main-content__left p {
            /*font-size: 14px;
            line-height: 20px;*/
        }

        .main-content__right {
            /*min-height: 290px;
            min-width: 540px;*/
            min-height: 305px;
            min-width: 570px;
        }

        .main-content__video {
            /*width: 365px;*/
            width: 395px;
            /*top: 25px;*/
            top: 22px;
            right: 87px;
        }

        .social-media {
            height: 230px;
            padding-top: 50px;
        }

        .social-media__icon {
            width: 60px;
            height: 60px;
        }

        .numbers.-thirdversion {
            height: 220px;
            min-height: 220px;
        }

        .numbers__number {
            font-size: 40px;
            line-height: 48px;
            margin-bottom: 15px;
        }

        .numbers__text {
            font-size: 18px;
            line-height: 24px;
        }

        .template-grid__nav {
            max-width: 500px;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin: 0 auto 40px;
        }

        .template-grid__btn:first-child {
            margin-bottom: 10px;
        }

        .template-grid__layout {
            max-width: 730px;
        }

        .template-grid__item {
            max-width: 233px;
        }

        .template-grid__img {
            width: 233px;
            height: 195px;
        }

        .tools-section.-thirdversion {
            height: auto;
            padding-top: 60px;
            padding-bottom: 80px;
        }

        .tools.-thirdversion {
            margin-top: 20px;
        }

        .tools__h3 {
            font-size: 28px;
            line-height: 34px;
        }

        .tools__subtitle {
            font-size: 20px;
            line-height: 26px;
        }

        .tools-section__txt {
            font-size: 14px;
            line-height: 20px;
        }

        .tools__link {
            font-size: 14px;
            line-height: 22px;
        }

        .tools-section__img {
            position: static;
            background-size: contain;
        }

        .tools-section__text {
            flex: 1 0 auto;
            max-width: 40%;
        }

        .tools-section__wrap.-second {
            padding-left: 80px;
        }

        .tools-section__wrap.-fourth {
            padding-left: 80px;
        }

        .pr-features {
            padding: 60px 0 20px;
        }

        .pr-features__grid {
            margin-top: 60px;
            margin-bottom: -60px;
        }

        .pr-features__item {
            margin-bottom: 60px;
        }

        .pr-features__title {
            font-size: 18px;
        }

        .pr-features__text {
            font-size: 14px;
            line-height: 20px;
        }

        .pr-integrated {
            height: auto;
            padding-top: 60px;
            padding-bottom: 80px;
        }

        .pr-integrated__h2 {
            margin-bottom: 40px;
        }

        .pr-integrated__wrap {
            -ms-flex-pack: distribute;
            -webkit-justify-content: space-around;
            justify-content: space-around;
        }

        .pr-integrated__link {
            height: 40px;
        }

        .pr-integrated__link.-hootsuite {
            width: 165px;
        }

        .pr-integrated__link.-yext {
            width: 90px;
        }

        .pr-integrated__link.-hubspot {
            width: 140px;
        }

        .pr-integrated__link.-buffer {
            width: 155px;
        }

        .pr-pricing {
            padding: 60px 0 80px;
        }

        .pr-pricing__h2 {
            margin-bottom: 20px;
        }

        .pr-pricing__wrap {
            margin-top: 40px;
            margin-bottom: 60px;
        }

        .pr-pricing__title {
            font-size: 30px;
            line-height: 38px;
        }

        .pr-pricing__text {
            font-size: 14px;
        }

        .pr-pricing__text__top {
            width: 100%;
            text-align: center;
        }

        .pr-pricing__link {
            font-size: 14px;
            line-height: 22px;
        }

        .pr-pricing__price {
            font-size: 24px;
            line-height: 60px;
            margin-top: 30px;
        }

        .pr-pricing__number {
            font-size: 55px;
        }

        .pr-pricing__btn {
        }

        .customers.-thirdversion {
            min-height: 500px;
            height: 500px;
        }

        .customers__title {
            margin-top: 60px;
        }

        .say-slider {
            margin-top: 30px;
        }

        .say-slider__img {
            width: 90px;
            height: 90px;
        }

        .say-slider__text {
            font-size: 14px;
            line-height: 24px;
        }

        .say-slider__author {
            font-size: 14px;
            line-height: 30px;
        }

        .say-slider__job {
            font-size: 12px;
            line-height: 20px;
        }

        .say-slider__chevron .icon-chevron::before {
            width: auto;
            height: auto;
            font-size: 2em;
        }

        .say-slider__chevron {
            height: auto;
        }

        .say-slider__chevron-wrap.-right {
            right: 15px;
        }

        .featured {
            height: 170px;
        }

        .featured__wrap {
            -ms-flex-pack: distribute;
            -webkit-justify-content: space-around;
            justify-content: space-around;
        }

        .featured_logo_block.tnw {
            width: 100px;
            height: 25px;
        }

        .featured_logo_block.smt {
            width: 200px;
            height: 40px;
        }

        .featured_logo_block.cofound {
            width: 70px;
            height: 83px;
        }

        .featured_logo_block.chief {
            width: 200px;
            height: 38px;
        }

        .featured_logo_block.arctic {
            width: 200px;
            height: 32px;
        }

        .comming-soon.cta {
            min-height: 380px;
            height: 380px;
        }

        .cta__title.-thirdversion {
            margin-top: 60px;
        }

        .comming-soon.cta .cta-wrap {
            right: 0;
            left: 0;
        }

        .cta__text {
            font-size: 18px;
            line-height: 26px;
            margin-top: 20px;
        }

    }

    @media screen and (max-width: 1023px) {
        .main-content h1 {
            font-size: 26px;
            line-height: 34px;
        }

        .main-content h1 span {
            font-size: 26px;
        }

        .main-content__left p {
            font-size: 14px;
            line-height: 20px;
        }
    }

    @media screen and (max-width: 991px) {
        .main-content__social {
            text-align: center;
        }

        .main-content__left {
            margin-right: 0;
        }

        h2 {
            font-size: 22px;
            line-height: 30px;
        }

        /* START HEADER */
        .main-header {
            min-height: 50px;
            height: 50px;
            margin-bottom: 60px;
        }

        .main-header__logo {
            width: 148px;
            height: 50px;
        }

        .main-header__wrap {
            /* width: 570px; */
        }

        .main-nav {
            width: auto;
            margin-right: 0;
        }

        .main-nav__item {
            padding-right: 40px;
        }

        .main-nav__item a {
            letter-spacing: 1px;
            font-size: 14px;
        }

        .main-header__controls {
            /* margin-left: 20px; */
        }

        .btn-rect {
            width: 90px;
            height: 35px;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .btn-rect.-demo {
            width: 110px;
            margin-left: 15px;
        }

        /* END HEADER */
        .main-section.-thirdversion {
            background: #fff;
        }

        .main-content {
            width: 100%;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .main-content h1 {
            font-size: 26px;
            line-height: 34px;
            text-align: center;
            padding: 0;
        }

        .main-content h1 br {
            display: none;
        }

        .main-content h1 span {
            font-size: 26px;
        }

        .main-content__left {
            max-width: 100%;
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .main-content__left p {
            text-align: center;
            font-size: 14px;
            line-height: 20px;
        }

        .main-content__button-wrap {
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .main-content__button-wrap span {
            font-size: 14px;
            margin: 10px 10px;
        }

        .main-content__button-wrap .request-demo {
            font-size: 14px;
        }

        .main-content__right {
            background: url('../img-new/screen_768_320.jpg') no-repeat;
            background-position: center;
            /*background-size: cover;*/
            background-size: contain;
            /*min-width: 332px;*/
            min-width: auto;
            /*min-height: 290px;*/
            min-height: 330px;
            position: absolute;
            bottom: 0;
            right: 15px;
            left: 15px;
            margin-right: auto;
        }

        .main-content__video {
            display: none;
        }

        .social-media {
            height: 185px;
            padding-top: 35px;
        }

        .social-media__icon {
            width: 50px;
            height: 50px;
        }

        .numbers, .numbers.-thirdversion {
            min-height: 170px;
            height: 170px;

        }

        .numbers__number {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .numbers__text {
            font-size: 12px;
            line-height: 18px;
        }

        .template-grid__item {
            max-width: 233px;
        }

        .template-grid__item a {
            display: block;
        }

        .template-grid__img {
            width: 233px;
            height: 195px;
        }

        .tools-section.-thirdversion {
            height: auto;
            padding-top: 60px;
            padding-bottom: 0;
        }

        .tools.-thirdversion {
            margin-top: 20px;
        }

        .tools-section__wrap {
            height: auto;
        }

        .tools-section__wrap + .tools-section__wrap {
            margin-top: 20px;
        }

        .tools-section__wrap.-first {

            padding-right: 0;
        }

        .tools-section__img {
            width: 100%;
            max-width: 400px;
            height: auto;
            min-height: 225px;
            position: static;
            flex: 1 1 auto;
        }

        .tools-section__text {
            flex: 1 1 auto;
        }

        .tools__h3 {
            font-size: 16px;
            line-height: 22px;
            margin-bottom: 10px;
        }

        .tools__subtitle {
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 10px;
        }

        .tools-section__txt {
            font-size: 12px;
            line-height: 18px;
            margin-bottom: 10px;
        }

        .tools__link {
            font-size: 12px;
            line-height: 22px;
        }

        .tools-section__wrap.-second {
            padding-left: 50px;
        }

        .tools-section__text.-third {
            padding-right: 0;
        }

        .tools-section__wrap.-fourth {
            padding-left: 50px;
        }

        .pr-features {
            padding: 60px 0;
        }

        .pr-features__item {
            width: 50%;
            max-width: 50%;
            margin-bottom: 40px;
        }

        .pr-features__title {
            font-size: 16px;
        }

        .pr-features__text {
            font-size: 14px;
            line-height: 20px;
            padding: 15px 15px 0 0;
        }

        .pr-integrated {
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            padding-top: 0;
        }

        .pr-integrated__h2 {
            margin-bottom: 30px;
        }

        .pr-integrated__wrap {
            padding: 0 30px;
        }

        .pr-integrated__link {
            height: 35px;
        }

        .pr-integrated__link.-hootsuite {
            width: 160px;
        }

        .pr-integrated__link.-yext {
            width: 76px;
        }

        .pr-integrated__link.-hubspot {
            width: 120px;
        }

        .pr-integrated__link.-buffer {
            width: 140px;
        }

        .pr-pricing {
            padding: 40px 0;
        }

        .pr-pricing__h2 {
            margin-bottom: 20px;
        }

        .pr-pricing__text {
            font-size: 12px;
            line-height: 16px;
        }

        .pr-pricing__wrap {
            display: none;
        }

        .pr-pricing__mobile-wrap {
            display: block;
            margin: 35px auto;
        }

        .pr-pricing__btn {
            display: none;
        }

        .pr-pricing__btn.-mobile {
            display: flex;
            width: 200px;
        }

        .customers.-thirdversion {
            min-height: 415px;
            height: 415px;
        }

        .customers__title {
            margin-top: 40px;
        }

        .say-slider__img {
            width: 70px;
            height: 70px;
        }

        .say-slider__text {
            font-size: 12px;
            line-height: 18px;
        }

        .say-slider__author {
            font-size: 12px;
        }

        .say-slider__job {
            font-size: 12px;
        }

        .say-slider__chevron-wrap.-right {
            right: 15px;
        }

        .say-slider__chevron {
            width: auto;
            height: auto;
        }

        .say-slider__chevron .icon-chevron:before {
            width: auto;
            height: auto;
            font-size: 1em;
        }

        .featured {
            height: 100px;
        }

        .featured__link {
            min-width: auto;
        }

        .featured_logo_block.tnw {
            width: 73px;
            height: 17px;
        }

        .featured_logo_block.smt {
            width: 136px;
            height: 25px;
        }

        .featured_logo_block.cofound {
            width: 50px;
            height: 60px;
        }

        .featured_logo_block.chief {
            width: 129px;
            height: 27px;
        }

        .featured_logo_block.arctic {
            width: 126px;
            height: 19px;
        }

        .comming-soon.cta {
            min-height: 300px;
            height: 300px;
        }

        .cta__title.-thirdversion {
            max-width: 200px;
            margin-top: 35px;
            font-size: 22px;
            line-height: 30px;
            margin-top: 35px;
            margin-right: auto;
            margin-left: auto;
        }

        .comming-soon.cta .cta-wrap {
            right: 0;
            left: 0;
            bottom: 55px;
        }

        .cta__text {
            font-size: 12px;
            line-height: 18px;
            margin-top: 15px;
        }

        .pr-help {
            padding: 60px 0 70px;
        }

        .pr-help__left {
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .pr-help__visit-help {
            -ms-flex-item-align: start;
            -webkit-align-self: flex-start;
            align-self: flex-start;
        }

        .pr-help__h2 {
            font-size: 22px;
            line-height: 30px;
            margin: 0 0 20px 0;
        }

        .pr-help__link {
            font-size: 18px;
            line-height: 24px;
        }

        .pr-help__right {
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .pr-help__card {
            max-width: 100%;
            margin-bottom: 20px;
        }
    }

    @media screen and (max-width: 767px) {
        .main-content {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .main-content br {
            display: none;
        }

        .main-content h1 {
            font-size: 26px;
            line-height: 34px;
            text-align: center;
            padding: 0;
        }

        .main-content h1 span {
            font-size: 26px;
        }

        .main-content__left {
            max-width: 100%;
        }

        .main-content__left p {
            font-size: 14px;
            text-align: center;
            max-width: none;
        }

        .main-content__right {
            background: url('../img-new/screen_768_320.jpg') no-repeat;
            background-position: center;
            /*background-size: cover;*/
            background-size: contain;
            min-width: 332px;
            min-height: 161px;
            position: absolute;
            bottom: 0;
            right: 15px;
            left: 15px;
            margin-right: auto;
        }

        .main-content__video {
            display: none;
        }

        .main-content__button-wrap {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 auto;
        }

        .main-section.-thirdversion .btn-hot-dog.-main {
            margin: 0 auto;
        }

        .main-content__button-wrap span {
            width: 100%;
            text-align: center;
            margin: 5px auto;
        }

        .main-content__button-wrap .request-demo {
            width: 100%;
            text-align: center;
        }

        .social-media {
            height: 185px;
            padding-top: 35px;
        }

        .social-media__h2 {
            font-size: 20px;
            line-height: 30px;
        }

        .social-media__icon {
            width: 50px;
            height: 50px;
        }

        .numbers, .numbers.-thirdversion {
            /*min-height: 390px;
            height: 390px;*/
            min-height: auto;
            height: auto;
            padding-top: 20px;
            padding-bottom: 60px;
        }

        .templates.-main.-thirdversion {
            min-height: auto;
        }

        .main-templates__h2 {
            max-width: 275px;
            font-size: 22px;
            line-height: 30px;
            margin-right: auto;
            margin-left: auto;
        }

        .template-grid__nav {
            max-width: 240px;
        }

        .template-grid__btn {
            margin-bottom: 10px;
        }

        #tplMainTabs {
            display: none;
        }

        #tplMobileTabs {
            display: block;
        }

        .template-grid__item {
            width: 100%;
            max-width: 233px;
        }

        .template-grid__img {
            width: 233px;
            height: 195px;
        }

        .tools-section.-thirdversion {
            height: auto;
            padding-top: 40px;
        }

        .tools-section__h2 {
            font-size: 22px;
            line-height: 30px;
        }

        .tools-section__img {
            height: auto;
            min-height: 225px;
            position: static;
            -ms-flex-order: 2;
            -webkit-order: 2;
            order: 2;
            background-position: center;
            margin: 0 auto;
        }

        .tools-section__text {
            max-width: 90%;
            -ms-flex-order: 1;
            -webkit-order: 1;
            order: 1;
            margin-left: auto;
            margin-right: auto;
        }

        .tools-section__txt br {
            display: none;
        }

        .tools__h3 {
            font-size: 16px;
            line-height: 22px;
            margin-bottom: 10px;
        }

        .tools__subtitle {
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 10px;
        }

        .tools-section__txt {
            font-size: 12px;
            line-height: 18px;
            margin-bottom: 10px;
        }

        .tools__link {
            font-size: 12px;
            line-height: 22px;
        }

        .tools-section__wrap {
            flex-direction: column;
        }

        .tools-section__text {
            padding: 0;
            margin: 0 !important;
            width: 100%;
        }

        .tools-section__wrap.-first {
            padding-right: 0;
        }

        .tools-section__wrap.-second {
            padding-left: 0;
        }

        .tools-section__text.-third {
            padding-right: 0;
        }

        .tools-section__wrap.-fourth {
            padding-left: 0;
        }

        .pr-features {
            padding: 40px 0;
        }

        .pr-features__h2 {
            font-size: 22px;
            line-height: 30px;
        }

        .pr-features__grid {
            margin-top: 40px;
            margin-bottom: -45px;
        }

        .pr-features__item {
            width: 100%;
            max-width: none;
            padding-left: 15px;
            margin-bottom: 45px;
        }

        .pr-features__title {
            font-size: 16px;
        }

        .pr-features__text {
            font-size: 14px;
            line-height: 20px;
            padding: 15px 15px 0 0;
        }

        .pr-integrated {
            padding-top: 40px;
            padding-bottom: 35px;
        }

        .pr-integrated__h2 {
            font-size: 22px;
            line-height: 30px;
            margin-bottom: 30px;
        }

        .pr-integrated__wrap {
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .pr-integrated__link {
            width: 100%;
            height: 35px;
            background-position: center;
            margin-bottom: 20px;
        }

        .pr-pricing {
            padding: 40px 0;
        }

        .pr-pricing__h2 {
            max-width: 60%;
            font-size: 22px;
            line-height: 30px;
            margin-bottom: 20px;
            margin-right: auto;
            margin-left: auto;
        }

        .pr-pricing__text {
            font-size: 12px;
            line-height: 16px;
        }

        .pr-pricing__wrap {
            display: none;
        }

        .pr-pricing__mobile-wrap {
            display: block;
            margin: 35px auto;
        }

        .pr-pricing__btn {
            display: none;
        }

        .pr-pricing__btn.-mobile {
            display: flex;
            width: 200px;
        }

        .customers.-thirdversion {
            min-height: 450px;
            height: 450px;
        }

        .customers__title.-thirdversion {
            font-size: 22px;
            line-height: 30px;
        }

        .say-slider__chevron-wrap.-right {
            right: 15px;
        }

        .featured {
            height: 200px;
            padding: 20px 0 30px;
        }

        .featured__link {
            min-width: 21%;
            margin: 20px auto;
        }

        .featured_logo_block.cofound {
            width: 50px;
            height: 60px;
        }

        .cta__title.-thirdversion {
            line-height: 30px;
            margin-top: 35px;
        }

        .comming-soon.cta .cta-wrap {
            right: 0;
            left: 0;
        }

        .pr-help {
            padding: 40px 0 60px;
        }

        .pr-help__h2 {
            font-size: 22px;
            line-height: 30px;
            text-align: center;
            margin: 0 auto 30px;
        }

        .pr-help__visit-help {
            margin-bottom: 40px;
        }

        .pr-help__link {
            font-size: 18px;
            line-height: 24px;
        }

        .pr-help__wrap {
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .pr-help__col {
            width: 100%;
        }

        .pr-help__left {
            text-align: center;
        }

        .pr-help__right {

            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .pr-help__card {
            max-width: 80%;
            margin: 0 auto 20px;
        }

        .pr-help__title {
            padding-right: 40px;
        }
    }

    @media screen and (max-width: 589px) {
        .numbers__wrap, .numbers__wrap.-thirdversion {
            -ms-flex-direction: column;
            flex-direction: column;
            width: auto;
        }

        .numbers-block.-thirdversion {
            width: auto;
        }
    }

    @media screen and (max-width: 589px) {

    }

    @media screen and (max-width: 530px) {
        .main-content__right {
            min-width: auto;
            min-height: 140px;
        }
    }

    @media screen and (max-width: 414px) {

    }

    @media screen and (max-width: 360px) {

        .main-content__right {
            min-height: 130px;
        }
    }

    @media screen and (max-width: 320px) {

        .main-content h1 span {
            font-size: 25px;
        }

        .main-content__right {
            min-width: 280px;

            right: 15px;
            left: 15px;
        }

        .social-media {
            height: auto;
            padding: 40px 0 60px;
        }

        .social-media__h2 {
            font-size: 18px;
            line-height: 26px;
        }

        .tools-section.-thirdversion {
            height: auto;
            padding: 40px 0 60px;
        }

        .tools-section__img {
            min-height: 185px;
        }

        .pr-help__card {
            max-width: 100%;
        }
    }

</style>

<div id="header-content" class="main-content">
    <div class="main-content__left">
        <h1 class="main-title"><?php the_field('main_page_header_title') ?></h1>
        <p class="main-description"><?php the_field('main_page_header_description') ?></p>
        <div class="main-content__btns-container">
            <a href="//app.promorepublic.com#signup" class="main-btn">Start your free trial</a>
            <a href="/en/agencies-freelancers.php" class="secondary-btn secondary-btn--white">Solution for agencies</a>
        </div>
        <p class="social-description"><?php the_field('integrated_social_media_text') ?></p>
        <div class="main-content__social-container">

            <?php /*
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/socials/twitter-white.svg" alt="Twitter" class="main-content__social main-content-twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/socials/facebook-white.svg" alt="Facebook" class="main-content__social">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/socials/instagram-white.svg" alt="Instagram" class="main-content__social main-content-instagram">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/socials/pinterest-white.svg" alt="Pinterest" class="main-content__social">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/socials/linkedin-white.svg" alt="LinkedIn" class="main-content__social">
            */ ?>

            <?php
            if (have_rows('integrated_social_media_images')):

                // loop through the rows of data
                while (have_rows('integrated_social_media_images')) : the_row();

                    // display a sub field value
                    $image = get_sub_field('integrated_social_media_image');
                    $iconAlt = get_sub_field('alt_for_social_icons');
                    $cssClass = get_sub_field('css_class');

                    ?>

                    <img class="main-content__social <?php echo $cssClass ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $iconAlt ?>"/>

                    <?php
                endwhile;


                // no rows found

            endif;
            ?>

        </div>
    </div>
    <div class="main-content__new-video video-tab video-smb">
        <video autoplay loop muted playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/resources/images/video/factory_video.mp4" type="video/mp4"/>
            <source src="<?php echo get_template_directory_uri(); ?>/resources/images/video/factory_video.webm" type="video/webm"/>
            <source src="<?php echo get_template_directory_uri(); ?>/resources/images/video/factory_video.ogv" type="video/ogg"/>
        </video>
    </div>
</div>
</div>
<div class="main-section__bg">
    <video autoplay loop muted playsinline class="factory-bg">
        <source src="<?php echo get_template_directory_uri(); ?>/resources/images/video/factory_video_bg.mp4" type="video/mp4"/>
        <source src="<?php echo get_template_directory_uri(); ?>/resources/images/video/factory_video_bg.webm" type="video/webm"/>
        <source src="<?php echo get_template_directory_uri(); ?>/resources/images/video/factory_video.ogv" type="video/ogg"/>
    </video>
</div>
</section>


<section class="numbers -fourthversion">
    <div class="container container--little">
        <p class="fourthversion-section-subtitle"><?php the_field('achievement_in_numbers_title') ?></p>
        <div class="numbers__wrap -thirdversion">
            <?php
            if (have_rows('achievement_in_numbers')):
                // loop through the rows of data
                while (have_rows('achievement_in_numbers')) : the_row();

                    // display a sub field value
                    $number = get_sub_field('number');
                    $description = get_sub_field('description');

                    ?>
                    <div class="numbers-block -thirdversion">
                        <p class="numbers__number numbers__posts"><?php echo $number ?></p>
                        <p class="numbers__text">
                            <?php echo $description ?>
                        </p>
                    </div>

                    <?php
                endwhile;
                // no rows found
            endif;
            ?>
        </div>
    </div>
</section>

<section class="industry" id="industry">
    <div class="container">
        <p class="fourthversion-section-main-title"><?php the_field('industries_title') ?></p>
        <p class="industry__description"><?php the_field('industries_description') ?></p>
        <div class="image-box-container">
            <?php
            if (have_rows('industries_links')):
                // loop through the rows of data
                while (have_rows('industries_links')) : the_row();

                    // display a sub field value
                    $image = get_sub_field('industries_image');
                    $description = get_sub_field('industries_text');
                    $link = get_sub_field('industries_link');

                    ?>
                    <a href="<?php echo $link ?>" class="image-box">
                        <span class="image-box__inner-content">
                            <p class="image-box__text"><?php echo $description ?></p>
                        </span>
                    </a>

                    <?php
                endwhile;
                // no rows found
            endif;
            ?>
        </div>
        <div class="industry__not-find-container">
            <p><?php the_field('industries_not_find'); ?></p>
            <a href="<?php the_field('industries_promo_link'); ?>">Start your free trial now</a>
        </div>
    </div>
</section>

<section class="products-features">
    <p class="fourthversion-section-main-title">What’s included?</p>

    <div class="products-features__row products-features--bg-green">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-left">
                    <img class="products-features__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-calendar.svg" alt="Calendar">
                    <p class="products-features__title -white-color">Smart<br> Posting</p>
                    <p class="products-features__description -white-color">Automate posting to social with<br> smart slots and templates library.</p>
                    <a href="/en/pricing.php" class="products-features__price -white-color">Starting at $9<i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="/en/smart-posting.php" class="secondary-btn secondary-btn--white">Learn More</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/products/smb-product-1.png" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>

    <div class="products-features__row">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-right">
                    <img class="products-features__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-ads.svg" alt="Horn">
                    <p class="products-features__title">Intelligent<br> Ads</p>
                    <p class="products-features__description">
                        <b class="products-features--description-bold">Get more customers</b> with Facebook<br> and Instagram Ads!</p>
                    <a href="/en/pricing.php" class="products-features__price">Starting at $49<i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="/en/intelligent-ads.php" class="secondary-btn">Learn More</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/products/smb-product-2.png" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>

    <div class="products-features__row products-features--bg-pink">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-left">
                    <img class="products-features__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-monitoring.svg" alt="Monitoring">
                    <p class="products-features__title -white-color">Social<br> Monitoring</p>
                    <p class="products-features__description -white-color">
                        <b class="products-features--description-bold">Engage with your customers </b>wherever<br> they talk about you.
                    </p>
                    <a href="/en/pricing.php" class="products-features__price -white-color">Starting at $49<i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="/en/smart-monitoring.php" class="secondary-btn secondary-btn--white">Learn More</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/products/smb-product-3.png" alt="Screenshot">
                </div>
            </div>
        </div>
    </div>

    <div class="products-features__row">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-right">
                    <div class="products-features__full-service-icons-container">
                        <img class="products-features__full-service-icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-monitoring.svg" alt="Tools Icon">
                        <img class="products-features__full-service-icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-ads.svg" alt="Tools Icon">
                        <img class="products-features__full-service-icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-calendar.svg" alt="Tools Icon">
                    </div>
                    <p class="products-features__title">Full<br> Service</p>
                    <p class="products-features__description">It’s when <b class="products-features--description-bold">WE</b> manage<br> all our products for you.</p>
                    <ul class="products-features__list">
                        <li>Paid Ad Campaigns Setup</li>
                        <li>Social Performance and ROI Reports</li>
                        <li>Automated Content Creation</li>
                        <li>Custom Rich Media Creation</li>
                        <li>Facebook Ad Expert Consultation</li>
                        <li>Dedicated Account Manager</li>
                    </ul>
                    <a href="/en/pricing.php" class="products-features__price">Starting at $199<i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="//get.promorepublic.com/fullservice/" class="main-btn">contact us</a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <img class="products-features__img products-features-fullservice-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/products/full-service.png"
                         srcset="<?php echo get_template_directory_uri(); ?>/resources/images/products/full-service.png 1x, <?php echo get_template_directory_uri(); ?>/resources/images/products/ 2x"
                         alt="Full Service">
                </div>
            </div>
        </div>
    </div>

</section>

<section class="features">
    <div class="container">
        <p class="fourthversion-section-main-title">What’s under the hood?</p>
        <div class="features__container">
            <div class="features__column">
                <ul class="features-list">
                    <li>
                        <p class="features-list__title">Post Ideas Library</p>
                        <div class="features-list__description">6,000+ handcrafted templates, packed and ready to be published.
                            <b class="features-list__view" data-src="../img-new/new-landing/features_assets/screenshots/post_ideas.png">View <i></i></b>
                        </div>

                    </li>
                    <li>
                        <p class="features-list__title">Scheduling and planning</p>
                        <div class="features-list__description">Effortlessly plan and publish posts with Autopilot technology, at the best time for optimal reach! <b class="features-list__view"
                                                                                                                                                                      data-src="../img-new/new-landing/features_assets/screenshots/autopilot.png">View
                                <i></i></b>
                        </div>
                    </li>
                    <li>
                        <p class="features-list__title">Content Calendar</p>
                        <div class="features-list__description">Choose stunning social media posts based on upcoming events: holidays, trends and more. <b class="features-list__view"
                                                                                                                                                           data-src="../img-new/new-landing/features_assets/screenshots/content_calendar.png">View
                                <i></i></b>
                        </div>
                    </li>
                    <li>
                        <p class="features-list__title">iOS and Android Apps</p>
                        <div class="features-list__description">Use stickers to create promotional visuals on the go, and publish your promo visual to wherever you need.
                        </div>
                    </li>
                    <li>
                        <p class="features-list__title">Repost, reschedule, auto-repeat publications</p>
                        <div class="features-list__description">Plan evergreen content sharing and set automatic repeating of your best posts.</div>
                    </li>
                    <li>
                        <p class="features-list__title">Upload multiple photos and videos <span>coming soon</span></p>
                        <div class="features-list__description">Bulk-upload images and videos, saving time and effort on social media posting.
                        </div>
                    </li>
                    <li>
                        <p class="features-list__title">Statistics (Clicks, Views, Impressions)</p>
                        <div class="features-list__description">Get insights about every post to see where your brand succeeds.</div>
                    </li>
                </ul>
            </div>
            <div class="features__column">
                <ul class="features-list">
                    <li>
                        <p class="features-list__title">Full image editing</p>
                        <div class="features-list__description">Customize templates or create your posts from scratch, using custom fonts, stickers banners and backgrounds..
                            <b class="features-list__view" data-src="../img-new/new-landing/features_assets/screenshots/graphics_editor.png">View <i></i></b>
                        </div>
                    </li>
                    <li>
                        <p class="features-list__title">Integrated photostocks</p>
                        <div class="features-list__description">100,000 images are included, so you can find every cat photo you would ever need.</div>
                    </li>
                    <li>
                        <p class="features-list__title">Instagram Publishing</p>
                        <div class="features-list__description">Seize the power of modern social media! Post to Instagram with PromoRepublic Mobile App.</div>
                    </li>
                    <li>
                        <p class="features-list__title">Approval process and collaboration</p>
                        <div class="features-list__description">Add your team members, plan and manage content and review mentions together!</div>
                    </li>
                    <li>
                        <p class="features-list__title">Multiple Instagram accounts</p>
                        <div class="features-list__description">Connect as many IG profiles as you need, and publish simultaneously to all of them.</div>
                    </li>
                    <li>
                        <p class="features-list__title">Mentions and comments monitoring</p>
                        <div class="features-list__description">Respond to comments, reviews and mentionsin time, and mnage your brand’s reputation.
                        </div>
                    </li>
                    <li>
                        <p class="features-list__title">Yelp and Google my Business</p>
                        <div class="features-list__description">Manage listings and let your customers notice you in good shape.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="features-popup popup">
        <div class="features-popup__container popup-container">
            <img src="" alt="Screenshot">
            <span class="close-features-popup"><i class="fa fa-times-circle"></i></span>
        </div>
    </div>
</section>

<section class="info-box free-trial">
    <div class="container">
        <div class="info-box-container">
            <p class="fourthversion-section-main-title">Start a 14-day free trial</p>
            <div class="info-box__buttons-container">
                <a href="//app.promorepublic.com#signup" class="main-btn">try it free</a>
                <a href="/en/pricing.php" class="secondary-btn">see pricing</a>
            </div>
            <p class="info-box__description">Try products free for 14 days.<br>Upgrade or downgrade any time. No credit card required.</p>
        </div>
    </div>
</section>

<section class="featured -fourthversion">
    <div class="container">
        <p class="fourthversion-section-subtitle">Mentioned in world-famous Tech media:</p>
        <div class="featured__wrap">
            <a class="featured__link -tnw" href="https://thenextweb.com/entrepreneur/2016/03/03/ukraine-estonia-chile-finland-saga-four-accelerators/">
                <div class="featured_logo_block tnw"></div>
            </a>
            <a class="featured__link -smt" href="https://www.socialmediatoday.com/news/5-of-the-best-social-media-management-tools-to-help-streamline-your-efforts/531697/">
                <div class="featured_logo_block smt"></div>
            </a>
            <a class="featured__link -cofound" href="http://www.socialmediaexaminer.com/author/alla-bogdan/" target="_blank">
                <div class="featured_logo_block cofound"></div>
            </a>
            <a class="featured__link -chief" href="https://chiefmartec.com/">
                <div class="featured_logo_block chief"></div>
            </a>
            <a class="featured__link -arctic" href="https://techcrunch.com/2017/06/26/promorepublic-raises-1-2m-for-ai-which-creates-social-media-for-small-businesses/">
                <div class="featured_logo_block arctic"></div>
            </a>
        </div>
    </div>
</section>


<section class="webinars">
    <div class="container">
        <div class="webinars__left-column">
            <p class="fourthversion-section-subtitle">learn more about social commerce</p>
            <p class="fourthversion-section-main-title">Free weekly webinars</p>
            <p class="webinars__description">Join free weekly webinars to get inspiration and guidance. Our Social Commerce expert will teach you tricks & tips for all social networks!</p>
            <a class="main-btn main-btn_white" href="//get.promorepublic.com/free-weekly-webinars/">book a seat</a>
        </div>
        <div class="webinars__right-column">
            <img class="webinars__img" src="<?php echo get_template_directory_uri(); ?>/resources/images/webinars/webinars-img.png" alt="Alla Bogdan">
            <div class="webinars__author-container">
                <p class="webinars__author">Alla Bogdan</p>
                <p class="webinars__author-position">Digital marketer,<br>content creator</p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="white" points="0,100 100,0 100,100"/>
    </svg>
</section>


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


<section class="popular-posts">
    <div class="container">
        <p class="fourthversion-section-title">Social Media Resources<br> by PromoRepublic</p>
        <p class="fourthversion-section-subtitle">featured articles</p>
        <div class="popular-posts__posts-container">
            <div class="popular-posts__column">
                <a href="//promorepublic.com/en/blog/advertise-0-budget/" class="poular-posts__link" target="_blank">
                    <span class="poular-posts__link-inner-content"></span>
                </a>
            </div>
            <div class="popular-posts__column">
                <a href="//promorepublic.com/en/blog/tips-how-to-sell-on-instagram/" class="poular-posts__link" target="_blank">
                    <span class="poular-posts__link-inner-content"></span>
                </a>
            </div>
            <div class="popular-posts__column">
                <a href="//promorepublic.com/en/blog/facebook-content-marketing-for-small-business/" class="poular-posts__link" target="_blank">
                    <span class="poular-posts__link-inner-content"></span>
                </a>
            </div>
        </div>
        <div class="btn-container"><a href="//promorepublic.com/en/blog/" class="main-btn" target="_blank">see all articles</a></div>
    </div>
</section>

<section class="help">
    <div class="container">
        <p class="fourthversion-section-main-title">Have questions?<br>We’re always here to help.</p>
        <div class="help__blocks-container">
            <div class="help__block">
                <div class="help__icon-container"><img class="help__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/operator-blue.svg" alt="Help"></div>
                <p class="help__description">Talk to our Social Media Expert,<br>see PromoRepublic in action, & get<br>your questions answered.</p>
                <a href="//get.promorepublic.com/demo/" class="main-btn main-btn--blue">schedule a demo</a>
            </div>
            <div class="help__block">
                <div class="help__icon-container"><img class="help__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/discuss-issue-blue.svg" alt="Question"></div>
                <p class="help__description">Start a chat right from this page.<br>Our advisors will help you<br>to solve your issues.</p>
                <div onclick="Intercom('showNewMessage')" class="main-btn">start a live chat</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
