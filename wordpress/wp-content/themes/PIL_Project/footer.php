<?php
/* Template Name: Footer */
?>
<?php wp_footer(); ?>
<?php
$title_pole = get_field('title_pole');
$mail_pole = get_field('mail_pole');
$phone_pole = get_field('phone_pole');
$adress_pole = get_field('adress_pole');
$copyright_pole = get_field('copyright_pole');
$confidentality_pole = get_field('confidentiality_pole');
?>

<footer>
    <br>
    <br>
    <?php echo $title_pole; ?>

    <a href="mailto:<?php echo $mail_pole; ?>"><?php echo $mail_pole; ?></a>

    <a href="<?php echo $phone_pole; ?>"><?php echo $phone_pole; ?></a>

    <?php echo $adress_pole; ?>

    <?php echo $copyright_pole; ?>

    <?php echo $confidentality_pole; ?>

    <p>Coding by BeCode</p>

    <p>Design by D6D</p>
</footer>

</body>

</html>