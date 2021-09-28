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
?>

<footer>
    <br>
    <br>
    <?php echo $title; ?>
    <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
    <a href="<?php echo $phone; ?>"><?php echo $phone; ?></a>
    <?php echo $street_name; ?>
    <?php echo $street_number; ?>
    <?php echo $postal_code; ?>
    <?php echo $city; ?>
    <?php echo $country; ?>
    <?php echo $copyright; ?>
    <?php echo $confidentiality; ?>
    <p>Coding by BeCode</p>
    <p>Design by D6D</p>
</footer>

<?php wp_footer(); ?>

</body>

</html>