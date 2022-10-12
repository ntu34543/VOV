<!DOCTYPE html>
<![if|E 8]>
<html <?php language_attributes(); ?> class="ie8">
<![endif]>
<![if!|E]>
<html <?php language_attributes(); ?>>
<![endif]>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- slide -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Bookstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!--  -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_enqueue_style("", get_template_directory_uri()."/assets/css/app.css"); do_action("wp_enqueue_style"); ?>



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="header">
            <div class="vov">
                <ul class="vov__name">
                    <!-- <li><i class="fa-solid fa-house"></i></li> -->
                    <li>VOV1</li>
                    <li>VOV2</li>
                    <li>VOV3</li>
                    <li>VOV4</li>
                    <li>VOV5</li>
                    <li>VOV6</li>
                    <li>VOV GT</li>
                    <li>VTC HD</li>
                </ul>
            </div>
            <div class="infor">
                <div>
                    <a href="" class="infor__logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Logo_VOV.svg/1200px-Logo_VOV.svg.png" alt="">
                    </a>
                </div>
                <div>
                    <p>Thứ 5, nagy 23 tháng 10 nă 2022</p>
                </div>
                <div class="infor__logoSocial">
                    <i style="background-color: #1877f2;" class="fa-brands fa-facebook-f"></i>
                    <i style="background-color: #2a0d21;" class="fa-brands fa-instagram"></i>
                    <i style="background-color: #ff0000;" class="fa-brands fa-tiktok"></i>
                    <i style="background-color: #0180c7;" class="fa-brands fa-youtube"></i>
                </div>
                <div class="xemnghe">
                    <button class="btnxemnghe">xem & nghe <svg class="svgplay" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                        </svg></button>
                </div>
                <div>
                    <button class="English">English</button>
                </div>
                <div>
                    <div class='search_con'>
                        <form action="/search" method="get" class="input_con">
                            <input type="text" spellCheck="False" id="queryFind" />
                            <span id="clearBtn"><i class="bi bi-x-lg"></i></span>
                            <a href="https://t.me/rawnge" target="_blank">
                                <span><svg class="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                                    </svg></span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="fuild_header">
                <div class="header_mainmenu">
                    <div class="home-icon">
                        <a href="<?php echo  get_home_url() ?>"> <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </div>

                    <ul>
                        <?php
                        $categories = get_categories(array(
                            "post_type" => 'post',
                            "orderedby" => "name",
                            "parent" => 0
                        ));

                        foreach ($categories as $category) {
                            printf('<li class="category-name">');
                            printf(
                                '<a href="%1$s" class="button"><span>%2$s</span> </a>',
                                esc_url(get_category_link($category->term_id)),
                                esc_html($category->name)
                            );
                            printf('</li>');
                        }
                        ?>
                    </ul>
                </div>
            </div>