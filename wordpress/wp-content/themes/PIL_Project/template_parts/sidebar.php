<?php 
/*Template Name: social */ 
$facebook = get_field('facebook', 'option');
$twitter = get_field('twitter', 'option');
$linkedIn = get_field('linkedin', 'option');
$instagram = get_field('instagram', 'option');

?>

<aside>
    <nav>
        <ul>
            <li><a href="<?php echo $facebook; ?>">Fb</a></li>
            <li><a href="<?php echo $twitter; ?>">Tw</a></li>
            <li><a href="<?php echo $linkedIn; ?>">Lk</a></li>
            <li><a href="<?php echo $instagram; ?>">In</a></li>
        </ul>
    </nav>
</aside>