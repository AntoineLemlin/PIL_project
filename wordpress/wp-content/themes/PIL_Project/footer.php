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
    <br>
    <br>
    <ul class="footer">
        <li class="titleFooter">
            <?php echo $title; ?>
        </li>
        <li class="mailFooter">
            <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
        </li>
        <li class="phoneFooter">
            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
        </li>
        <li class="streetFooter">
            <?php echo $street_name; ?>
            <?php echo $street_number; ?></li>
        <li class="postalFooter"><?php echo $postal_code; ?><?php echo $city; ?><?php echo $country; ?></li>
        <li class="copyrightFooter">
            <?php echo $copyright; ?>
        </li>
        <li class="confidentialityFooter">
            <?php echo $confidentiality; ?>
        </li>
        <li class="designByFooter">
            <?php echo $designer; ?><a href="https://savoirfaire.digital/"> savoirefaire.digital</a>
        </li>
        <li class="madeByFooter">
            <?php echo $coders; ?><a href="https://becode.org/"> becode.org</a>
        </li>
    </ul>
</footer>

<?php wp_footer(); ?>

</body>

</html>