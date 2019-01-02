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
            <?php
            $headerCTA1 = get_field('main_page_header_cta_1');
            $headerCTA2 = get_field('main_page_header_cta_2'); ?>
            <a href="<?php echo $headerCTA1['url']; ?>" class="main-btn"><?php echo $headerCTA1['title']; ?></a>
            <a href="<?php echo $headerCTA2['url']; ?>" class="secondary-btn secondary-btn--white"><?php echo $headerCTA2['title']; ?></a>
        </div>

        <?php $custom_query = new WP_Query('p=442');
        while($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'site-sections/integrated-socials', get_post_format() )?>

            <?php the_content(); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

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



<?php $custom_query = new WP_Query('p=194');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/numbers', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php $custom_query = new WP_Query('p=207');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/industries', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<section class="products-features">
    <p class="fourthversion-section-main-title"><?php the_field('main_page_products_title'); ?></p>

    <div class="products-features__row products-features--bg-green">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-left">
                    <img class="products-features__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-calendar.svg" alt="Calendar">
                    <p class="products-features__title -white-color"><?php the_field('main_page_smart_posting_title'); ?></p>
                    <p class="products-features__description -white-color"><?php the_field('main_page_smart_posting_description'); ?></p>
                    <?php
                    $smartPostingPrice = get_field('main_page_smart_posting_price');
                    $smartPostingCTA = get_field('main_page_smart_posting_cta'); ?>
                    <a href="<?php echo $smartPostingPrice['url']; ?>" class="products-features__price -white-color"><?php echo $smartPostingPrice['title']; ?><i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="<?php echo $smartPostingCTA['url']; ?>" class="secondary-btn secondary-btn--white"><?php echo $smartPostingCTA['title']; ?></a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <?php $smartPostingImg = get_field('main_page_smart_posting_image'); ?>
                    <img class="products-features__img" src="<?php echo $smartPostingImg['url'] ?>" alt="<?php echo $smartPostingImg['alt'] ?>">
                </div>
            </div>
        </div>
    </div>

    <div class="products-features__row">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-right">
                    <img class="products-features__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-ads.svg" alt="Horn">
                    <p class="products-features__title"><?php the_field('main_page_intelligent_ads_title'); ?></p>
                    <p class="products-features__description"><?php the_field('main_page_intelligent_ads_description'); ?></p>
                    <?php
                    $intelligentAdsPrice = get_field('main_page_intelligent_ads_price');
                    $intelligentAdsCTA = get_field('main_page_intelligent_ads_cta');?>
                    <a href="<?php echo $intelligentAdsPrice['url']; ?>" class="products-features__price"><?php echo $intelligentAdsPrice['title']; ?><i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="<?php echo $intelligentAdsCTA['url']; ?>" class="secondary-btn"><?php echo $intelligentAdsCTA['title']; ?></a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <?php $intelligentAdsImage = get_field('main_page_intelligent_ads_image'); ?>
                    <img class="products-features__img" src="<?php echo $intelligentAdsImage['url']; ?>" alt="<?php echo $intelligentAdsImage['alt']; ?>">
                </div>
            </div>
        </div>
    </div>

    <div class="products-features__row products-features--bg-pink">
        <div class="products-features__container">
            <div class="products-features__column">
                <div class="products-features__text-box products-features--text-left">
                    <img class="products-features__icon" src="<?php echo get_template_directory_uri(); ?>/resources/images/icons/tools-monitoring.svg" alt="Monitoring">
                    <p class="products-features__title -white-color"><?php the_field('main_page_social_monitoring_title'); ?></p>
                    <p class="products-features__description -white-color"><?php the_field('main_page_social_monitoring_description'); ?></p>
                    <?php
                    $socialMonitoringPrice = get_field('main_page_social_monitoring_price');
                    $socialMonitoringCTA = get_field('main_page_social_monitoring_cta'); ?>
                    <a href="<?php echo $socialMonitoringPrice['url']; ?>" class="products-features__price -white-color"><?php echo $socialMonitoringPrice['title']; ?><i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="<?php echo $socialMonitoringCTA['url']; ?>" class="secondary-btn secondary-btn--white"><?php echo $socialMonitoringCTA['title']; ?></a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <?php $socialMonitoringImage = get_field('main_page_social_monitoring_image'); ?>
                    <img class="products-features__img" src="<?php echo $socialMonitoringImage['url']; ?>" alt="<?php echo $socialMonitoringImage['alt']; ?>">
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
                    <p class="products-features__title"><?php the_field('main_page_full__service_title'); ?></p>
                    <p class="products-features__description"><?php the_field('main_page_full__service_description'); ?></p>
                    <ul class="products-features__list">
                        <?php if (have_rows('main_page_full__service_list')):
                            while (have_rows('main_page_full__service_list')): the_row();
                                $fullServiceListItem = get_sub_field('main_page_full__service_list_item');
                                ?>
                                <li><?php echo $fullServiceListItem ?></li>
                            <?php endwhile;
                        endif; ?>
                    </ul>
                    <?php
                    $fullServicePrice = get_field('main_page_full_service_price');
                    $fullServiceCTA = get_field('main_page_full_service_cta');?>
                    <a href="<?php echo $fullServicePrice['url']; ?>" class="products-features__price"><?php echo $fullServicePrice['title']; ?><i class="products-features__price-icon"></i></a>
                    <div></div>
                    <a href="<?php echo $fullServiceCTA['url']; ?>" class="main-btn"><?php echo $fullServiceCTA['title']; ?></a>
                </div>
            </div>
            <div class="products-features__column">
                <div class="products-features__img-container">
                    <?php $fullServiceImage = get_field('main_page_full__service_image'); ?>
                    <img class="products-features__img products-features-fullservice-img" src="<?php echo $fullServiceImage['url'] ?>" alt="<?php echo $fullServiceImage['alt'] ?>">
                </div>
            </div>
        </div>
    </div>

</section>



<?php $custom_query = new WP_Query('p=175');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/features', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php   $pricingLink = "/en/pricing/";
        $custom_query = new WP_Query('p=270');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/free-trial.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php $custom_query = new WP_Query('p=272');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/mentioned', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<section class="webinars">
    <div class="container">
        <div class="webinars__left-column">
            <p class="fourthversion-section-subtitle"><?php the_field('main_page_webinars_subtitle'); ?></p>
            <p class="fourthversion-section-main-title"><?php the_field('main_page_webinars_title'); ?></p>
            <p class="webinars__description"><?php the_field('main_page_webinars_description'); ?></p>
            <?php $webinarsLink = get_field('main_page_webinars_cta'); ?>
            <a class="main-btn main-btn_white" href="<?php echo $webinarsLink['url']; ?>"><?php echo $webinarsLink['title']; ?></a>
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



<?php $custom_query = new WP_Query('p=278');
while($custom_query->have_posts()) : $custom_query->the_post();
    get_template_part( 'site-sections/clients', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php $custom_query = new WP_Query('p=173');
while($custom_query->have_posts()) : $custom_query->the_post();
get_template_part( 'site-sections/popular-posts', get_post_format() )?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php $custom_query = new WP_Query('p=324');
while($custom_query->have_posts()) : $custom_query->the_post();
    include( locate_template( 'site-sections/help-chat.php', false, false ) ); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



<?php get_footer(); ?>
