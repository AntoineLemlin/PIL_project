<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./wp-content/themes/PIL_Project/assets/images/logo.png">
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <nav class="main-menu-ribbon">
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <div class="logo"><a href=""><img class="main-menu-logo" src="<?php echo $logo[0] ?>" alt="PIL logo"></a></div>

            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'container' => 'div',
                    'container_class' => 'main-menu-list1',
                    'items_wrap' => '<ul id="" class="main-pages menu-desktop">%3$s</ul>'
                )
            );
            ?>

            <?php
            wp_nav_menu(
                array(
                    'menu' => 'contact',
                    'theme_location' => 'contact',
                    'container' => 'div',
                    'container_class' => 'main-menu-list2',
                    'items_wrap' => '<ul id=""  class="contact-page menu-desktop">%3$s</ul>',
                    'link_after' => '&nbsp;<div class="contact-page-arrow"><img class="arrow-desktop" src="' . get_bloginfo('url') . '/wp-content/uploads/2021/09/arrow-conctact-1.svg">
                    </div>'
                )
            );
            ?>

        </nav>
    </header>

    </header>