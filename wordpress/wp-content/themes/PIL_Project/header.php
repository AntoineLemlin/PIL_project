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
    <nav class="navbar navbar-expand-lg navbar-dark" >
           
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon">
                <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>

                <img class="" src="<?php echo $logo[0] ?>" alt="PIL logo" >
           </span>
           </button>

           <div id="navigation" class="collapse navbar-collapse flex-column" >               
               <?php
                   wp_nav_menu(
                       array(
                           'menu' => 'primary',
                           'container'=> '',
                           'theme_location' => 'primary',
                           'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                       )

                   );

               ?>

           </div>
           
    </nav>



    </header>

