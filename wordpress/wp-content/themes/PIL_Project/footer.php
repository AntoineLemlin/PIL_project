<?php
/* Template Name: Footer */
?>

<?php
$title = get_field('title_pole', 'options');
$mail = get_field('mail_pole', 'options');
$phone = get_field('phone_pole', 'options');
$street_name = get_field('street_name_pole', 'options');
$street_number = get_field('street_number_pole', 'options');
$postal_code = get_field('postal_code_pole', 'options');
$city = get_field('city_pole', 'options');
$country = get_field('country_pole', 'options');
$copyright = get_field('copyright_pole', 'options');
$confidentiality = get_field('confidentiality_pole', 'options');
$coders = get_field('coders', 'options');
$designer = get_field('designer', 'options');

?>

<footer>
    <div class="contact">
        <div class="titleAdress">
            <h4 class="titlePole"><?php echo $title; ?></h4>
            <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
            <p>
                <?php echo $street_name . ',' ?>
                <?php echo $street_number; ?>
            </p>
            <p>
                <?php echo $postal_code . ' '; ?>
                <?php echo $city  . ', '; ?>
                <?php echo $country; ?>
            </p>
        </div>
        <div class="phone">
            <div class="number"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div>
        </div>
    </div>
    <div class="copyright">
        <div class="menuCredits">
            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'footer',
                        'theme_location' => 'footer'
                    )
                );
                ?>
            </nav>
            <h6><?php echo $copyright . ' © 2021'; ?></h6>
            <h6><?php echo $confidentiality; ?></h6>
        </div>
        <div class="madeBy">
            <h6><?php echo $designer; ?><a href="https://savoirfaire.digital/"> savoirefaire.digital</a></h6>
            <h6><?php echo $coders; ?><a href="https://becode.org/"> becode.org</a></h6>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>