<?php
/* Template Name: Contact */
?>
<?php
get_header();
?>

<?php
$title = get_the_title();
$mail = get_field('mail_pole', 'options');
$phone = get_field('phone_pole', 'options');
$street_name = get_field('street_name_pole', 'options');
$street_number = get_field('street_number_pole', 'options');
$postal_code = get_field('postal_code_pole', 'options');
$city = get_field('city_pole', 'options');
$country = get_field('country_pole', 'options');
?>
<main class="pageContactContainer">
    <div class="titleStreetPhoneMailMaps">
        <div class="titleStreetItinerary">
            <h2 class="title">
                <?php echo $title; ?>
            </h2>
            <div class="street">
                <p>
                    <?php echo $street_name . ',' ?>
                    <?php echo $street_number; ?>
                </p>
                <p>
                    <?php echo $postal_code . ' '; ?>
                    <?php echo $city  . ', '; ?>
                    <?php echo $country; ?>
                </p>
                <button class="itinerary">Itinéraire</button>
            </div>
        </div>
        <div class="phoneMailGmaps">
            <h2 class="phoneMail">
                <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
            </h2>
            <div class="gmaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10122.725283500962!2d5.5868151!3d50.6330366!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47f4b33cb5f3e2bf!2sBeCode%20Li%C3%A8ge!5e0!3m2!1sen!2sbe!4v1633332395413!5m2!1sen!2sbe" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

</main>
<!-- Google maps reach API + get field type Gmaps -->
<?php
get_footer();
?>