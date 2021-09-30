<?php 
/*Template Name: social */ 
$facebook = get_field('facebook', 'option');
$twitter = get_field('twitter', 'option');
$linkedIn = get_field('linkedin', 'option');
$instagram = get_field('instagram', 'option');

?>

    <aside>
        <nav>
           <?php wp_nav_menu(array('theme_location' => 'social')); ?>
        </nav>
    </aside>