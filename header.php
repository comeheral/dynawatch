<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?> - <?php the_title() ?> </title>

    <?php wp_head(); ?>
    
</head>
<body>
    <header class="nav">
        <div class="burger">
            <a class="burger__logo" href="#">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.5455 5.45455C24.5455 2.44208 22.1034 0 19.0909 0C8.54729 0 0 8.54729 0 19.0909V40.9091C0 51.4527 8.54729 60 19.0909 60H40.9091C51.4527 60 60 51.4527 60 40.9091V19.0909C60 8.54729 51.4527 0 40.9091 0C37.8966 0 35.4545 2.44208 35.4545 5.45455C35.4545 8.46701 37.8966 10.9091 40.9091 10.9091C45.4278 10.9091 49.0909 14.5722 49.0909 19.0909V40.9091C49.0909 45.4278 45.4278 49.0909 40.9091 49.0909H19.0909C14.5722 49.0909 10.9091 45.4278 10.9091 40.9091V19.0909C10.9091 14.5722 14.5722 10.9091 19.0909 10.9091C22.1034 10.9091 24.5455 8.46701 24.5455 5.45455Z" fill="url(#paint0_linear-488429)"/>
                    <defs>
                    <linearGradient id="paint0_linear-488429" x1="5.75581" y1="2.26744" x2="55.1163" y2="61.0465" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF7D78"/>
                    <stop offset="1" stop-color="#FFC46B"/>
                    </linearGradient>
                    </defs>
                </svg>
            </a>

            <ul class="burger__list">
                <li class="burger__item"><a href="#">Découvrir</a></li>
                <li class="burger__item"><a href="#">Accessoires</a></li>
                <li class="burger__item"><a href="#">Nos valeurs</a></li>
            </ul>

            <a class="button burger__button -gradient" href="">
                <svg class="button__icon" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.79446 4.39627C8.05357 3.09001 9.20591 2.10526 10.5883 2.10526C11.9706 2.10526 13.123 3.09001 13.3821 4.39627H7.79446ZM5.6657 4.39627C5.94262 1.92284 8.04089 0 10.5883 0C13.1356 0 15.2339 1.92284 15.5108 4.39627H18.9474L21.1765 20H0L2.2291 4.39627H5.6657ZM2.42739 17.8947L4.05499 6.50153H17.1215L18.7491 17.8947H2.42739Z" fill="white"/>
                </svg>
                Acheter
            </a>
        </div>

        <div class="burger-toggle">
            <div class="burger-toggle__bar"></div>
        </div>


        <a class="nav__logo" href="#">
            <?php get_template_part('icons/logo-full') ?>
        </a>

        <div class="nav__container">
            <ul class="nav__list">
                <li class="nav__item"><a href="#">Découvrir</a></li>
                <li class="nav__item"><a href="#">Accessoires</a></li>
                <li class="nav__item"><a href="#">Nos valeurs</a></li>
            </ul>

            <a class="button nav__button -small -gradient" href="#">Acheter</a>

            <a class="nav__icon cart" href="#">
                <?php get_template_part('icons/cart') ?>
            </a>
        </div>

    </header>